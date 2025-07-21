<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Budi Santoso',
                'tahun_lulus' => 2020,
                'jurusan' => 'Teknik Informatika',
                'pekerjaan' => 'Software Engineer',
                'kontak' => '081234567890'
            ],
            [
                'nama' => 'Siti Aminah',
                'tahun_lulus' => 2019,
                'jurusan' => 'Sistem Informasi',
                'pekerjaan' => 'Business Analyst',
                'kontak' => '081298765432'
            ],
            [
                'nama' => 'Rahmat Hidayat',
                'tahun_lulus' => 2021,
                'jurusan' => 'Desain Komunikasi Visual',
                'pekerjaan' => 'Graphic Designer',
                'kontak' => '081377788899'
            ],
            [
                'nama' => 'Dewi Lestari',
                'tahun_lulus' => 2018,
                'jurusan' => 'Akuntansi',
                'pekerjaan' => 'Auditor',
                'kontak' => '081512345678'
            ],
            [
                'nama' => 'Agus Supriyanto',
                'tahun_lulus' => 2020,
                'jurusan' => 'Teknik Elektro',
                'pekerjaan' => 'Electrical Engineer',
                'kontak' => '081623456789'
            ],
            [
                'nama' => 'Rina Wijaya',
                'tahun_lulus' => 2019,
                'jurusan' => 'Manajemen',
                'pekerjaan' => 'Marketing Manager',
                'kontak' => '081734567890'
            ],
            [
                'nama' => 'Fajar Nugroho',
                'tahun_lulus' => 2021,
                'jurusan' => 'Teknik Sipil',
                'pekerjaan' => 'Civil Engineer',
                'kontak' => '081845678901'
            ],
            [
                'nama' => 'Ani Setiawan',
                'tahun_lulus' => 2017,
                'jurusan' => 'Psikologi',
                'pekerjaan' => 'HR Specialist',
                'kontak' => '081956789012'
            ],
            [
                'nama' => 'Eko Prasetyo',
                'tahun_lulus' => 2022,
                'jurusan' => 'Teknik Industri',
                'pekerjaan' => 'Production Supervisor',
                'kontak' => '082167890123'
            ],
            [
                'nama' => 'Linda Hartati',
                'tahun_lulus' => 2018,
                'jurusan' => 'Hukum',
                'pekerjaan' => 'Legal Consultant',
                'kontak' => '082278901234'
            ],
            [
                'nama' => 'Hendra Kurniawan',
                'tahun_lulus' => 2020,
                'jurusan' => 'Teknik Mesin',
                'pekerjaan' => 'Mechanical Engineer',
                'kontak' => '082389012345'
            ],
            [
                'nama' => 'Maya Indah Sari',
                'tahun_lulus' => 2019,
                'jurusan' => 'Ilmu Komunikasi',
                'pekerjaan' => 'Public Relations',
                'kontak' => '082490123456'
            ],
            [
                'nama' => 'Adi Saputra',
                'tahun_lulus' => 2021,
                'jurusan' => 'Teknik Kimia',
                'pekerjaan' => 'Process Engineer',
                'kontak' => '082501234567'
            ],
            [
                'nama' => 'Rini Astuti',
                'tahun_lulus' => 2018,
                'jurusan' => 'Kedokteran',
                'pekerjaan' => 'Dokter Umum',
                'kontak' => '082612345678'
            ],
            [
                'nama' => 'Joko Susilo',
                'tahun_lulus' => 2020,
                'jurusan' => 'Agribisnis',
                'pekerjaan' => 'Agronomist',
                'kontak' => '082723456789'
            ]
        ];

        foreach ($data as $alumni) {
            Alumni::create($alumni);
        }
    }
}