## CARA INSTALL APLIKASI DI LAPTOP/KOMPUTER
### DOMAIN WEBSITE :
```
https://jelajahkalbar.com/
```
### CLONE REPOSITORY
```
git clone https://github.com/setiaendra18/website-portal-wisata-laravel
```
### JALANKAN TERMINAL GIT DI FOLDER WEBSITE DAN DUPLIKAT .ENV FILES
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
### AKUN PASSWROD DEFAULT
```
email : admin@gmail.com
password : asdfasdf
```
### PASTIKAN LATOP/KOMPUTER TERINSTALL (TIDAK SESUAI SPESIFIKASI BISA MENYEBABKAN ERROR)
```
PHP Minimal Versi 7.4
MYSQL Minimal Versi 5.7
Git/Github 
Composer
Visual Studio Codes (rekomendasi)
```
### REFRENSI BELAJAR
```
Cara Backup/Download file cpanel versi 1 : https://www.jetorbit.com/panduan/cara-download-file-di-cpanel/
Cara Backup/DOwnload file cpanel versi 2 : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/
Cara export database cpanel : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/
Belajar Bootstraps : https://getbootstrap.com/
Belajar laravel :https://laravel.com/docs/9.x/installation
Belajar SQL : https://www.w3schools.com/sql/
Belajar MVC : https://www.duniailkom.com/tutorial-belajar-laravel-pengertian-mvc-model-view-controller/
HTML DAN PHP : https://www.w3schools.com/

```
