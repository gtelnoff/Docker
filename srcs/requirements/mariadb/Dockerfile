FROM	debian:buster

# Install mariadb.
RUN     apt update -y
RUN     apt install -y mariadb-server

# Expose the port of Mariadb on 3306
EXPOSE 3306

# Copy the script bash at .
COPY	./mysql_setup.sh ./

# Set-up the mysql service and create DB
CMD ["./mysql_setup.sh"]