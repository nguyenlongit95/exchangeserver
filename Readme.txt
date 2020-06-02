Cách cài đặt App
- Coppy thư mục dự án vào thư mục htdocs
- Chạy lệnh: php artisan migrate
- Chạy lệnh: php artisan db:seed
- Nếu trên nền Linux hoặc MACOS thì chạy lệnh sau:
    chmod -R 777 storage đẻ cấp quyền truy cập cho thư mục storage.
    chmod -R 777 bootstrap/cache để cấp quyền truy cập cho thư mục bootstrap.
- Cài đặt Guzzle
