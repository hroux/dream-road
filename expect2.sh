#!/usr/bin/expect

set timeout 20

spawn "./install.sh"

expect "Press \[ENTER\] to continue or ctrl-c to cancel adding it"
send "\r"

expect "Press [\ENTER\] to continue or ctrl-c to cancel adding it"
send "\r"

expect "Press [\ENTER\] to continue or ctrl-c to cancel adding it"
send "\r"

expect "Press [\ENTER\] to continue or ctrl-c to cancel adding it"
send "\r"


interact
