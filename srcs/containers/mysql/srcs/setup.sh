#!/bin/bash
sed -i "s|.*bind-address\s*=.*|bind-address=0.0.0.0|g" /etc/my.cnf.d/mariadb-server.cnf

sed -i "s|.*skip-networking.*|skip-networking|g" /etc/my.cnf.d/mariadb-server.cnf
/usr/bin/mysql_install_db --user=mysql --datadir="/var/lib/mysql"
/usr/bin/mysqld_safe --datadir="/var/lib/mysql" &

OUTPUT="Can't"
while [[ $OUTPUT == *"Can't"* ]]
do
    OUTPUT=$(mysql --user=root < create_wp.sql 2>&1)
    echo "waiting. . .\n"
    sleep 1
done
mysql --user=root < create_wp.sql
mysql wordpress --user=root < wordpress.sql

killall -KILL mysqld_safe mysqld
sleep 4

/usr/bin/mysqld_safe --datadir="/var/lib/mysql"