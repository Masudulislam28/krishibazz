<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 

            'user_type'  =>  'admin',
            'username'  =>  'admin',
            'password'  =>  bcrypt('12345'),
            'email'  =>  'admin@gmail.com',
            'mobile_num'  =>  '01982736283',
            'address'  =>  'Dhaka',

        ]);
    }
}
