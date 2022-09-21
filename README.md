Cara Installasi Website

1. Lakukan git clone
2. buat database dengan nama bebas
3. Rename .env.example menjadi .env lalu lakukan konfigurasi dengan mengubah nama db_databse sesuai yang dibuat dan pastikan db_username dan db_password sesuai
4. Lakukan php artisan migrate untuk membuild table ke dalam database
5. jalankan projectnya dengan perintah php artisan serve
6. jalankan php artisan command:registrasi untuk mendaftarkan email dan password ke tabel user
7. Akses aplikasinya dengan url http://localhost:port
8. Lakukan login dengan email khoironi14@gmail.com dan password 12345678
