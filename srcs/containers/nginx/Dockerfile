FROM alpine:latest

RUN apk update
RUN apk add nginx openssl openssh
RUN echo -e "123\n123" | adduser sshuser
RUN mkdir -p /run/nginx

RUN mkdir /www
COPY ./srcs/nginx.conf /etc/nginx/conf.d/nginx.conf
COPY ./srcs/index.html /www/index.html
# COPY ./srcs/sshd_config /etc/ssh/sshd_config
RUN rm -f /etc/nginx/conf.d/default.conf

RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Russia/L=Moscow/O=21/CN=bbrock" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt;
RUN ssh-keygen -A
COPY ./srcs/setup.sh /tmp/
RUN chmod 755 /tmp/setup.sh

EXPOSE 80 443 22

ENTRYPOINT /tmp/setup.sh