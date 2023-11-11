# Video corso PHP 8

## Installazione

Video: [https://youtu.be/ysIffnNJILA](https://youtu.be/ysIffnNJILA)

### Windows

Scaricare la Full Edition di Laragon dal sito

`https://laragon.org/download/`

### Mac OS

Scaricare la versione Free di MAMP dal sito

`https://www.mamp.info/en/downloads/`

### Debian Linux

Su Debian 11 utilizzare i seguenti comandi

Installare il server Apache 2 con il comando

`apt-get install apache2 apache2-doc apache2-utils libapache2-mod-fcgid libapache2-mod-passenger apache2-suexec-pristine libexpat1 ssl-cert imagemagick memcached mcrypt`

Abilitare i moduli aggiuntivi di Apache

`a2enmod suexec rewrite ssl actions include proxy proxy_http proxy_wstunnel`

Spostare il VirtualHost di default di Apache

`mv /var/www/html/ /var/www/default/`

Aggiornare la configurazione

`nano /etc/apache2/sites-available/000-default.conf`

```
<VirtualHost *:80>
    ServerAdmin your@mail.tdl
    DocumentRoot /var/www/default
    DirectoryIndex index.php index.html
    <Directory /var/www/default>
        Options +Indexes +FollowSymLinks +MultiViews
        AllowOverride All
        Order Deny,Allow
        Allow from all
    </Directory>
    ErrorLog /var/www/logs/default.error.log
    CustomLog /var/www/logs/default.access.log combined
</VirtualHost>
```

Creare la directory per i logs

`mkdir /var/www/logs`

Modificare i permessi e il gruppo della cartella /var/www

`chown -R www-data:www-data /var/www`

`chmod -R 755 /var/www`

Riavviare Apache con il comando

`systemctl restart apache2`

Installare l'interprete PHP 8 con il comando

`apt-get install libapache2-mod-php php8.1 php8.1-common php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-curl php8.1-gd php8.1-imagick php8.1-cli php8.1-dev php8.1-imap php8.1-mbstring php8.1-opcache php8.1-soap php8.1-zip php8.1-redis php8.1-intl php8.1-cgi php8.1-curl php8.1-sqlite3`

Modificare la configurazione di PHP

`nano /etc/php/8.1/apache2/php.ini`

Alcuni dei parametri che imposto io solitamente sono

```
[…]
max_execution_time = 360
max_input_time = 360
memory_limit = 2048M
error_reporting = E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT
display_errors = Off
post_max_size = 128M
default_charset = "UTF-8"
upload_max_filesize = 32M
max_file_uploads = 20
default_socket_timeout = 360
[…]
```

Abilitare il modulo PHP 8 su Apache

`sudo a2enmod php8.1`

Riavviare Apache con il comando

`systemctl restart apache2`
