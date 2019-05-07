<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count_db = DB::table('oauth_clients')->count();
        $is_file_key = is_file(storage_path('oauth-public.key'));
        if ($count_db == 0 || $is_file_key == false) {
            Artisan::call('passport:install');
        }
    }
}
