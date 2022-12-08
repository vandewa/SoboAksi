<?php

namespace Database\Seeders;

use App\Models\Ewallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EwalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code' => 'ID_OVO', 'name' => 'OVO', 'fee' => 3.18,  'use_phone' => true],
            ['code' => 'ID_DANA', 'name' => 'DANA', 'fee' => 1.50,  'use_phone' => false],
            ['code' => 'ID_LINKAJA', 'name' => 'LINKAJA', 'fee' => 3.15,  'use_phone' => false],
            ['code' => 'ID_SHOPEEPAY', 'name' => 'SHOPEEPAY', 'fee' => 1.80,  'use_phone' => false],
            ['code' => 'ID_ASTRAPAY', 'name' => 'ASTRAPAY', 'fee' => 1.50,  'use_phone' => false],
            ['code' => 'ID_JENIUSPAY', 'name' => 'JENIUSPAY', 'fee' => 2,  'use_phone' => false, 'use_cashtag' => true],
            ['code' => 'ID_SAKUKU', 'name' => 'ID_SAKUKU', 'fee' => 1.50,  'use_phone' => false, 'use_cashtag' => false],
        ];

        foreach ($data as $datum){
            Ewallet::create($datum);
        }
    }
}
