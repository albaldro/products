FROM php:7.4.28-fpm-buster

ARG user
ARG uid

RUN apt-get update -y && apt-get install -y openssl zip unzip git gnupg libpng-dev libzip-dev libonig-dev libpq-dev libssl-dev
RUN docker-php-ext-install pdo 
RUN docker-php-ext-install mbstring 
RUN docker-php-ext-install gd 
RUN docker-php-ext-install zip
RUN docker-php-ext-install opcache
RUN docker-php-ext-enable opcache

#INSTALL MONGODB
#RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 68818C72E52529D4
#RUN echo "deb http://repo.mongodb.org/apt/ubuntu bionic/mongodb-org/4.0 multiverse" | tee /etc/apt/sources.list.d/mongodb-org-4.0.list
#RUN apt-get update
#RUN apt-get install -y mongodb-org --no-install-recommends
RUN pecl install --nocompress mongodb && docker-php-ext-enable mongodb
#RUN mkdir /data
#RUN mkdir /data/db

RUN apt-get install -y apt-transport-https ca-certificates


RUN apt-get install -y wget
RUN wget http://security.debian.org/debian-security/pool/updates/main/o/openssl/libssl1.0.0_1.0.1t-1+deb8u12_amd64.deb

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

#INSTALL COMPOSER - CONFIG APP
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www

USER $user
