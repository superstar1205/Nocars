<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'school_id' => 1,
            'name' => "Fred Bloggs",
            'username' => "Fred",
            'password' => bcrypt('letmein5678'),
        ]);

        User::create([
            'school_id' => 1,
            'name' => "Jane Doe",
            'username' => "Jane",
            'password' => bcrypt('letmein5678'),
        ]);
    }
}
