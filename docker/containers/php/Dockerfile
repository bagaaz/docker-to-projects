FROM php:8.2-apache

# Define the user and group id
ARG USER_ID=1000
ARG GROUP_ID=1000

# Install necessary packages
RUN apt-get update && apt-get install -y \
    lsb-release \
    ca-certificates \
    apt-transport-https \
    software-properties-common \
    locales \
    curl \
    git \
    unzip \
    nano \
    lsof \
    zip \
    unzip \
    wget \
    gnupg2

# Copy the Apache configuration file
COPY ./docker/containers/php/default.conf /etc/apache2/sites-available/

RUN a2enmod vhost_alias && \
    a2ensite default && \
    service apache2 restart

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install Python
RUN apt-get install -y python3 python3-pip

# Copy the website files
COPY ./site /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Check if group exists and create if necessary
RUN getent group ${GROUP_ID} || groupadd -g ${GROUP_ID} devuser

# Check if user exists and create if necessary
RUN id -u ${USER_ID} || useradd -u ${USER_ID} -g ${GROUP_ID} -m devuser

# Set the working directory in the container
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80