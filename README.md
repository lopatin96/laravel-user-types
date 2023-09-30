# Install
### Trait and Casts
Add ```HasUserType``` trait and casts to User model.

```php
use Atin\LaravelSocialAuth\Traits\HasUserType;

class User extends Authenticatable
{
    use HasUserType;
    
    protected $casts = [
        'type' => \Atin\LaravelUserTypes\Enums\UserType::class,
    ];
```

Run migrations:
```php
php artisan migrate
```

# Publishing
### Migrations
```php
php artisan vendor:publish --tag="laravel-user-types-migrations"
```