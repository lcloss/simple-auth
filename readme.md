# SimpleAuth
SimpleAuth is a package to have a quick authorizations screen in conjunction with Laravel Fortify. 
It is designed with Laravel 10, but may work with other versions.
With this package, you can Login, Register, Recover password and handle Email verification.

## Installation
1. Install the package via composer:
    ```bash
    composer require lcloss/simple-auth
    ```
2. Publish the config file:
    ```bash
    php artisan vendor:publish --provider="Lcloss\SimpleAuth\SimpleAuthServiceProvider"
    ```

3. Publish the Fortify file:
    ```bash
    php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
    ```

4. Regiter `login` and `register` views in the Fortify config file:
    ```php
    // app\Providers\FortifyServiceProvider.php
    public function boot(): void
    {
        /* Login */
        Fortify::loginView(function () {
            return view( config('simple-auth.views.login') );
        });

        /* Register */
        Fortify::registerView(function () {
            return view(config('simple-auth.views.register'));
        });

        // Forgot Password view
        Fortify::requestPasswordResetLinkView(function () {
            return view(config('simple-auth.views.forgot-password'));
        });

        // Reset password view
        Fortify::resetPasswordView(function ($request) {
            return view(config('simple-auth.views.reset-password'), ['request' => $request]);
        });

        // Verify email view
        Fortify::verifyEmailView(function () {
            return view(config('simple-auth.views.verify-email'));
        });

        // Confirm password view
        Fortify::confirmPasswordView(function () {
            return view(config('simple-auth.views.confirm-password'));
        });
   
    ```

## Configuration

You can change this package's configuration by editing the `config/simple-auth.php` file.

## TODOs
- [ ] Add tests
- [ ] Add translations

