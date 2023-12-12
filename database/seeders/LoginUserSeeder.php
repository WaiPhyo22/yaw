<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create login user
        $user1 = User::create([
            'name' => 'waiphyo',
            'mail_address' => 'waiphyo055192@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        //assign role to user
        $user1->assignRole('admin');
    }
}
