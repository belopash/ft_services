FROM alpine:latest


RUN apk update \
&& apk add influxdb

COPY ./srcs/influxdb.conf /etc/influxdb.conf

EXPOSE 8086

ENTRYPOINT influxd