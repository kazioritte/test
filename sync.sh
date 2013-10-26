#!/bin/sh

rsync -av --delete --exclude-from=.rsyncignore . ec2-user@54.250.132.148:/var/www/html -e "ssh -i wp.pem" 
