FROM php:7.4.16-fpm-buster

# RUN apt update && apt install -y procps
# RUN apt install -y emacs-nox
RUN apt update && apt install -y wget

ENV SIMPLESAMLPHP_VERSION 1.19.1
ENV SIMPLESAMLPHP_CHECKSUM 19e3860eff63f2367579b9ee5c2b7b609d7d17daacacd3e04823ddf599124747


RUN wget -q https://github.com/simplesamlphp/simplesamlphp/releases/download/v$SIMPLESAMLPHP_VERSION/simplesamlphp-$SIMPLESAMLPHP_VERSION.tar.gz && \
    echo "$SIMPLESAMLPHP_CHECKSUM  simplesamlphp-$SIMPLESAMLPHP_VERSION.tar.gz" | sha256sum -c - && \
    tar -C /var -xz -f simplesamlphp-$SIMPLESAMLPHP_VERSION.tar.gz && \
    mv /var/simplesamlphp-$SIMPLESAMLPHP_VERSION /var/simplesamlphp && \
    rm simplesamlphp-$SIMPLESAMLPHP_VERSION.tar.gz

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY www.conf /usr/local/etc/php-fpm.d/www.conf
