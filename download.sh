#!/bin/sh

scp -r -i "~/.ssh/sanjo-solutions.pem" ubuntu@ec2-3-77-171-31.eu-central-1.compute.amazonaws.com:/var/www/html/ www.sanjo-solutions.com/
