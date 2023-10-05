#!/bin/sh

chown -R www-data:www-data /var/www/html
rm /var/log/nginx/error.log
service php8.1-fpm start
service nginx start
tail -f /var/log/nginx/error.log
