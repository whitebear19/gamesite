<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Setting;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'role' => '2',            
            'password' => Hash::make('admin1234'),
        ]);

        User::create([
            'name' => 'userone',
            'email' => 'user@mail.com',
            'role' => '1',           
            'password' => Hash::make('user1234'),
        ]);
        Setting::create([
            'oasis_enjoy_img' => '',            
            'oasis_headset_img' => '',   
            'oasis_video' => '',                     
        ]);
    }
}
