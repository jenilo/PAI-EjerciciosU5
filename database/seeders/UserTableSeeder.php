<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();
        $user->name = "Jennifer Lopez";
        $user->email = "jelo_17@alu.uabcs.mx";
        $user->password = bcrypt("12345678");
        $user->role_id = "1";
        $user->save();

        $user = new User();
        $user->name = "Juan Perez";
        $user->email = "user@mail.com";
        $user->password = bcrypt("12345678");
        $user->role_id = "2";
        $user->save();
    }
}
/*php artisan migrate:fresh --seed*/