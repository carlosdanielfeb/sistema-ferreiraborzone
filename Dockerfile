FROM php:8.2-apache

# Instala extensões e dependências necessárias
RUN apt-get update && apt-get install -y \
    zip unzip curl libxml2-dev libonig-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring

# Instala o Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia o arquivo de configuração do Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Ativa mod_rewrite (necessário para o Laravel)
RUN a2enmod rewrite

# Define o diretório de trabalho padrão
WORKDIR /var/www/html
