<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        State::create([
            'state' => 'sended',
            'name' => 'Sended to moderate',
        ]);
        State::create([
            'state' => 'published',
            'name' => 'Published',
        ]);
        State::create([
            'state' => 'deny',
            'name' => 'Deny published',
        ]);
    }
}
