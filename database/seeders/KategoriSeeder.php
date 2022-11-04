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
            ['nama_kategori' => 'Perorangan'],
            ['nama_kategori' => 'Bencana Alam'],
            ['nama_kategori' => 'Pendidikan'],
            ['nama_kategori' => 'Sembako'],
            ['nama_kategori' => 'Kesehatan'],
        ];

        foreach ($data as $datum) {
            Kategori::create($datum);
        }
    }
}
