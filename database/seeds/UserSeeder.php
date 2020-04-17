<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
Use Carbon\Carbon;
use App\User;
use App\Role;
use App\Kelasr;
use App\Spp;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            ['nama_kelas' => '12 RPL 1', 'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'],
            ['nama_kelas' => '12 RPL 2', 'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'],
            ['nama_kelas' => '12 RPL 3', 'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'],
            ['nama_kelas' => '12 MM', 'kompetensi_keahlian' => 'Multimedia'],
            ['nama_kelas' => '12 TKJ', 'kompetensi_keahlian' => 'Teknik Komputer dan Jaringan'],
            ['nama_kelas' => '12 AVI 1', 'kompetensi_keahlian' => 'Teknik Audio Video'],
            ['nama_kelas' => '12 AVI 2', 'kompetensi_keahlian' => 'Teknik Audio Video'],
            ['nama_kelas' => '12 AVI 3', 'kompetensi_keahlian' => 'Teknik Audio Video'],
            ['nama_kelas' => '12 AVI 4', 'kompetensi_keahlian' => 'Teknik Audio Video'],
            ['nama_kelas' => '12 TITL 1', 'kompetensi_keahlian' => 'Teknik Instalasi Tenaga Listrik'],
            ['nama_kelas' => '12 TITL 2', 'kompetensi_keahlian' => 'Teknik Instalasi Tenaga Listrik'],
            ['nama_kelas' => '12 TOI 1', 'kompetensi_keahlian' => 'Teknik Otomasi Industri'],
            ['nama_kelas' => '12 TOI 2', 'kompetensi_keahlian' => 'Teknik Otomasi Industri'],
        ];
        $user = [
            [
                'name' => 'Admin Soleh',
                'username' => 'admin1',
                'role' => '1',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Petugas Soleh',
                'username' => 'Petugas',
                'role' => '2',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()
            ],
        ];
        $role = [
            ['name' => 'Administrator'],
            ['name' => 'Petugas'],
            ['name' => 'Siswa']
        ];
        $spp = [
            'tahun' => Carbon::now()->format('Y'),
            'nominal' => '300000',
        ];
        Role::insert($role);
        User::insert($user);
        Kelasr::insert($kelas);
        Spp::insert($spp);
    }
}
