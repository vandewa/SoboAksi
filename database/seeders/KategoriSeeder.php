<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->truncate();
        $data = [
            ['nama_kategori' => 'Perorangan', 'icon' => '20221221043639.png'],
            ['nama_kategori' => 'Bencana', 'icon' => '20221221042431.png'],
            ['nama_kategori' => 'Pendidikan', 'icon' => '20221221043651.png'],
            ['nama_kategori' => 'Sembako', 'icon' => '20221221043659.png'],
            ['nama_kategori' => 'Kesehatan', 'icon' => '20221221043714.png'],
            ['nama_kategori' => 'UMKM', 'icon' => '20221223034637.png'],
        ];

        foreach ($data as $datum) {
            Kategori::create($datum);
        }
    }
}
