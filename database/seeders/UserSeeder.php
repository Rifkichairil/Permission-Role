<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $admin = User::create([
            'name'  => 'Admin Pusat',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin_pusat');

        // beberapa Prov
        $b_prov = User::create([
            'name'  => 'Beberapa Prov',
            'email' => 'b_prov@gmail.com',
            'password' => bcrypt('password')
        ]);

        $b_prov->assignRole('b_prov');

        // prof
        $prov = User::create([
            'name'  => 'Beberapa Prov',
            'email' => 'prov@gmail.com',
            'password' => bcrypt('password')
        ]);

        $prov->assignRole('prov');

        // bw_kab
        $bw_kab = User::create([
            'name'  => 'Beberapa Wilayah Kabupaten',
            'email' => 'bw_kab@gmail.com',
            'password' => bcrypt('password')
        ]);

        $bw_kab->assignRole('bw_kab');

        // adb_kab
        $adb_kab = User::create([
            'name'  => 'ADB Kabupaten',
            'email' => 'adb_kab@gmail.com',
            'password' => bcrypt('password')
        ]);

        $adb_kab->assignRole('adb_kab');

        // auditor
        $audit = User::create([
            'name'  => 'Auditor',
            'email' => 'audit@gmail.com',
            'password' => bcrypt('password')
        ]);

        $audit->assignRole('audit');

        // adb_kot
        $adb_kot = User::create([
            'name'  => 'ADB Kota',
            'email' => 'adb_kot@gmail.com',
            'password' => bcrypt('password')
        ]);

        $adb_kot->assignRole('adb_kot');

        // telkom_view
        $telkom_view = User::create([
            'name'  => 'Telkom View',
            'email' => 'telkom_view@gmail.com',
            'password' => bcrypt('password')
        ]);

        $telkom_view->assignRole('telkom_view');

        // ba
        $ba = User::create([
            'name'  => 'BA',
            'email' => 'ba@gmail.com',
            'password' => bcrypt('password')
        ]);

        $ba->assignRole('ba');

        // Telkom
        $telkom = User::create([
            'name'  => 'Telkom',
            'email' => 'telkom@gmail.com',
            'password' => bcrypt('password')
        ]);

        $telkom->assignRole('telkom');

        // admin telkom
        $adm_telkom = User::create([
            'name'  => 'Admin Telkom',
            'email' => 'adm_telkom@gmail.com',
            'password' => bcrypt('password')
        ]);

        $adm_telkom->assignRole('adm_telkom');

        // pemerika_1
        $pemeriksa_1 = User::create([
            'name'  => 'Pemeriksa 1',
            'email' => 'pemeriksa_1@gmail.com',
            'password' => bcrypt('password')
        ]);

        $pemeriksa_1->assignRole('pemeriksa_1');

        // pemeriksa_2
        $pemeriksa_2 = User::create([
            'name'  => 'Pemeriksa 2',
            'email' => 'pemeriksa_2@gmail.com',
            'password' => bcrypt('password')
        ]);

        $pemeriksa_2->assignRole('pemeriksa_2');
    }
}
