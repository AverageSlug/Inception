FROM debian:buster
RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install -y openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=BE/ST=Brussels/L=Brussels/O=gregchantemal/OU=gregchantemal19/commonName=nlaurids/emailAddress=nlaurids@student.s19.be" -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
COPY config /etc/nginx/sites-available/config
CMD ["nginx", "-g", "daemon off;"]