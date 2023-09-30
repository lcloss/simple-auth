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
 
5. Create a user name from first and last names:

Note that this version of registration screen came with First name and Last name.
User's table has a `name` field, so you can use it to store the full name.

Change the CreateNewUser action to create the name from first and last names:

```php
    // app/Actions/Fortify/CreateNewUser.php
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'password_confirmation' => ['required', 'same:password'],
        ])->validate();
        
        $name = trim($input['first_name'] . ' ' . $input['last_name']);
```

5. Check the FortifyServiceProvider at `config/app.php`:
    ```php
    // config/app.php
    'providers' => [
        // ...
        App\Fortify\FortifyServiceProvider::class,
    ],
    ```
   
6. Do the migrations with seed:
    ```bash
    php artisan migrate --seed
    ```

7. Do the `npm install` and `npm run dev` commands.

8. Open your project in the browser and go to `/login` or `/register` to see the new views.

Tip: First registration will be the super user.

## Configuration

You can change this package's configuration by editing the `config/simple-auth.php` file.

## TODOs
- [ ] Add tests
- [ ] Add translations

