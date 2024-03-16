<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Testing Steps
- create a database - 'pharmacy-ms'
- Do a migration - php artisan migrate
## Test Below Scenarios (Endpoints)
- Test the user registration ('/register')
- User login ('/login')
- Add customer - POST: 'api/customer'
- Add medicine - POST: 'api/medicine'
- Edit customer - PUT: 'api/customer/{id}'
- Edit medicine - PUT: 'api/medicine/{id}'
- Delete customer - DELETE: 'api/customer/{id}'
- Delete medicine - DELETE: 'api/medicine/{id}'


