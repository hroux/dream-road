#!/bin/bash
echo "Ajout des Repositories pour X-ROAD Central Server"
echo "#Package for X-ROAD" >> /etc/apt/sources.list
sudo echo "deb http://x-road.eu/packages trusty main" >> /etc/apt/sources.list
sudo echo "deb http://ppa.launchpad.net/nginx/stable/ubuntu trusty main" >> /etc/apt/sources.list
sudo echo "deb http://ppa.launchpad.net/openjdk-r/ppa/ubuntu trusty main" >> /etc/apt/sources.list

echo "Ajout Des clès pour X-ROAD"
curl http://x-road.eu/packages/xroad_repo.gpg | sudo apt-key add -
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys \ 00A6F0A3C300EE8C
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys \ EB9B1D8886F44E2A


echo "Update des Repositories"
sudo apt-get update

echo "Installation Du Central Server"
sudo apt-get install xroad-centralserver
