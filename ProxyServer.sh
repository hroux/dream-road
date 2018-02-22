#!/bin/bash

# Proxy server automated installation
# and post install checking

# INSTALLATION
echo "LC_ALL=en_US.UTF-8" >> /etc/environment
echo "deb http://x-road.eu/packages trusty main" >> /etc/apt/source.list
echo "deb http://ppa.launchpad.net/nginx/stable/ubuntu trusty main" >> /etc/apt/source.list
echo "deb http://ppa.launchpad.net/openjdk-r/ppa/ubuntu trusty main" >> /etc/apt/source.list

curl http://x-road.eu/packages/xroad_repo.gpg | sudo apt-key add -
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 00A6F0A3C300EE8C
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys EB9B1D8886F44E2A

sudo apt-get update
sudo apt-get install xroad-confproxy

# CHECKING
echo "Checking x-road signer"
sudo initctl list | grep "^xroad-"

echo "Checking xroad-confproxy"
sudo ls /etc/cron.d/ | grep "^xroad-"
