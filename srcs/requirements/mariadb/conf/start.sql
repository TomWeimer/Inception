FLUSH PRIVILEGES;
CREATE DATABASE IF NOT EXISTS website;
CREATE USER IF NOT EXISTS 'moi'@'%' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON website.* TO 'moi'@'%';
FLUSH PRIVILEGES;
