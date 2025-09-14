#!/bin/bash

echo 'PS1="\[\e[36m\]container@host \[\e[32m\]\w\[\e[m\]\$ "' >>/home/mcdns/.bashrc
#++++++++ Podman Installation ++++++++++++++++++++++++++++++

sudo apt update -y

sudo apt install -y podman
