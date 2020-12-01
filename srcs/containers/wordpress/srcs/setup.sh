php-fpm7
nginx

sleep 4

while pgrep "nginx" >/dev/null && pgrep "php-fpm" >/dev/null ;
do
    sleep 1
done