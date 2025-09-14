#!/bin/bash

sudo git clone https://github.com/nahidul77/dockerfiles.git

sudo mv /root/dockerfiles/ansible /root/ansible

sudo mv /root/dockerfiles/jenkins /root/jenkins

sudo rm -r /root/dockerfiles

cd /root/ansible || return

docker compose up -d

docker compose down

cd /root/jenkins || return

docker compose up -d
