FROM php:7.4-fpm

# install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/bin/composer

# git is required to run composer install
RUN apt update -y && apt install git -y

# install zip extension
RUN apt install libzip-dev -y
RUN docker-php-ext-install zip

ARG UNAME=appuser
ARG UID=1000
ARG GID=1000
RUN groupadd -g $GID -o $UNAME
RUN useradd -m -u $UID -g $GID -o -s /bin/bash $UNAME
USER $UNAME

WORKDIR /app

RUN composer require phpunit/phpunit
COPY --chown=$UNAME:$GID  . /app
CMD ["/app/vendor/bin/phpunit", "tests"]
