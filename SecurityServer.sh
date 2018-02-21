#!/bin/bash
echo "Ajout des Repositories pour X-ROAD Security Server"
echo "#Package Security Server for X-ROAD" | sudo tee --append /etc/apt/sources.list
echo "deb http://x-road.eu/packages trusty main" | sudo tee --append /etc/apt/sources.list
echo "deb http://ppa.launchpad.net/nginx/stable/ubuntu trusty main" | sudo tee --append /etc/apt/sources.list
echo "deb http://ppa.launchpad.net/openjdk-r/ppa/ubuntu trusty main" | sudo tee --append /etc/apt/sources.list



echo "Ajout Des clès pour X-ROAD"
curl http://x-road.eu/packages/xroad_repo.gpg | sudo apt-key add -
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 00A6F0A3C300EE8C
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys EB9B1D8886F44E2A

echo "Update des Repositories"
sudo apt-get update -y

echo "Installation Du Central Server"
sudo apt-get install xroad-securityserver -y
