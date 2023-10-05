FROM ubuntu:22.04

ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=Etc/UTC

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y unzip wget
RUN apt-get install -y nginx
RUN apt-get install -y php-fpm # First install php-fpm to avoid installing apache2.
RUN apt-get install -y php-fpm php-mysql php-curl php-dom php-imagick php-zip php-gd php-intl php-mbstring
COPY default.conf /etc/nginx/sites-available/default
COPY php.ini /etc/php/8.1/fpm/
COPY run.sh /root/

EXPOSE 80
CMD /root/run.sh
