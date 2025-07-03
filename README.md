<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## laravel filament guide:
- install filament panel
```bash
php artisan filament:install --panels
```
then type enter

-   make new users account:
```bash
php artisan make:filament-user
```
-   how to make new model to filament:
    - create a model
    ```bash
php artisan make:model Student -m
- Apps/database/migrations/student
    ```php
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('fakultas');
            $table->timestamps();
        });
    ```
    - Apps/app/Models/Student.php
    ```php
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    class Student extends Model
    {
        //
        use HasFactory;
        protected $fillable = 
        [
            'nim', 'nama', 'fakultas'
        ];
    }
    ```
- migrate
```bash
php artisan migrate
```
- filament resource Student
```bash
php artisan make:filament-resource StudentResource
```
- custom dashboard panel
```bash
php artisan make:filament-page Dashboard
```
- optimizing filament for production
```bash
php artisan filament:optimize
```
then if want clear cache:
```bash
php artisan filament:optimize-clear
```