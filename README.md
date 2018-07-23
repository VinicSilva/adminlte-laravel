# adminlte-laravel
AdminLTE for Laravel

## Install & Configure
```bash
composer require lbernardo/adminlte-laravel
```

### Configuration Service Provider
Access the config/app.php file and add the adminlte-laravel provider
```
Lbernardo\AdminLte\AdminServiceProvider::class
```

### Publish assets
```bash
php artisan vendor:publish --tag=public --force
```

### File configuration menus and application
```bash
php artisan vendor:publish --tag=config
```

### Publish views
```bash
php artisan vendor:publish --tag=views
```
