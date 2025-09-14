#!/bin/bash

function print_color() {

    NC="\033[0m"

    case $1 in
    "green") COLOR="\033[0;32m" ;;
    "red") COLOR="\033[0;31m" ;;
    "*") COLOR="\033[0m" ;;
    esac

    echo -e "${COLOR} $2 ${NC}"
}

function check_service_status() {

    is_service_active=$(systemctl is-active $1)

    if [ "$is_service_active" = "active" ]; then
        print_color "green" "$1 service is active"
    else
        print_color "red" "$1 service is not active"
        exit 1
    fi
}

# Prompt the user to enter the domain name
read -r -p "Enter Your Domain name (e.g., domain.com): " DOMAIN_NAME

# Check if the input is empty
if [ -z "$DOMAIN_NAME" ]; then
    echo "Error: Domain name cannot be empty. Exiting..."
    exit 1
fi

#++++++++ User Setup ++++++++++++++++++++++++++++++
read -r -p "Enter User name (eg. ubuntu): " SYS_USER_NAME
read -r -p "Enter User Password: " SYS_USER_PASSWORD

if [ -n "$SYS_USER_NAME" ] && [ -n "$SYS_USER_PASSWORD" ]; then

    print_color "green" "Setup User..."

    sudo useradd -ms /bin/bash "$SYS_USER_NAME"

    echo "$SYS_USER_NAME:$SYS_USER_PASSWORD" | sudo chpasswd

    sudo usermod -aG sudo "$SYS_USER_NAME"

    sudo sh -c "echo 'PS1=\"\\[\\e[36m\\]${SYS_USER_NAME}@host \\[\\e[32m\\]\\w\\[\\e[m\\]\\$ \"' >> /home/${SYS_USER_NAME}/.bashrc"

    print_color "green" "User Setup Completed.."

else
    echo "Error: User name or password cannot be empty. Exiting..."
    exit 1
fi

#++++++++ Update & Upgrade the system +++++++++++++++++++++

sudo apt update -y

sudo apt upgrade -y

#++++++++ Nginx Installation ++++++++++++++++++++++++++++++

print_color "green" "Installing Nginx..."

sudo add-apt-repository ppa:ondrej/nginx

sudo apt update -y

sudo apt install nginx libnginx-mod-http-cache-purge libnginx-mod-http-headers-more-filter -y

sudo systemctl enable nginx

check_service_status nginx

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
        proxy_pass http://localhost:8080;
    }
}"

sudo bash -c "echo '$NGINX_CONTENT' > $NGINX_CONF_PATH"

sudo ln -s /etc/nginx/sites-available/$DOMAIN_NAME /etc/nginx/sites-enabled/

sudo rm /etc/nginx/sites-enabled/default

sudo systemctl reload nginx

#++++++++ Certbot Installation ++++++++++++++++++++++++++++++

print_color "green" "Installing Certbot"

sudo apt install certbot -y

#++++++++ Docker Installation ++++++++++++++++++++++++++++++

print_color "green" "Installing Docker..."

sudo apt update -y

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg

echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list >/dev/null

sudo apt update -y

apt-cache policy docker-ce

sudo apt install docker-ce -y

sudo systemctl enable docker

check_service_status docker

sudo usermod -aG docker "${SYS_USER_NAME}"

#++++++++ TTYD Installation ++++++++++++++++++++++++++++++

print_color "green" "Installing ttyd..."

curl -LO https://github.com/tsl0922/ttyd/releases/download/1.7.3/ttyd.x86_64

sudo mv ttyd.x86_64 /usr/local/bin/ttyd

sudo chmod +x /usr/local/bin/ttyd

print_color "green" "Server setup completed successfully"
