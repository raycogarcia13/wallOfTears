<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->delete();

        Config::create([
            'tear_moderate' => true,
            'comment_moderate'=>true,
            'send_email_notification'=>true
        ]);
    }
}
