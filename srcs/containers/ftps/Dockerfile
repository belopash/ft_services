FROM alpine:latest

RUN apk update \
&& apk add vsftpd openssl

RUN rm -rf /etc/vsftpd/vsftpd.conf
COPY ./srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN mkdir /ftp && mkdir /ftp/ftpuser
RUN echo -e "123\n123" | adduser -h /ftp/ftpuser ftpuser
RUN chown ftpuser:ftpuser /ftp/ftpuser
RUN touch /ftp/ftpuser/test.txt && echo "hello" > /ftp/ftpuser/test.txt
RUN echo "ftpuser" > /etc/vsftpd.userlist

RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Russia/L=Moscow/O=21/CN=bbrock" -newkey rsa:2048 -keyout /etc/ssl/ftps-selfsigned.key -out /etc/ssl/ftps-selfsigned.crt;

COPY ./srcs/setup.sh /tmp/
RUN chmod 755 /tmp/setup.sh

EXPOSE 21 10021

ENTRYPOINT /tmp/setup.sh