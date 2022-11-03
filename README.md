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

Contoh ENV

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:gWT02TKRnB3WJ4pKCVWgtNtpmUcgtBR/PFgFbb9bo9E=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

FILESYSTEM_DRIVER=public

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yukzakat
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=d34476e2473f0f
MAIL_PASSWORD=011692a9f2181a
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

JWT_SECRET=pKhaXBf6GdOiMYI1OWqZS770XUICRTRsHa43YhyIQhscRiqQQFsStoef4VuZsVP4

JWT_SHOW_BLACKLIST_EXCEPTION=true

JWT_ALGO=HS256

APP_DEBUG=true

BASE_URL="http://localhost:8000/api"




