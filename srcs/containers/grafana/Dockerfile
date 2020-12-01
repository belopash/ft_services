FROM alpine:latest


RUN apk update \
&& apk add grafana  --repository http://dl-3.alpinelinux.org/alpine/edge/testing/

COPY ./srcs/telegrafdb.yaml /usr/share/grafana/conf/provisioning/datasources/default.yaml
COPY srcs/default.yaml /usr/share/grafana/conf/provisioning/dashboards/default.yaml
COPY srcs/dashboards/ /var/lib/grafana/dashboards/

COPY ./srcs/setup.sh /tmp

EXPOSE 3000

RUN chmod 755 /tmp/setup.sh


ENTRYPOINT /tmp/setup.sh