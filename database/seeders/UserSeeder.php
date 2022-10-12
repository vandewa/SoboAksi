<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();
        // $user = [
        //     [
        //     'id' => '1', 
        //     'name' => 'Superadmin', 
        //     'email' => 'superadmin@app.com', 
        //     'password' => Hash::make('password'),
        //     ],
        // ];

        // foreach ($user as $datum) {
        //     User::create($datum);
        // }

        $user = User::create([
            'name' => 'Superadmin', 
            'email' => 'superadmin@app.com',
            'password' => bcrypt('password'),
            'profile_photo_path' => 'images/profile/pemda.png',
        ]);
      
        $role = Role::create(['name' => 'diaspora']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);

        
        
    }
}
