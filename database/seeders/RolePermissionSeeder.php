<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = Role::findById(1);
        $b_prov = Role::findById(2);

        $adminPermissions = [
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
        ];


        $bprovPermissions = [
            'Aktifitas',
            'Aktifitas Referensi Site',
            'Aktifitas Aktifitas Pengguna',
            'Verifikasi',
            'Verifikasi Klarifikasi',
            'Verifikasi Validasi',
        ];

        $admin->givePermissionTo($adminPermissions);
        $b_prov->givePermissionTo($bprovPermissions);
    }
}
