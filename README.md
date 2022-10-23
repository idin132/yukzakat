## Instalasi

Ketik di terminal
- composer update

lalu tambahkan file .env di dalam folder project (copy lalu rename file .env.example)

- migrasi database menggunakan "php artisan migrate"
- generate jwt secret token menggunakan "php artisan jwt:secret"

## Running

- Running menggunakan "php artisan serve"

# Notes

Untuk menjalankan API Logout, wajib menambah header seperti dibawah

Header : Authorization
Value : Bearer "Token dari login"