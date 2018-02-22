#!/usr/bin/expect

set timeout 120

spawn "./CentralServer.sh"

expect "Enter X-Road Superuser username"
send "hyks"


set timeout 50


expect "Insert admin interface TLS certificate subject name"
send "/CN=hyks-VirtualBox"

expect "Insert admin interface TLS certificate subject name alternatives"
send "IP:172.16.4.118,DNS:hyks-VirtualBox,DNS:hyks-VirtualBox/CN=hyks-VirtualBoxInsert admin interface TLS certificate /CN=hyks-VirtualB$

expect "Insert TLS certificate subject name"
send "/CN=hyks-VirtualBox"

expect "Insert TLS certificate subject name alternatives"
send "IP:172.16.4.118,DNS:hyks-VirtualBox,DNS:hyks-VirtualBox"
