FROM ubuntu:16.04
MAINTAINER Nhat Nguyen


ENV DEBIAN_FRONTEND noninteractive
ENV LANG en_US.UTF-8
ENV APP_MAGE_MODE production
## Install php nginx mysql supervisor
RUN apt-get update && apt-get install language-pack-en python-software-properties  software-properties-common -y && \
                        add-apt-repository ppa:ondrej/php && apt update && \
                        apt install -y  php7.0-fpm php7.0-mysql php7.0-gd php7.0-intl php7.0-xsl php7.0-mcrypt php7.0-mysql php7.0-curl \
                        php7.0-xml php7.0-mbstring php7.0-zip php7.0-sybase php7.0-bcmath\
                        php7.0-soap php7.0-dom php7.0-iconv php7.0-mcrypt php7.0-simplexml php7.0-ctype \
                        nginx \
                        curl \
                        git \
                        zip \
			vim \
                        supervisor && \
                        rm -rf /var/lib/apt/lists/*

## Configuration
RUN sed -i 's/^listen\s*=.*$/listen = 127.0.0.1:9000/'\
            /etc/php/7.0/fpm/pool.d/www.conf && \
    sed -i 's/^\;error_log\s*=\s*syslog\s*$/error_log = \/var\/log\/php\/cgi.log/'\
            /etc/php/7.0/fpm/php.ini && \
    sed -i 's/^\;error_log\s*=\s*syslog\s*$/error_log = \/var\/log\/php\/cli.log/'\
            /etc/php/7.0/cli/php.ini

COPY files/root /
RUN mkdir /envir
COPY /etc /envir
COPY files/nginx_conf/* /etc/nginx/conf.d/
COPY private /root/.ssh/private
COPY known_hosts /root/.ssh/known_hosts
RUN chmod 400 /root/.ssh/private

# Install composer
ADD https://getcomposer.org/composer.phar /usr/bin/composer
RUN chmod +x /usr/bin/composer

WORKDIR /var/www/

VOLUME /var/www/

EXPOSE 8080 443

ENTRYPOINT ["/entrypoint.sh"]
