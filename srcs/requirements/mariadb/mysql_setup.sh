#!/bin/sh

service mysql start

sleep 5

# Secure the ROOT user with password.
mysql_secure_installation << EOF
 
y
$DB_PASSWORD
$DB_PASSWORD
y
y
y
y
EOF

# Add password for the root and user
mysql -uroot -p$DB_PASSWORD << EOF

GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY '$DB_PASSWORD';
FLUSH PRIVILEGES;
EOF

# Create DB for WordPress and user
mysql -uroot -p$DB_PASSWORD << EOF

CREATE DATABASE IF NOT EXISTS wpress;
GRANT ALL ON wpress.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';
FLUSH PRIVILEGES;
EOF

service mysql stop
mysqld --bind-address=0.0.0.0
