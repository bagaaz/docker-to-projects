# Use a base image nginx:alpine
FROM nginx:alpine

# Define the user and group id
ARG USER_ID=1000
ARG GROUP_ID=1000

# Update packages and add the new user and group
RUN apk update && \
    addgroup -g ${GROUP_ID} devuser && \
    adduser -D -u ${USER_ID} -G devuser devuser

# Copy the Nginx configuration file
COPY default.conf /etc/nginx/conf.d/

# Install bash
RUN apk add --no-cache bash

# Install necessary packages for Node.js and Python
RUN apk add --update --no-cache nodejs npm python3 py3-pip curl build-base python3-dev

# Update npm to its latest version
RUN npm install -g npm@latest

# Create a symbolic link for Python
RUN ln -sf /usr/bin/python3 /usr/bin/python

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the local src directory to the working directory in the container
COPY site/ .

# Expose port 80
EXPOSE 80
