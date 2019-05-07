<?php

use App\User;
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
        $users = [
            [
                'name' => 'Super Admin',
                'email' => env('SA_EMAIL'),
                'password' => password_hash(env('SA_PASSWORD'), PASSWORD_BCRYPT),
            ],
        ];
        foreach ($users as $user) {
            if ($user['email']) {
                User::updateOrCreate(['email' => $user['email']], $user);
            }
        }
    }
}
