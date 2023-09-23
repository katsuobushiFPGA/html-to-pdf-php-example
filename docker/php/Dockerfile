# https://hub.docker.com/_/php
FROM php:8.2-fpm-alpine

# install composer
COPY --from=composer:2.6.3 /usr/bin/composer /usr/bin/composer

# install node
RUN apk update && apk add nodejs npm

RUN apk add --no-cache \
      chromium \
      nss \
      freetype \
      harfbuzz \
      ca-certificates \
      ttf-freefont \
      nodejs \
      yarn

ENV PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true \
    PUPPETEER_EXECUTABLE_PATH=/usr/bin/chromium

# install fonts
RUN wget -P /tmp https://moji.or.jp/wp-content/ipafont/IPAexfont/IPAexfont00301.zip \
&& unzip /tmp/IPAexfont00301.zip -d /tmp \
&& mv /tmp/IPAexfont00301 /usr/share/fonts \
&& fc-cache -fv

WORKDIR /var/www/html