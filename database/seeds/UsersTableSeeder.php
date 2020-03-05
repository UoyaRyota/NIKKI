<?php

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
        DB::table('users')->insert([
            'name' => 'Uoya Ryota',
            'email' => 'lestwinsdance8@gmail.com',
            'img_name' => '',
            'password' => 'UR19930413z',
            'occupation' => 'engineer',
            'self_introduction' => '初めましてよろしくお願いします。',
        ]);
    }
}
