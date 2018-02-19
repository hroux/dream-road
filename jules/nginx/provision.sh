#!/usr/bin/env bash

# nginx
sudo apt-get update
sudo apt-get -y install nginx
sudo apt-get -y install php7.0
sudo service nginx start

# set up nginx server
sudo rm /etc/nginx/sites-enabled/*
sudo cp /vagrant/nginx/conf/nginx.conf /etc/nginx/sites-available/site.conf
sudo chmod 644 /etc/nginx/sites-available/site.conf
sudo ln -s /etc/nginx/sites-available/site.conf /etc/nginx/sites-enabled/site.conf
sudo service nginx restart

# clean /var/www
sudo rm -Rf /var/www

# symlink /var/www => /vagrant
ln -s /vagrant/nginx/www /var/www
