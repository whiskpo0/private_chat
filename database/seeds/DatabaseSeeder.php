<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create([

            'email' => 'adam@gmail.com',
            'name' => 'Adam'
        ]);

        factory(User::class)->create([
            
            'email' => 'sarah@gmail.com',
            'name' => 'Sarah'
        ]);

        factory(User::class)->create([
            
            'email' => 'geed@gmail.com',
            'name' => 'Tyler'
        ]);
    }
}
