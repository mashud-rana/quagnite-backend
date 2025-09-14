#!/bin/bash

# Prompt the user to enter the domain name
read -r -p "Enter Your Docker hub username: " USER_NAME

# Check if the input is empty
if [ -z "$USER_NAME" ]; then
    echo "Error: Docker Hub user name cannot be empty. Exiting..."
    exit 1
fi

docker pull "$USER_NAME"/centos8_play

docker pull "$USER_NAME"/chef_play

docker pull "$USER_NAME"/ubuntu_play

docker pull "$USER_NAME"/git_play

docker pull "$USER_NAME"/maven_play

docker pull "$USER_NAME"/powershell

docker pull "$USER_NAME"/pg_play
