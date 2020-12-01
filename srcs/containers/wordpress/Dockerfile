FROM alpine:latest

RUN apk update
RUN apk add nginx openssl wget php7 php7-fpm php7-mysqli php7-opcache php7-gd php7-mysqli php7-zlib \
	php7-curl php7-phar php7-json php7-mbstring php7-session

RUN mkdir -p /run/nginx

RUN mkdir /www

WORKDIR /www
RUN wget http://wordpress.org/latest.tar.gz \
    && tar -xzvf latest.tar.gz \
    && rm latest.tar.gz

COPY ./srcs/nginx.conf /etc/nginx/conf.d/nginx.conf
RUN rm -f /etc/nginx/conf.d/default.conf

RUN rm -f wordpress/wp-config.php
COPY ./srcs/wp-config.php wordpress/wp-config.php

RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Russia/L=Moscow/O=21/CN=bbrock" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt;

COPY ./srcs/setup.sh /tmp/
RUN chmod 755 /tmp/setup.sh
RUN chmod 755 /www/

EXPOSE 5050

ENTRYPOINT  /tmp/setup.sh