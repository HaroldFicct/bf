<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;


class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Harold',
            'email'=>'admin@admin.com',
            'adress'=>'Barrio los chacos',
            'phone'=>'60933397',
            'password'=>Hash::make('123456789')
        ]);
    }
}
