FROM alpine:latest

RUN apk update
RUN apk add nginx openssl wget php7 php7-fpm php7-mysqli php7-opcache php7-gd php7-mysqli php7-zlib \
	php7-curl php7-phar php7-json php7-mbstring php7-session

RUN mkdir -p /run/nginx

RUN mkdir /www

WORKDIR /www
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz
RUN tar -xf phpMyAdmin-5.0.1-english.tar.gz && rm -rf phpMyAdmin-5.0.1-english.tar.gz
RUN mv phpMyAdmin-5.0.1-english phpmyadmin

RUN rm -f phpmyadmin/config.inc.php
COPY ./srcs/config.inc.php phpmyadmin/config.inc.php

COPY ./srcs/nginx.conf /etc/nginx/conf.d/nginx.conf
RUN rm -f /etc/nginx/conf.d/default.conf

RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Russia/L=Moscow/O=21/CN=bbrock" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt;

COPY ./srcs/setup.sh /tmp/
RUN chmod 755 /tmp/setup.sh
RUN chmod 755 /www/*

EXPOSE 5000

ENTRYPOINT  /tmp/setup.sh