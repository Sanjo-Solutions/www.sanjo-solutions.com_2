#!/bin/sh

scp -r -i "~/.ssh/sanjo-solutions.pem" translatepress-developer ubuntu@ec2-3-77-171-31.eu-central-1.compute.amazonaws.com:/var/www/html/wp-content/plugins
