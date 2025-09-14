#!/bin/bash

# Prompt the user to enter the domain name
read -r -p "Enter Your Domain name (e.g., domain.com): " DOMAIN_NAME

# Check if the input is empty
if [ -z "$DOMAIN_NAME" ]; then
    echo "Error: Domain name cannot be empty. Exiting..."
    exit 1
fi

sudo certbot certonly --manual -d $DOMAIN_NAME -d *.$DOMAIN_NAME --preferred-challenges dns

sudo systemctl reload nginx
