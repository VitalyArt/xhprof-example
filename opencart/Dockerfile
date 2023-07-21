FROM bitnami/opencart as xhprof-builder

USER root

RUN apt update \
    && apt install git zip libpq-dev autoconf build-essential -y \
    && rm -rf /var/lib/apt/lists/*

RUN pecl install xhprof

FROM bitnami/opencart

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --from=xhprof-builder /opt/bitnami/php/lib/php/extensions/xhprof.so /opt/bitnami/php/lib/php/extensions/xhprof.so

RUN echo 'extension=xhprof.so' >> /opt/bitnami/php/etc/php.ini
