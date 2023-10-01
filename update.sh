#!/bin/sh

scp -r -i "~/.ssh/sanjo-solutions.pem" sanjo-solutions ubuntu@ec2-3-77-171-31.eu-central-1.compute.amazonaws.com:/var/www/html/wp-content/themes
# rsync -a --delete -e "ssh -i ~/.ssh/sanjo-solutions.pem" sanjo-solutions/ ubuntu@ec2-3-77-171-31.eu-central-1.compute.amazonaws.com:/var/www/html/wp-content/themes/sanjo-solutions/

# scp -r -i "~/.ssh/sanjo-solutions.pem" translatepress-developer ubuntu@ec2-3-77-171-31.eu-central-1.compute.amazonaws.com:/var/www/html/wp-content/plugins
