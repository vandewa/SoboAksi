<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\ComCode;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('com_codes')->truncate();
        $data = [
            // ['code_cd' => 'ROLE_ST_01', 'code_nm' => 'diaspora', 'code_group' => 'ROLE_ST', 'code_value' => ''],
            // ['code_cd' => 'ROLE_ST_02', 'code_nm' => 'opd', 'code_group' => 'ROLE_ST', 'code_value' => ''],
            // ['code_cd' => 'ROLE_ST_03', 'code_nm' => 'masyarakat', 'code_group' => 'ROLE_ST', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_ST_01', 'code_nm' => 'Laki-laki', 'code_group' => 'JENIS_KELAMIN_ST', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_ST_02', 'code_nm' => 'Perempuan', 'code_group' => 'JENIS_KELAMIN_ST', 'code_value' => ''],
            ['code_cd' => 'IDENTITAS_ST_01', 'code_nm' => 'KTP', 'code_group' => 'IDENTITAS_ST', 'code_value' => ''],
            ['code_cd' => 'IDENTITAS_ST_02', 'code_nm' => 'SIM', 'code_group' => 'IDENTITAS_ST', 'code_value' => ''],
            ['code_cd' => 'IDENTITAS_ST_03', 'code_nm' => 'PASSPORT', 'code_group' => 'IDENTITAS_ST', 'code_value' => ''],
            ['code_cd' => 'PUBLISH_ST_01', 'code_nm' => 'Ya', 'code_group' => 'PUBLISH_ST', 'code_value' => ''],
            ['code_cd' => 'PUBLISH_ST_02', 'code_nm' => 'Tidak', 'code_group' => 'PUBLISH_ST', 'code_value' => ''],
            // ['code_cd' => 'STATUS_ST_01', 'code_nm' => 'Ya', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            // ['code_cd' => 'STATUS_ST_02', 'code_nm' => 'Tidak', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_01', 'code_nm' => 'AKUNTAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_02', 'code_nm' => 'ANGGOTA BPK', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_03', 'code_nm' => 'ANGGOTA DPD', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_04', 'code_nm' => 'ANGGOTA DPRD KABUPATEN/KOTA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_05', 'code_nm' => 'ANGGOTA DPRD PROVINSI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_06', 'code_nm' => 'ANGGOTA DPR-RI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_07', 'code_nm' => 'ANGGOTA KABINET/KEMENTERIAN ', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_08', 'code_nm' => 'ANGGOTA MAHKAMAH KONSTITUSI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_09', 'code_nm' => 'APOTEKER', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_10', 'code_nm' => 'ARSITEK', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_11', 'code_nm' => 'BELUM/TIDAK BEKERJA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_12', 'code_nm' => 'BIARAWATI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_13', 'code_nm' => 'BIDAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_14', 'code_nm' => 'BUPATI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_15', 'code_nm' => 'BURUH HARIAN LEPAS', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_16', 'code_nm' => 'BURUH NELAYAN/PERIKANAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_17', 'code_nm' => 'BURUH PETERNAKAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_18', 'code_nm' => 'BURUH TANI/PERKEBUNAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_19', 'code_nm' => 'DOKTER', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_20', 'code_nm' => 'DOSEN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_21', 'code_nm' => 'DUTA BESAR', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_22', 'code_nm' => 'GUBERNUR', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_23', 'code_nm' => 'GURU', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_24', 'code_nm' => 'IMAM MESJID', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_25', 'code_nm' => 'INDUSTRI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_26', 'code_nm' => 'JURU MASAK', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_27', 'code_nm' => 'KARYAWAN BUMD', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_28', 'code_nm' => 'KARYAWAN BUMN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_29', 'code_nm' => 'KARYAWAN HONORER', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_30', 'code_nm' => 'KARYAWAN SWASTA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_31', 'code_nm' => 'KEPALA DESA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_32', 'code_nm' => 'KEPOLISIAN RI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_33', 'code_nm' => 'KONSTRUKSI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_34', 'code_nm' => 'KONSULTAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_35', 'code_nm' => 'LAINNYA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_36', 'code_nm' => 'MEKANIK', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_37', 'code_nm' => 'MENGURUS RUMAH TANGGA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_38', 'code_nm' => 'NELAYAN/PERIKANAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_39', 'code_nm' => 'NOTARIS', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_40', 'code_nm' => 'PARAJI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_41', 'code_nm' => 'PARANORMAL', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_42', 'code_nm' => 'PASTOR', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_43', 'code_nm' => 'PEDAGANG', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_44', 'code_nm' => 'PEGAWAI NEGERI SIPIL', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_45', 'code_nm' => 'PELAJAR/MAHASISWA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_46', 'code_nm' => 'PELAUT', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_47', 'code_nm' => 'PEMBANTU RUMAH TANGGA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_48', 'code_nm' => 'PENATA BUSANA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_49', 'code_nm' => 'PENATA RAMBUT', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_50', 'code_nm' => 'PENATA RIAS', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_51', 'code_nm' => 'PENDETA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_52', 'code_nm' => 'PENELITI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_53', 'code_nm' => 'PENGACARA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_54', 'code_nm' => 'PENSIUNAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_55', 'code_nm' => 'PENTERJEMAH', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_56', 'code_nm' => 'PENYIAR RADIO', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_57', 'code_nm' => 'PENYIAR TELEVISI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_58', 'code_nm' => 'PERANCANG BUSANA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_59', 'code_nm' => 'PERANGKAT DESA  ', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_60', 'code_nm' => 'PERAWAT', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_61', 'code_nm' => 'PERDAGANGAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_62', 'code_nm' => 'PETANI/PEKEBUN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_63', 'code_nm' => 'PETERNAK', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_64', 'code_nm' => 'PIALANG', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_65', 'code_nm' => 'PILOT', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_66', 'code_nm' => 'PRESIDEN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_67', 'code_nm' => 'PROMOTOR ACARA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_68', 'code_nm' => 'PSIKIATER/PSIKOLOG', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_69', 'code_nm' => 'SENIMAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_70', 'code_nm' => 'SOPIR', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_71', 'code_nm' => 'TABIB', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_72', 'code_nm' => 'TENTARA NASIONAL INDONESIA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_73', 'code_nm' => 'TRANSPORTASI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_74', 'code_nm' => 'TUKANG BATU', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_75', 'code_nm' => 'TUKANG CUKUR', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_76', 'code_nm' => 'TUKANG GIGI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_77', 'code_nm' => 'TUKANG JAHIT', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_78', 'code_nm' => 'TUKANG KAYU', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_79', 'code_nm' => 'TUKANG LAS/PANDAI BESI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_80', 'code_nm' => 'TUKANG LISTRIK', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_81', 'code_nm' => 'TUKANG SOL SEPATU', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_82', 'code_nm' => 'USTADZ/MUBALIGH', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_83', 'code_nm' => 'WAKIL BUPATI', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_84', 'code_nm' => 'WAKIL GUBERNUR', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_85', 'code_nm' => 'WAKIL PRESIDEN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_86', 'code_nm' => 'WAKIL WALIKOTA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_87', 'code_nm' => 'WALIKOTA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_88', 'code_nm' => 'WARTAWAN', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEKERJAAN_89', 'code_nm' => 'WIRASWASTA', 'code_group' => 'PEKERJAAN_ST', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
