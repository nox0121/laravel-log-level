# Laravel Log Level Package

這個套件可設定 Monolog 的 Level，來決定是否輸出 debug log。

### 安裝方式

`composer require nox0121/laravel-log-level`

### 設定 app.confg

	'providers' => [
	    ...
	    Nox0121\LaravelLogLevel\LaravelLogLevelServiceProvider::class,
	    ...
	];

### 發布設定檔 (config/laravel-log-level.php)

`php artisan vendor:publish --provider="Nox0121\LaravelLogLevel\LaravelLogLevelServiceProvider"`

	可直接設定 APP_LOG_LEVEL 或是修改 laravel-log-level.php 內的

	'log-level' => env('APP_LOG_LEVEL', 'info')
