<?php

namespace Database\Seeders;

use App\Actions\Jetstream\CreateTeam;
use App\Models\Address;
use App\Models\Company;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use Remote\Xinvoice\Models\Enums\Countries\CountryAlpha2;

class AdminSeeder extends Seeder
{
    public function run()
    {

        $user = User::create([
                                 "first_name" => "Admin",
                                 "last_name" => "User",
                                 "email" => config('settings.admin_email'),
                                 "email_verified_at" => now(),
                                 "password" => Hash::make('password'),
                             ]);
        $address = Address::create([
                                       "scope" => 0,
                                       "last_name" => $user->first_name,
                                       "first_name" => $user->first_name,
                                       "email" => $user->email,
                                       "zip" => "01189",
                                       "address_line_1" => "Würschnitzer Straße 20",
                                       "city" => "Radeburg",
                                       "country_code" => CountryAlpha2::Germany,
                                       'company' => $user->full_name,
                                   ]);
        $company = Company::create([
                                       "user_id" => $user->id,
                                       "name" => 'r-emote GmbH',
                                       "address_id" => $address->id,
                                   ]);
    }
}
