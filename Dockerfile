FROM php:7.4-apache
COPY . /var/www/html/

# CMD [ "php", "./your-script.php" ]


RUN apt-get update \
    && apt-get install -y libmcrypt-dev default-libmysqlclient-dev \
    libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable imagick mysqli

# For Development Debug
RUN yes | pecl install xdebug-2.9.6   
# RUN apt-get install -y default-libmysqlclient-dev
# RUN docker-php-ext-install pdo pdo_mysql mysqli mysql
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
# RUN composer install
COPY php.ini /tmp/php.ini