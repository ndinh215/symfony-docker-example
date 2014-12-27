FROM ubuntu:14.04

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y \
    git \
    wget \
    curl \
    php5-cli \
    php5-json \
    php5-mysql \
    php5-intl \
    php5-dev \
    php5-xdebug \
    python \
    build-essential \
    make

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN wget http://nodejs.org/dist/v0.10.35/node-v0.10.35.tar.gz && \
    tar xzf node-v0.10.35.tar.gz && \
    cd node-v0.10.35 && \
    make && \
    sudo make install

RUN sudo npm install -g phantomjs

RUN sudo apt-get install -y curl php5-curl libfreetype6-dev libfontconfig-dev


RUN echo 1

ADD behat /behat

ENTRYPOINT ["/behat"]
