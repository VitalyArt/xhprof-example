<!-- TOC -->
* [Setup](#setup)
    * [Installing packages from composer:](#installing-packages-from-composer)
    * [Running Wordpress and XHGui:](#running-wordpress-and-xhgui)
* [Available URLs](#available-urls)
<!-- TOC -->

# Setup

### Installing packages from composer:
```shell
docker compose run -w /var/www/composer wordpress sh -c "composer install"
```

### Running Wordpress and XHGui:
```shell
docker compose up -d
```

# Available URLs

| URL                   | Name      |
|-----------------------|-----------|
| http://localhost:8080 | Wordpress |
| http://localhost:8081 | XHGui     |
