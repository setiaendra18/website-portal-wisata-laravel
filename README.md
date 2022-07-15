## CARA INSTALL APLIKASI DI LAPTOP/KOMPUTER
### DOMAIN WEBSITE :
```
https://jelajahkalbar.com/
```
### CLONE REPOSITORY
```
git clone https://github.com/setiaendra18/website-portal-wisata-laravel
```
### JALANKAM TERMINAL GIT DI FOLDER WEBSITE DANDUPLIKAT .ENV FILES
```
cp .env.enxample .env
```
### MODIFIKASI SETTING DI .ENV
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zada_portal_wisata (sesuaikan dengan komputer)
DB_USERNAME=root (sesuaikan dengan komputer)
DB_PASSWORD= (sesuaikan dengan komputer)
```
### PASTIKAN XAMPP/LARAGON SUDAH JALAN
### IMPORT DATABASE KE PHPMYADMIN DARI FOLDER SQL
### JALANKAN GENERATE KEY DI TERMINAL
```
php artisan key:generate
```
### JALANKAN COMPOSER DI TERMINAL
```
composer install
```
### JALANKAN PHPMYADMIN DI TERMINAL
```
php artisan serve
```
### AKSES ROUTING URL
```
http://127.0.0.1:8000/ (Halaman Utama)
http://127.0.0.1:8000/login (Halaman Admin)
```
### PASSWROD DEFAULT
```
email : admin@gmail.com
password : asdfasdf
```

### PASTIKAN LATOP/KOMPUTER TERINSTALL
```
PHP Minimal Versi 7.4
MYSQL 5.7
Git/Github
Composer
```
### REFRENSI BELAJAR
```
Cara Backup/Download file cpanel versi 1 : https://www.jetorbit.com/panduan/cara-download-file-di-cpanel/
Cara Backup/DOwnload file cpanel versi 2 : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/
Cara export database cpanel : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/
Belajar Bootstraps : https://getbootstrap.com/
Belajar laravel :https://laravel.com/docs/9.x/installation
HTML DAN PHP : https://www.w3schools.com/

```
