<p align="center"><a href="https://laravel.com/docs/9.x" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a><a href="https://infyom.com/open-source/laravelgenerator/docs/introduction" target="_blank"><img src="https://assets.infyom.com/open-source/infyom-logo.png" width="150"></a></p>

# Laravel + Infyom

Berikut ini bagamana melakukan install & configurasi antara laravel dengan infyom. Untuk memudahkan melakukan operasi query laravel maka gunakan editor code seperti [Visual Code Studio](https://code.visualstudio.com/) atau editor sejenisnya.

# 1. Install Laravel

Lakukan perintah ini untuk menginstall laravel.

### Version 8 Laravel
```
composer create-project laravel/laravel:^8.0 laravel-infyom
```
### Version new Laravel
```
composer create-project laravel/laravel laravel-infyom
```
## Menyiapkan Virtual Server

- Menginstall virtual server pada komputer dengan [XAMPP](https://www.apachefriends.org/download.html) atau [MAMP](https://www.mamp.info/en/downloads/).

- Kemudian membuat database + table pada phpmyadmin virtual server.

# 2. Install & Include Library Infyom

## Laravel 9
Tambahkan packages ini pada ``composer.json``.

```
 "require": {
     "infyomlabs/laravel-generator": "^4.0",
     "infyomlabs/adminlte-templates": "^4.0",
     "doctrine/dbal": "~2.3"
 } 
 ```
 ## Laravel 8
 Tambahkan packages ini pada ``composer.json``.

```
 "require": {
     "infyomlabs/laravel-generator": "^3.0",
     "laravelcollective/html": "^6.2",
     "infyomlabs/adminlte-templates": "^3.0"
     "doctrine/dbal": "~2.3"
 } 
 ```
 
 Jalankan perintah ini pada terminal (MAC) atau cmd (Windows). Terminal editor code jika anda menggunakan <b>Visual Code</b>.
 ```
 composer update
 ```
 
 
