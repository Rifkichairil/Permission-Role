<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'Dashboard',
            'Dashboard Dashboard Utama',
            'Dashboard Peta',
            'Dashboard Polling Engine',
            'Dashboard Restitusi',
            'Dashboard SLA',
            'Dashboard BA SITE',
            'Aktifitas',
            'Aktifitas Referensi Site',
            'Aktifitas Aktifitas Pengguna',
            'Verifikasi',
            'Verifikasi Klarifikasi',
            'Verifikasi Validasi',
            'Laporan',
            'Laporan Restitusi',
            'Pengaturan',
            'Pengaturan Pengguna',
            'Pengaturan Konfigurasi',
            'Pengaturan Master Site',
            'Pengaturan Perangkat',
            'Pengaturan Kalender',
            'Pengaturan Polling Engine Server',
            'Pengaturan Mitra',
            'Pengaturan Harga',
            'Pengaturan Closing SLA & BA',
            'Pengaturan Referensi Klarifikasi',
        ];

        for ($item = 0; $item < count($permissions); $item++) {
            foreach ($permissions as $pemission) {
                $pemission = new Permission();
                $pemission->name = $permissions[$item];

                $pemission->save();
                $item += 1;
            }
        }
    }
}
