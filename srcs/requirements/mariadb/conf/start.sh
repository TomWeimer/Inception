#!/bin/bash
mysql_install_db;
mkdir /run/mysqld;
chmod 777 /run/mysqld;
/usr/bin/mysqld --user=mysql --bootstrap << EOF
FLUSH PRIVILEGES;
CREATE DATABASE IF NOT EXISTS $DATABASE_NAME;
CREATE USER IF NOT EXISTS 'tweimer'@'%' IDENTIFIED BY 'root4life';
GRANT ALL PRIVILEGES ON $DATABASE_NAME.* TO 'tweimer'@'%';
ALTER USER 'root'@'%' IDENTIFIED BY '42school';
FLUSH PRIVILEGES;
EOF
/usr/bin/mysqld;