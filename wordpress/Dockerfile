FROM wordpress

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt update \
    && apt install git zip libpq-dev -y \
    && rm -rf /var/lib/apt/lists/*

RUN pecl install xhprof

RUN docker-php-ext-enable xhprof
