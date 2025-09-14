#!/bin/bash

# Variables
SERVICE_FILE="/etc/systemd/system/ttyd.service"
SERVICE_CONTENT="[Unit]
Description=ttyd service

[Service]
ExecStart=/usr/local/bin/ttyd -p 8080 bash
Restart=always
User=mcdns
WorkingDirectory=/home/mcdns

[Install]
WantedBy=multi-user.target"

# Create the systemd service file
sudo bash -c "echo '$SERVICE_CONTENT' > $SERVICE_FILE"

# Reload systemd manager configuration
sudo systemctl daemon-reload

# Enable the ttyd service to start on boot
sudo systemctl enable ttyd

# Start the ttyd service
sudo systemctl start ttyd

# Check status of the ttyd service
sudo systemctl status ttyd
