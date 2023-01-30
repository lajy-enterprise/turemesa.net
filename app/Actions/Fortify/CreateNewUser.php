<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

//---------------


/*
* -- Permission
*/
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
/*
* -- Permission
*/

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'apellido' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'pais' => ['required', 'string', 'max:255'],
            'terms' => ['accepted', 'required']
        ], $messages = [
            'required' => 'EL campo :attribute es requerido.',
            'accepted' => 'EL campo :attribute debe ser aceptado.',
            'unique' => 'El :attribute ya se encuentra en uso por otro usuario',
        ])->validate();
        // 'rol' => ['required', 'string', 'min:2', 'max:255'],
        //Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',

        $userCreate = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'apellido' => $input['apellido'],
            'dni' => $input['dni'],
            'phone' => $input['phone'],
            'pais' => $input['pais'],
        ]);

        $userCreate->assignRole('user');    

        // if ($input['rol'] == 'org') {
        //     $userCreate->assignRole('org');
        // } else if ($input['rol'] == ''user'') {
        //     $userCreate->assignRole(''user'');    
        // };
        
        return $userCreate;
    }
}
