FROM	debian:buster

# Install nginx.
RUN	    apt update -y
RUN 	apt install -y nginx

# Create the certificate and key for the ssl.
RUN 	apt-get -y install openssl
RUN	    openssl req -x509 -nodes -days 365 -subj "/C=DK/ST=Jylland/O=Compagny Name" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt

# Expose the port of nginx on 443.
EXPOSE	443

COPY	./nginx.conf	/etc/nginx/

CMD	["nginx", "-g", "daemon off;"]
