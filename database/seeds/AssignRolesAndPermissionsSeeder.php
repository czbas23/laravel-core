<?php

use App\User;
use Illuminate\Database\Seeder;

class AssignRolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = User::where('email', env('SA_EMAIL'))->first();
        if ($User) {
            $User->syncRoles(['super-admin']);
        }
    }
}
