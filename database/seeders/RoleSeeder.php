<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->truncate();

        $data = [
            // ['id' => '1', 'name' => 'diaspora', 'guard_name' => 'Diaspora'],
            ['name' => 'opd'],
            ['name' => 'masyarakat'],
        ];

        foreach ($data as $datum) {
            Role::create($datum);
        }
    }
}
