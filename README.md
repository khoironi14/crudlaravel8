Cara Installasi Website

Lakukan git clone
buat database dengan nama bebas
Rename .env.example menjadi .env lalu lakukan konfigurasi dengan mengubah nama db_databse sesuai yang dibuat dan pastikan db_username dan db_password sesuai
Lakukan php artisan migrate untuk membuild table ke dalam database
jalankan projectnya dengan perintah php artisan serve
jalankan php artisan command:registrasi untuk mendaftarkan email dan password ke tabel user
