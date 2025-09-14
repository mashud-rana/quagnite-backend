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

    if [ $is_service_active = "active" ]; then
        print_color "green" "$1 service is active"
    else
        print_color "red" "$1 service is not active"
        exit 1
    fi
}

#++++++++ Vscode Installation ++++++++++++++++++++++++++++++

print_color "green" "Installing Vscode..."

sudo apt update -y

curl -fsSL https://code-server.dev/install.sh | sh

sudo systemctl enable --now code-server@"$USER"

sudo cat ~/.config/code-server/config.yaml

sudo systemctl start code-server@"$USER"

check_service_status code-server@"$USER"

#++++++++ Terraform Installation ++++++++++++++++++++++++++++++

print_color "green" "Installing Terraform..."

sudo apt update -y

sudo apt install curl software-properties-common

wget -O- https://apt.releases.hashicorp.com/gpg | sudo gpg --dearmor -o /usr/share/keyrings/hashicorp-archive-keyring.gpg

echo "deb [signed-by=/usr/share/keyrings/hashicorp-archive-keyring.gpg] https://apt.releases.hashicorp.com $(lsb_release -cs) main" | sudo tee /etc/apt/sources.list.d/hashicorp.list

sudo apt update -y

sudo apt install terraform -y

#++++ Project setup +++++++

print_color "green" "Project Setup..."

sudo mkdir -p "$HOME"/code/terraform-projects
sudo touch "$HOME"/code/terraform-projects/main.tf
sudo touch "$HOME"/code/terraform-projects/provider.tf

sudo cat >"$HOME"/code/terraform-projects/main.tf <<-EOF
resource "local_file" "terraform" {
    filename = "/root/terraform.txt"
    content = "Terraform testing"
}
EOF

print_color "green" "Setup Completed"