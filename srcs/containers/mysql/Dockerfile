FROM alpine:latest

# VOLUME /var/run/docker.sock:/var/run/docker.sock

# Installation
RUN apk update \
&& apk add mysql mysql-client bash

# Copy initialisation script
COPY ./srcs/setup.sh ./
COPY ./srcs/create_wp.sql ./
COPY ./srcs/wordpress.sql ./
COPY ./srcs/my.cnf ./etc/

# Add permission
RUN chmod 755 setup.sh

EXPOSE 3306

# Start configuration script
ENTRYPOINT ./setup.sh