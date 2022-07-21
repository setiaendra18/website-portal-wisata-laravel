# APLIKASI PORTAL WISATA LARAVEL FEBRUARI 2022

![Up to Date](https://github.com/ikatyang/emoji-cheat-sheet/workflows/Up%20to%20Date/badge.svg) 

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
### JALANKAN COMPOSER DI TERMINAL
```console
composer install
```
### JALANKAN GENERATE KEY DI TERMINAL
```console
php artisan key:generate
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
## TESTING PENGUJIAN DOWNLOAD FILE , DATABASE , EKSTRAK DAN INSTALL.

#### 1 DOWNLOAD & INSTALL : METODE KLON (GITHUB) 

Hasil Pengujian: https://youtu.be/IQfkLW0vS3M

#### Parameter :
1. Clone Download ✅ PASSED
2. Install ✅ PASSED
3. Import Database ✅ PASSED
4. Jalankan Aplikasi  ✅ PASSED

## <i>Durasi install hingga aplikasi di jalankan <b>6 menit 46 Detik</b></i>

#### 2 TEST IMPORT DATABASE DAN DOWNLOAD .ZIP

#### Hasil Pengujian : https://youtu.be/kLrbETu-5w0

#### Parameter:
1. Download .zip ✅ PASSED (30 Detik)
2. Ekstrak .zip ✅ PASSED (45 detik)
3. Import Database ✅ PASSED (Phpmyadmin) (15 detik)
4. Import database (HeidiSQL)  ✅ PASSED (7 detik)
5. Sql QUERY CHEK  ✅ PASSED (3 detik)

## <i>Durasi Pengujian <b>3 menit 43 detik</b> , di uji dengan menggunakan 3 alat/tool berbeda agar lebih objektif</i>

#### Environment Pengujian:
1. Koneksi : ISP INDOSAT
2. MySQL: Versi 5.7.33
3. PHP :  Versi 8.0.8
4. WinRAR Versi: 5.19
4. Git : 2.17.0 
### REFRENSI BELAJAR

<ol>
<li>Materi Semester 1 s.d 8 (utama) :crown: </li>
<li>https://www.google.com/ (kedua) :womans_hat:</li>
<li>https://laravel.com/</li>
<li>https://www.phpmyadmin.net/docs/</li>
<li>https://www.w3schools.com/sql/</li>
<li>https://netdocuments.force.com/NetDocumentsSupport/s/article/206683503</li>
<li>https://bootstrapmade.com/sailor-free-bootstrap-theme/</li>
<li>https://id.m.wikipedia.org/wiki/Perangkat_lunak_sumber_terbuka</li>
<li>https://laragon.org/download/index.html</li>
<li>https://www.apachefriends.org/download.html</li>
<li>Cara Backup/Download file cpanel versi 1 : https://www.jetorbit.com/panduan/cara-download-file-di-cpanel/</li>
<li>Cara Backup/DOwnload file cpanel versi 2 : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/</li>
<li>Cara export database cpanel : https://www.rumahweb.com/journal/cara-export-database-di-phpmyadmin/</li>
<li>Belajar Bootstraps : https://getbootstrap.com/</li>
<li>Belajar laravel :https://laravel.com/docs/9.x/installation</li>
<li>Belajar SQL : https://www.w3schools.com/sql/</li>
<li>Belajar MVC : https://www.duniailkom.com/tutorial-belajar-laravel-pengertian-mvc-model-view-controller/</li>
<li>HTML DAN PHP : https://www.w3schools.com/</li>
<li>Backup : https://drive.google.com/drive/folders/1s2V7o4PuZypxvxxNcynuj2bu6lJt7swx?usp=sharing</li>
</ol>

### LOG AKTIVITAS USER 21 Juli 2022  | DI TEMUKAN ERROR CODE ? ❌ (tidak) Lama akses 05:28 s.d 15:38

```console
114.5.102.48 - - [21/Jul/2022:05:28:41 +0700] "GET /login HTTP/1.1" 200 5092 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:28:53 +0700] "POST /login HTTP/1.1" 302 426 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:28:53 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:29:35 +0700] "GET /adm/detail-wisata/1 HTTP/1.1" 200 11598 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:30:36 +0700] "GET /adm/detail-wisata/12 HTTP/1.1" 200 11634 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:31:43 +0700] "GET /adm/detail-wisata/19 HTTP/1.1" 200 11462 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:13 +0700] "GET /adm/edit-wisata/19 HTTP/1.1" 200 14936 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:20 +0700] "POST /adm/wisata-update/19 HTTP/1.1" 200 428 "http://jelajahkalbar.com/adm/edit-wisata/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:20 +0700] "GET /favicon.ico HTTP/1.1" 200 - "http://jelajahkalbar.com/adm/wisata-update/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:20 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26491 "http://jelajahkalbar.com/adm/wisata-update/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:32 +0700] "GET /adm/manajemen-kategori-wisata HTTP/1.1" 200 9234 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:36 +0700] "GET /adm/manajemen-event HTTP/1.1" 200 9790 "http://jelajahkalbar.com/adm/manajemen-kategori-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:32:50 +0700] "GET /adm/manajemen-fasilitas-wisata HTTP/1.1" 200 9802 "http://jelajahkalbar.com/adm/manajemen-event" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:33:11 +0700] "GET / HTTP/1.1" 200 8657 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:33:12 +0700] "GET /assets/vendor/bootstrap/js/bootstrap.bundle.min.js HTTP/1.1" 200 78748 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:33:12 +0700] "GET /assets/vendor/animate.css/animate.min.css HTTP/1.1" 200 71750 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:34:27 +0700] "GET /kategori/5 HTTP/1.1" 200 8304 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:34:27 +0700] "GET /kategori/assets/img/favicon.png HTTP/1.1" 404 6609 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:34:36 +0700] "GET /wisata-detail/12 HTTP/1.1" 200 7754 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:34:36 +0700] "GET /wisata-detail/assets/img/favicon.png HTTP/1.1" 404 6609 "http://jelajahkalbar.com/wisata-detail/12" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:34:46 +0700] "GET /kategori/6 HTTP/1.1" 200 8363 "http://jelajahkalbar.com/wisata-detail/12" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:34:53 +0700] "GET /wisata-detail/4 HTTP/1.1" 200 7795 "http://jelajahkalbar.com/kategori/6" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:35:08 +0700] "GET /kategori/19 HTTP/1.1" 200 8341 "http://jelajahkalbar.com/wisata-detail/4" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:35:14 +0700] "GET /wisata-detail/19 HTTP/1.1" 200 7595 "http://jelajahkalbar.com/kategori/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:35:23 +0700] "GET /event HTTP/1.1" 200 16606 "http://jelajahkalbar.com/wisata-detail/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:38:28 +0700] "GET /kategori/6 HTTP/1.1" 200 8363 "http://jelajahkalbar.com/event" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:38:54 +0700] "GET /kategori/19 HTTP/1.1" 200 8341 "http://jelajahkalbar.com/kategori/6" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:40:00 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/adm/manajemen-fasilitas-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:40:02 +0700] "GET /adm/add-wisata HTTP/1.1" 200 14706 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:19 +0700] "POST /adm/wisata-store HTTP/1.1" 302 426 "http://jelajahkalbar.com/adm/add-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:20 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 28132 "http://jelajahkalbar.com/adm/add-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:24 +0700] "GET /adm/foto-upload/29 HTTP/1.1" 200 8519 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:40 +0700] "POST /adm/foto-save/29 HTTP/1.1" 302 426 "http://jelajahkalbar.com/adm/foto-upload/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:41 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 28462 "http://jelajahkalbar.com/adm/foto-upload/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:41 +0700] "GET /img/galeri/meseum.jfif HTTP/1.1" 200 51361 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:46 +0700] "GET /adm/foto-edit/29 HTTP/1.1" 200 8987 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:47 +0700] "GET /img/galeri/meseum.jfif HTTP/1.1" 304 - "http://jelajahkalbar.com/adm/foto-edit/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:51 +0700] "POST /adm/foto-update/29 HTTP/1.1" 302 426 "http://jelajahkalbar.com/adm/foto-edit/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:52 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 28468 "http://jelajahkalbar.com/adm/foto-edit/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:53 +0700] "GET /img/galeri/rumah%20radank.jfif HTTP/1.1" 200 56771 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:57 +0700] "GET /adm/foto-hapus/24 HTTP/1.1" 302 426 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:51:58 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 28126 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:52:01 +0700] "GET /adm/detail-wisata/29 HTTP/1.1" 200 11528 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:52:06 +0700] "GET /adm/edit-wisata/29 HTTP/1.1" 200 15023 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:52:14 +0700] "POST /adm/wisata-update/29 HTTP/1.1" 200 428 "http://jelajahkalbar.com/adm/edit-wisata/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:52:15 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 28115 "http://jelajahkalbar.com/adm/wisata-update/29" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:52:18 +0700] "GET /adm/delete-wisata/29 HTTP/1.1" 302 426 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:05:52:19 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26485 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:30 +0700] "GET /login HTTP/1.1" 200 5092 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:31 +0700] "GET /backend/assets/vendor/nucleo/css/nucleo.css HTTP/1.1" 200 9015 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:31 +0700] "GET /backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css HTTP/1.1" 200 57180 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:31 +0700] "GET /backend/assets/img/brand/brand.png HTTP/1.1" 200 15909 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:31 +0700] "GET /backend/assets/css/argon.css?v=1.2.0 HTTP/1.1" 200 490493 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:31 +0700] "GET /backend/assets/vendor/jquery/dist/jquery.min.js HTTP/1.1" 200 88145 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:44 +0700] "POST /login HTTP/1.1" 302 426 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:44 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /img/galeri/Daya-Tarik-Waterfront-City.jpg HTTP/1.1" 200 95428 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /backend/assets/vendor/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff2 HTTP/1.1" 200 76084 "http://jelajahkalbar.com/backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js HTTP/1.1" 200 80698 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /img/galeri/IMG_20220626_143138.jpg HTTP/1.1" 200 263189 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:46 +0700] "GET /img/galeri/IMG_20220626_144859.jpg HTTP/1.1" 200 225592 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /img/galeri/IMG_20220626_150617.jpg HTTP/1.1" 200 292852 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /img/galeri/IMG_20220626_143713.jpg HTTP/1.1" 200 377041 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /backend/assets/vendor/js-cookie/js.cookie.js HTTP/1.1" 200 3886 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js HTTP/1.1" 200 13041 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js HTTP/1.1" 200 4636 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /backend/assets/vendor/chart.js/dist/Chart.extension.js HTTP/1.1" 200 3552 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /backend/assets/js/argon.js?v=1.2.0 HTTP/1.1" 200 21706 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /img/galeri/IMG_20220626_143915.jpg HTTP/1.1" 200 175540 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /backend/assets/vendor/chart.js/dist/Chart.min.js HTTP/1.1" 200 172812 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:47 +0700] "GET /img/galeri/IMG_20220626_144338.jpg HTTP/1.1" 200 239483 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:45 +0700] "GET /img/galeri/IMG_20220626_150335.jpg HTTP/1.1" 200 614350 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:54:46 +0700] "GET /img/galeri/IMG_20220626_145028.jpg HTTP/1.1" 200 669863 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:55:41 +0700] "GET /adm/detail-wisata/1 HTTP/1.1" 200 11598 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:56:25 +0700] "GET /adm/detail-wisata/12 HTTP/1.1" 200 11634 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:57:10 +0700] "GET /adm/detail-wisata/19 HTTP/1.1" 200 11450 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:57:43 +0700] "GET /adm/manajemen-kategori-wisata HTTP/1.1" 200 9234 "http://jelajahkalbar.com/adm/detail-wisata/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:57:51 +0700] "GET /adm/manajemen-event HTTP/1.1" 200 9790 "http://jelajahkalbar.com/adm/manajemen-kategori-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:06 +0700] "GET /adm/manajemen-fasilitas-wisata HTTP/1.1" 200 9802 "http://jelajahkalbar.com/adm/manajemen-event" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:23 +0700] "GET / HTTP/1.1" 200 8657 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/animate.css/animate.min.css HTTP/1.1" 200 71750 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/glightbox/css/glightbox.min.css HTTP/1.1" 200 13746 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/bootstrap-icons/bootstrap-icons.css HTTP/1.1" 200 65696 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/boxicons/css/boxicons.min.css HTTP/1.1" 200 63235 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/remixicon/remixicon.css HTTP/1.1" 200 110438 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/swiper/swiper-bundle.min.css HTTP/1.1" 200 13871 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/css/style.css HTTP/1.1" 200 36885 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/bootstrap/js/bootstrap.bundle.min.js HTTP/1.1" 200 78748 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/glightbox/js/glightbox.min.js HTTP/1.1" 200 55976 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/isotope-layout/isotope.pkgd.min.js HTTP/1.1" 200 35445 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:24 +0700] "GET /assets/vendor/bootstrap/css/bootstrap.min.css HTTP/1.1" 200 155631 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/vendor/php-email-form/validate.js HTTP/1.1" 200 2731 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/vendor/waypoints/noframework.waypoints.js HTTP/1.1" 200 21112 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/js/main.js HTTP/1.1" 200 4668 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/img/blog/bg.jpg HTTP/1.1" 200 47694 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/vendor/swiper/swiper-bundle.min.js HTTP/1.1" 200 145446 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/vendor/remixicon/remixicon.woff2?t=1590207869815 HTTP/1.1" 200 125268 "http://jelajahkalbar.com/assets/vendor/remixicon/remixicon.css" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:58:25 +0700] "GET /assets/vendor/bootstrap-icons/fonts/bootstrap-icons.woff2?856008caa5eb66df68595e734e59580d HTTP/1.1" 200 90528 "http://jelajahkalbar.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:59:48 +0700] "GET /kategori/5 HTTP/1.1" 200 8304 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:59:48 +0700] "GET /kategori/assets/img/favicon.png HTTP/1.1" 404 6609 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:59:58 +0700] "GET /wisata-detail/12 HTTP/1.1" 200 7754 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:10:59:59 +0700] "GET /wisata-detail/assets/img/favicon.png HTTP/1.1" 404 6609 "http://jelajahkalbar.com/wisata-detail/12" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:00:11 +0700] "GET /kategori/6 HTTP/1.1" 200 8363 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:00:18 +0700] "GET /wisata-detail/4 HTTP/1.1" 200 7795 "http://jelajahkalbar.com/kategori/6" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:00:25 +0700] "GET /kategori/19 HTTP/1.1" 200 8341 "http://jelajahkalbar.com/kategori/6" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:00:33 +0700] "GET /wisata-detail/19 HTTP/1.1" 200 7595 "http://jelajahkalbar.com/kategori/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:00:43 +0700] "GET /event HTTP/1.1" 200 16606 "http://jelajahkalbar.com/wisata-detail/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:11:43 +0700] "GET /kategori/5 HTTP/1.1" 200 8304 "http://jelajahkalbar.com/event" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:12:27 +0700] "GET /kategori/6 HTTP/1.1" 200 8363 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:11:13:02 +0700] "GET /kategori/19 HTTP/1.1" 200 8341 "http://jelajahkalbar.com/kategori/6" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:12:53:43 +0700] "GET /login HTTP/1.1" 302 426 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:12:53:43 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:12:53:49 +0700] "GET /logout HTTP/1.1" 302 342 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:12:53:49 +0700] "GET / HTTP/1.1" 200 8657 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:12:54:01 +0700] "GET /login HTTP/1.1" 200 5092 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:13:03:51 +0700] "GET / HTTP/1.1" 200 8657 "http://jelajahkalbar.com/kategori/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:14:07:11 +0700] "GET /login HTTP/1.1" 200 5092 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:14:07:16 +0700] "GET /backend/assets/img/brand/favicon.png HTTP/1.1" 200 4976 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:14:31:21 +0700] "POST /login HTTP/1.1" 302 426 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:14:31:21 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/login" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:00 +0700] "GET /login HTTP/1.1" 302 426 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:01 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:02 +0700] "GET /backend/assets/vendor/nucleo/css/nucleo.css HTTP/1.1" 200 9015 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:02 +0700] "GET /backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css HTTP/1.1" 200 57180 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:03 +0700] "GET /backend/assets/vendor/jquery/dist/jquery.min.js HTTP/1.1" 200 88145 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:03 +0700] "GET /backend/assets/vendor/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff2 HTTP/1.1" 200 76084 "http://jelajahkalbar.com/backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:03 +0700] "GET /img/galeri/IMG_20220626_144859.jpg HTTP/1.1" 200 225592 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:03 +0700] "GET /img/galeri/IMG_20220626_143138.jpg HTTP/1.1" 200 263189 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:06 +0700] "GET /backend/assets/img/brand/brand.png HTTP/1.1" 200 15909 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:04 +0700] "GET /img/galeri/IMG_20220626_150617.jpg HTTP/1.1" 200 292852 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:02 +0700] "GET /backend/assets/css/argon.css?v=1.2.0 HTTP/1.1" 200 490493 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:05 +0700] "GET /img/galeri/IMG_20220626_144338.jpg HTTP/1.1" 200 239483 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:04 +0700] "GET /img/galeri/IMG_20220626_150335.jpg HTTP/1.1" 200 614350 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:08 +0700] "GET /img/galeri/Daya-Tarik-Waterfront-City.jpg HTTP/1.1" 200 95428 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:07 +0700] "GET /img/galeri/IMG_20220626_143915.jpg HTTP/1.1" 200 175540 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:08 +0700] "GET /backend/assets/vendor/js-cookie/js.cookie.js HTTP/1.1" 200 3886 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:08 +0700] "GET /backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js HTTP/1.1" 200 80698 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:08 +0700] "GET /backend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js HTTP/1.1" 200 13041 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:09 +0700] "GET /backend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js HTTP/1.1" 200 4636 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:09 +0700] "GET /backend/assets/vendor/chart.js/dist/Chart.extension.js HTTP/1.1" 200 3552 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:09 +0700] "GET /backend/assets/js/argon.js?v=1.2.0 HTTP/1.1" 200 21706 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:06 +0700] "GET /img/galeri/IMG_20220626_143713.jpg HTTP/1.1" 200 377041 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:09 +0700] "GET /backend/assets/vendor/chart.js/dist/Chart.min.js HTTP/1.1" 200 172812 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:26:06 +0700] "GET /img/galeri/IMG_20220626_145028.jpg HTTP/1.1" 200 669863 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:27:02 +0700] "GET /adm/detail-wisata/1 HTTP/1.1" 200 11598 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:27:58 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/adm/detail-wisata/1" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:28:05 +0700] "GET /adm/detail-wisata/12 HTTP/1.1" 200 11634 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:28:52 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/adm/detail-wisata/12" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:28:57 +0700] "GET /adm/detail-wisata/19 HTTP/1.1" 200 11450 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:29:29 +0700] "GET /adm/manajemen-kategori-wisata HTTP/1.1" 200 9234 "http://jelajahkalbar.com/adm/detail-wisata/19" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:29:38 +0700] "GET /adm/manajemen-event HTTP/1.1" 200 9790 "http://jelajahkalbar.com/adm/manajemen-kategori-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:29:54 +0700] "GET /adm/manajemen-fasilitas-wisata HTTP/1.1" 200 9802 "http://jelajahkalbar.com/adm/manajemen-event" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:12 +0700] "GET / HTTP/1.1" 200 8657 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/glightbox/css/glightbox.min.css HTTP/1.1" 200 13746 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/swiper/swiper-bundle.min.css HTTP/1.1" 200 13871 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/boxicons/css/boxicons.min.css HTTP/1.1" 200 63235 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/bootstrap-icons/bootstrap-icons.css HTTP/1.1" 200 65696 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/animate.css/animate.min.css HTTP/1.1" 200 71750 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/css/style.css HTTP/1.1" 200 36885 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/glightbox/js/glightbox.min.js HTTP/1.1" 200 55976 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/remixicon/remixicon.css HTTP/1.1" 200 110438 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:14 +0700] "GET /assets/vendor/isotope-layout/isotope.pkgd.min.js HTTP/1.1" 200 35445 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/bootstrap/js/bootstrap.bundle.min.js HTTP/1.1" 200 78748 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:14 +0700] "GET /assets/vendor/php-email-form/validate.js HTTP/1.1" 200 2731 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:13 +0700] "GET /assets/vendor/bootstrap/css/bootstrap.min.css HTTP/1.1" 200 155631 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:14 +0700] "GET /assets/vendor/waypoints/noframework.waypoints.js HTTP/1.1" 200 21112 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:15 +0700] "GET /assets/js/main.js HTTP/1.1" 200 4668 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:15 +0700] "GET /assets/img/blog/bg.jpg HTTP/1.1" 200 47694 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:14 +0700] "GET /assets/vendor/swiper/swiper-bundle.min.js HTTP/1.1" 200 145446 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:15 +0700] "GET /assets/vendor/bootstrap-icons/fonts/bootstrap-icons.woff2?856008caa5eb66df68595e734e59580d HTTP/1.1" 200 90528 "http://jelajahkalbar.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:30:15 +0700] "GET /assets/vendor/remixicon/remixicon.woff2?t=1590207869815 HTTP/1.1" 200 125268 "http://jelajahkalbar.com/assets/vendor/remixicon/remixicon.css" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:31:44 +0700] "GET /kategori/5 HTTP/1.1" 200 8304 "http://jelajahkalbar.com/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:31:45 +0700] "GET /kategori/assets/img/favicon.png HTTP/1.1" 404 6609 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:34:01 +0700] "GET /kategori/6 HTTP/1.1" 200 8363 "http://jelajahkalbar.com/kategori/5" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:34:17 +0700] "GET /adm/manajemen-wisata HTTP/1.1" 200 26125 "http://jelajahkalbar.com/adm/manajemen-fasilitas-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"
114.5.102.48 - - [21/Jul/2022:15:34:23 +0700] "GET /adm/add-wisata HTTP/1.1" 200 14706 "http://jelajahkalbar.com/adm/manajemen-wisata" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36"

```

<br>
<blockquote><h1>Jendela Dunia dan Membaca Adalah Kuncinya.</1></blockquote>
