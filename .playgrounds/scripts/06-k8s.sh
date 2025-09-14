#!/bin/bash

read -r -p "Enter Playground User name (eg. ubuntu): " USER_NAME

# Check if the input is empty
if [ -z "$USER_NAME" ]; then
    echo "Error: Docker Hub user name cannot be empty. Exiting..."
    exit 1
fi

sudo apt update -y

sudo apt install curl wget apt-transport-https -y

sudo usermod -aG docker $USER_NAME

sudo chmod 666 /var/run/docker.sock

sudo apt install qemu-kvm libvirt-clients libvirt-daemon-system bridge-utils virtinst libvirt-daemon

sudo adduser -a $USER_NAME libvirt
sudo adduser -a $USER_NAME libvirt-qemu

# newgrp libvirt
# newgrp libvirt-qemu
#++++++++ Install minikube, and kubectl Installation +++++++++++++++++++++++++++++

curl -LO https://storage.googleapis.com/minikube/releases/latest/minikube-linux-amd64

sudo install minikube-linux-amd64 /usr/local/bin/minikube

curl -LO "https://dl.k8s.io/release/$(curl -L -s https://dl.k8s.io/release/stable.txt)/bin/linux/amd64/kubectl"

sudo install -o root -g root -m 0755 kubectl /usr/local/bin/kubectl

echo 'PS1="\[\e[36m\]controlplane \[\e[32m\]\w\[\e[m\]\$ "' >>/home/mcdns/.bashrc

#++++++++ Install Helm ++++++++++++++++++++++++++++++
sudo snap install helm --classic

#++++++++++++++ Initialize nodes +++++++++++++

# multinode
sudo -u $USER_NAME minikube start --nodes 2 -p multinode
sudo -u $USER_NAME minikube stop -p multinode

sudo -u $USER_NAME minikube start --driver=docker

#Argocd start
sudo -u $USER_NAME kubectl create ns argocd
sudo -u $USER_NAME kubectl apply -n argocd -f https://raw.githubusercontent.com/argoproj/argo-cd/v2.5.8/manifests/install.yaml
sudo -u $USER_NAME kubectl get all -n argocd

echo "Waiting for 30 seconds..."
sleep 30

sudo -u $USER_NAME kubectl port-forward svc/argocd-server -n argocd --address 0.0.0.0 8090:80

# sudo -u mcdns kubectl -n argocd get secret argocd-initial-admin-secret -o jsonpath="{.data.password}" | base64 -d
#ArgoCD end

#sudo -u mcdns minikube stop
