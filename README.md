## CARA INSTALL APLIKASI DI LAPTOP/KOMPUTER
### Clone Repository
```
git clone https://github.com/setiaendra18/website-portal-wisata-laravel
```
### Rubah Config .ENV
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zada_portal_wisata (sesuaikan dengan komputer)
DB_USERNAME=root (sesuaikan dengan komputer)
DB_PASSWORD= (sesuaikan dengan komputer)
```
### IMPORT DATABASE KE PHPMYADMIN FOLDER SQL
### PASTIKAN XAMPP/LARAGON SUDAH JALAN
### JALANKAN GENERATE KEY 
```
php artisan key:generate
```
### JALANKAN COMPOSER
```
composer install
```
### Jalankan PHP Artisan di terimal
```
php artisan serve
```
### Akses URL
```
http://127.0.0.1:8000/ (Halaman Utama)
http://127.0.0.1:8000/login (Halaman Admin)
```
### PASSWROD DEFAULT
```
email : admin@gmail.com
password : asdfasdf
```
###PASTIKAN LATOP/KOMPUTER TERINSTALL
```
PHP Minimal Versi 7.4
MYSQL 5.7
Git/Github
Composer
```
