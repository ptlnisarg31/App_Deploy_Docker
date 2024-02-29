# Base image
FROM php:apache  
#Choose your desired PHP version with Apache

# Install necessary extensions (replace mysqli with any other needed extensions)
RUN docker-php-ext-install mysqli

# Copy application code
COPY . /var/www/html

# Expose the port for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
