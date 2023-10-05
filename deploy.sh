#!/bin/sh

rsync -av --delete -e "ssh -i ~/.ssh/sanjo-solutions.pem" sanjo-solutions/ www-data@ec2-3-77-171-31.eu-central-1.compute.amazonaws.com:/var/www/html/wp-content/themes/sanjo-solutions
aws s3 sync --profile sanjo-solutions --delete sanjo-solutions/ s3://www.sanjo-solutions.com/wp-content/themes/sanjo-solutions/
