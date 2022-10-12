<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'diaspora', 'guard_name' => 'Diaspora'],
            ['id' => '2', 'name' => 'opd', 'guard_name' => 'OPD'],
            ['id' => '3', 'name' => 'masyarakat', 'guard_name' => 'Masyarakat'],
        ];

        foreach ($data as $datum) {
            Role::create($datum);
        }
    }
}
