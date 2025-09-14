#!/bin/bash

# Prompt the user to enter the domain name
read -r -p "Enter Your Docker hub username: " USER_NAME

# Check if the input is empty
if [ -z "$USER_NAME" ]; then
    echo "Error: Docker Hub user name cannot be empty. Exiting..."
    exit 1
fi

# Prompt the user to enter the domain name
read -r -p "Enter Playground Domain Name: " DOMAIN_NAME

# Check if the input is empty
if [ -z "$DOMAIN_NAME" ]; then
    echo "Error: Playground Domain name cannot be empty. Exiting..."
    exit 1
fi

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++

docker pull "$USER_NAME"/ubuntu_play

echo 'PS1="\[\e[36m\]gitlab@host \[\e[32m\]\w\[\e[m\]\$ "' >>/home/mcdns/.bashrc

#++++++++++++++++++++Nginx+++++++++++++++++++++

NGINX_CONF_PATH="/etc/nginx/sites-available/$DOMAIN_NAME"

NGINX_CONTENT="
server {
    listen 80;
    server_name *.$DOMAIN_NAME;
    return 301 https://\$host\$request_uri;
}

server {
    listen 443 ssl;
    server_name *.$DOMAIN_NAME;

    ssl_certificate /etc/letsencrypt/live/$DOMAIN_NAME/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/$DOMAIN_NAME/privkey.pem;

    location / {
        include proxy_params;
        proxy_http_version 1.1;
        proxy_set_header Upgrade \$http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_read_timeout 86400;
        proxy_pass http://localhost:8070;
    }
}"

sudo bash -c "echo '$NGINX_CONTENT' > $NGINX_CONF_PATH"

sudo systemctl reload nginx

#++++++++ Install & setup Gitlab+++++++++++++++++++++++++++++

sudo apt install ca-certificates curl openssh-server postfix tzdata perl

cd /tmp

curl -LO https://packages.gitlab.com/install/repositories/gitlab/gitlab-ce/script.deb.sh

sudo bash /tmp/script.deb.sh

sudo apt install gitlab-ce

sudo sed -i "s|^external_url '.*'|external_url 'http://localhost:8090'|" /etc/gitlab/gitlab.rb

sudo gitlab-ctl reconfigure

sudo cat /etc/gitlab/initial_root_password
