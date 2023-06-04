FROM	debian:buster

# Install ALLLLLLL things for WordPress and php-fpm.
RUN     apt update
RUN     apt-get install -y curl php php-mysql php-fpm

# Get the "wpress" folder.
COPY	./latest.tar.gz ./
RUN	    tar xfvz latest.tar.gz

RUN     mkdir -p /run/php/

# Expose the port of WordPress on 9000.
EXPOSE  9000

# Get the script for install of WordPress.  
COPY    ./install_wpress.sh ./

# Set the www.conf.
COPY    www.conf /etc/php/7.3/fpm/pool.d/

# Set the wp-config.php
COPY    ./wp-config.php ./

# Install and set-up WordPress.
CMD [ "./install_wpress.sh" ]