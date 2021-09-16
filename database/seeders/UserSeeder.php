<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $data = [
            'fullname'       => 'Harrie',
            'username'       => 'harrie',
            'email'          => 'harrie@email.com',
            'password'       => Hash::make('123456'),
            'tel'            => '0123456789',
            'avatar'         => 'https://via.placeholder.com/400x400.png/005429?text=udses',
            'role'           => '1',
            'remember_token' => 'CjfhgjkrnB',

        ];
        User::create($data);
        // Call User factory
        User::factory(99)->create();
    }
}
