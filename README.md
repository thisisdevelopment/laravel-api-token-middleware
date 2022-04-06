# laravel-api-token-middleware
Simple API token middleware for Laravel applications

### Setup

Publish the config by using the following command

``php artisan vendor:publish --provider="ThisIsDevelopment\LaravelApiTokenMiddleware\ApiTokenServiceProvider"``

The API token, token header field and unauthorized message are now configurable
in `config/laravel-api-token-middleware.php`, the token is loaded from the `INTERNAL_API_TOKEN` env field by default.

### Usage

To use the middleware, include:

``ThisIsDevelopment\LaravelApiTokenMiddleware\Http\Middleware\VerifyInternalApiToken``

In your middleware list.
