<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'id' => 1,
			'email'=>'lordas@kol.com',
			'photo'=>'images/loko.jpg',
            'name' => 'Barack Obama'
        ));

    }

}
