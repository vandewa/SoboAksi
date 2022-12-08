<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(PermissionTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ComCodeSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(EwalletSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
