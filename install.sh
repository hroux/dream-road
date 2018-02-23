#!/bin/bash
#Script for Ubuntu 14.04

echo "[ANSIBLE] Installation..."
sudo apt-get update -y
sudo apt-get install software-properties-common -y
sudo apt-add-repository ppa:ansible/ansible
sudo apt-get update -y
sudo apt-get install ansible -y

echo "[NGINX] Installation..."
sudo apt-get install nginx -y
sudo rm /var/www/html/index.html
echo "[NGINX] Backup of the configuration file"
sudo cp ./src/x-road-installer /etc/nginx/sites-available/ax-road-installer
ln -s /etc/nginx/sites-available/ax-road-installer  /etc/nginx/sites-enabled/ax-road-installer
sudo service nginx restart
echo "[NGINX] Done."

echo "[PHP7.2] Installation..."
sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php
sudo apt update -y
sudo apt install php7.2-fpm -y
sudo apt install php7.2-curl php7.2-gd php7.2-mbstring php7.2-xmlrpc php7.2-xml php7.2-zip php7.2 php7.2-common php7.2-cli -y
sudo systemctl restart php7.2-fpm
sudo service php7.2-fpm status
echo "[PHP7.2] Done."

echo "[SF4] Installation..."
sudo apt-get install composer -y
sudo cp -r road_installer /var/www/html
sudo composer update -d=/var/www/html/road_installer
echo "[SF4] Done."

echo "[GIT] Installation..."
sudo apt-get install git -y
echo "[GIT] Done."

echo "[XROAD] Git Clone on /etc/x-road-repo ..."
sudo mkdir /etc/x-road-repo
sudo chmod 777 /etc/x-road-repo
sudo git clone "https://github.com/ria-ee/X-Road"
sudo cp -r X-Road /etc/x-road-repo
echo "[XROAD] Build - prepare_buildhosts"
/etc/x-road-repo/src/prepare_buildhost.sh
echo "[XROAD] Build - update_ruby_dependencies"
/etc/x-road-repo/src/update_ruby_dependencies.sh
echo "[XROAD] Build - build_packages"
/etc/x-road-repo/src/build_packages.sh
echo "[XROAD] Done."

echo "[LXD] Installation..."
sudo apt install -t xenial-backports lxd lxd-client
sudo apt-get update -y
newgrp lxd
echo "[LXD] Done."
