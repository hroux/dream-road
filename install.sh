#!/bin/bash
#Script for Ubuntu 17.10

# Ansible
sudo apt-get update -y
sudo apt-get install software-properties-common -y
sudo apt-add-repository ppa:ansible/ansible
sudo apt-get update
sudo apt-get install ansible -y

# Nginx Nginx
sudo apt-get install nginx -y
sudo rm /var/www/html/index.html
sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak
sudo cp ./src/default /etc/nginx/sites-available/default

# PHP 7.2
sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update -y
sudo apt-get install php7.2-fpm -y
sudo apt-get install php7.2-curl php7.2-gd php7.2-mbstring php7.2-xmlrpc php7.2-xml php7.2-zip php7.2 php7.2-common php7.2-cli -y
sudo systemctl restart php7.2-fpm -y

# Symphony 4
sudo apt-get install composer -y

# LXD
sudo apt-get dist-upgrade -y
sudo apt-get install lxd -y
sudo apt-get update -y
newgrp lxd
