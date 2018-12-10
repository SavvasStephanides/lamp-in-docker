FROM ubuntu
RUN apt update
RUN apt -y install apache2
RUN export DEBIAN_FRONTEND=noninteractive && apt -yq install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php
RUN rm /var/www/html/*
COPY index.php /var/www/html
CMD service apache2 start && tail -f /var/log/apache2/error.log