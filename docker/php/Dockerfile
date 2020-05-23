FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/


RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y git 
RUN apt-get install -y wget
RUN apt-get install -y curl 
RUN apt-get install sudo -y
RUN curl https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN apt-get install -y zlib1g-dev mariadb-client \
  && docker-php-ext-install zip pdo_mysql


RUN apt install -y nodejs npm


ARG DOCKER_UID=1000
ARG DOCKER_USER=docker
ARG DOCKER_PASSWORD=docker
RUN useradd -m --uid ${DOCKER_UID} --groups sudo ${DOCKER_USER} \
  && echo ${DOCKER_USER}:${DOCKER_PASSWORD} | chpasswd
USER ${DOCKER_USER}


WORKDIR /var/www
