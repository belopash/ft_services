/usr/sbin/sshd
nginx

sleep 4

while pgrep "nginx" >/dev/null && pgrep "sshd" >/dev/null ;
do
    sleep 1
done