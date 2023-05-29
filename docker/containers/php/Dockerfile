FROM php:fpm

ARG DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/html

RUN apt-get -y update --fix-missing && \
    apt-get upgrade -y && \
    apt-get --no-install-recommends install -y apt-utils

RUN apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev

RUN apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip \
    pcntl

RUN docker-php-ext-install gettext intl pdo_mysql gd

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN apt-get update && apt-get install -y wget git && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer --quiet && \
    php -r "unlink('composer-setup.php');"

RUN curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs -y

RUN find /var/www -type d -exec chmod 0755 {} \;
RUN find /var/www -type f -exec chmod 0644 {} \;
RUN chown -Rf www-data:www-data /var/www/html

ARG uid=1000
ARG uidbash nodesource_setup.sh
RUN useradd -G www-data,root -u $uid -d /home/devuser devuser
RUN mkdir -p /home/devuser/.composer && \
  chown -R devuser:devuser /home/devuser

USER devuser

CMD ["php-fpm"]

# EXPOSE 9000
