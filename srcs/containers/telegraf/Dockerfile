FROM alpine:latest

RUN apk update \
&& apk add telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/testing/

COPY ./srcs/setup.sh /tmp

RUN chmod 755 /tmp/setup.sh

ENTRYPOINT /tmp/setup.sh