<?php

namespace Lcloss\SimpleAuth\Actions;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'username'      => ['required', 'string', 'max:60', 'unique:users,username'],
            'first_name'    => ['required', 'string', 'max:60'],
            'last_name'     => ['required', 'string', 'max:60'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'mobile'        => 'nullable|string|max:255',
            'password'      => $this->passwordRules(),
            'accept_terms'  => 'required|accepted'
        ])->validate();

        return UserService::create($input);
    }
}
