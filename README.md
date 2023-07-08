# Laravel Test.hh

## Инструкция для исползования

### Клонирование проекта и копирование env
### Импортируем sql который есть в корневом папке test.hh проекта (не написал migrations чтобы не отнял время) 
```bash
$ git clone https://github.com/cyberman-2000/test.hh.git
$ cd test.hh
$ composer update
```
### Запускаем установку пакетов php (композер)
```bash
composer require barryvdh/laravel-dompdf
composer require laravel-notification-channels/telegram
```

### Запуск проекта через openserver
```bash
php artisan serve
```




