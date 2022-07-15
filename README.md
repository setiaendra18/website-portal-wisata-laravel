
<hr>

## CARA INSTALL APLIKASI DI LAPTOP/KOMPUTER
### DOMAIN WEBSITE :
```console
https://jelajahkalbar.com/
```
### CLONE REPOSITORY
```console
git clone https://github.com/setiaendra18/website-portal-wisata-laravel
```
### JALANKAN TERMINAL GIT DI FOLDER WEBSITE DAN DUPLIKAT .ENV FILES
```console
cp .env.example .env
```
### MODIFIKASI SETTING DI .ENV
```javascript
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
```console
php artisan key:generate
```
### JALANKAN COMPOSER DI TERMINAL
```console
composer install
```
### JALANKAN PHPMYADMIN DI TERMINAL
```console
php artisan serve
```
### AKSES ROUTING URL
```console
http://127.0.0.1:8000/ (Halaman Utama)
http://127.0.0.1:8000/login (Halaman Admin)
```
### AKUN PASSWROD DEFAULT
```console
email : admin@gmail.com
password : asdfasdf
```
### PASTIKAN LATOP/KOMPUTER TERINSTALL (TIDAK SESUAI SPESIFIKASI BISA MENYEBABKAN ERROR)
```console
PHP Minimal Versi 7.4
MYSQL Minimal Versi 5.7
Git/Github 
Composer
Visual Studio Codes (rekomendasi)
```
### REFRENSI BELAJAR
```console
Cara Backup/Download file cpanel versi 1 : https://www.jetorbit.com/panduan/cara-download-file-di-cpanel/
Cara Backup/DOwnload file cpanel versi 2 : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/
Cara export database cpanel : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/
Belajar Bootstraps : https://getbootstrap.com/
Belajar laravel :https://laravel.com/docs/9.x/installation
Belajar SQL : https://www.w3schools.com/sql/
Belajar MVC : https://www.duniailkom.com/tutorial-belajar-laravel-pengertian-mvc-model-view-controller/
HTML DAN PHP : https://www.w3schools.com/
Backup : https://drive.google.com/drive/folders/1s2V7o4PuZypxvxxNcynuj2bu6lJt7swx?usp=sharing

```

<br>
<br>
<blockquote><h1>Jendela Dunia dan Membaca Adalah Kuncinya.</1></blockquote>
