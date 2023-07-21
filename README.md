<!-- TOC -->
* [Setup](#setup)
    * [Installing packages from composer:](#installing-packages-from-composer)
    * [Running Opencart and XHGui:](#running-opencart-and-xhgui)
* [Available URLs](#available-urls)
<!-- TOC -->

# Setup

### Installing packages from composer:
```shell
docker compose run -w /opt/bitnami/composer opencart sh -c "composer install"
```

### Running Opencart and XHGui:
```shell
docker compose up -d
```

# Available URLs

| URL                   | Name     |
|-----------------------|----------|
| http://localhost:8080 | Opencart |
| http://localhost:8081 | XHGui    |
