<?php

namespace Database\Seeders;

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
	    $data = [
	        [
		        'name'     => 'No author',
		        'email'    => 'author_unknown@co.ro',
		        'password' => bcrypt(str_random(16)),
            ],
	        [
		        'name'     => 'Author',
		        'email'    => 'author_admin@co.ro',
		        'password' => bcrypt('123456'),
            ],
	    ];

	    \DB::table('users')->insert($data);
    }
}
