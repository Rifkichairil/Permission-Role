<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Admin pusat
        Role::create([
            'name' => 'admin_pusat',
            'guard_name' => 'web'
        ]);

        // beberapa prov
        Role::create([
            'name' => 'b_prov',
            'guard_name' => 'web'
        ]);

        // prov
        Role::create([
            'name' => 'prov',
            'guard_name' => 'web'
        ]);

        // bw_kab
        Role::create([
            'name' => 'bw_kab',
            'guard_name' => 'web'
        ]);

        // adb_kab
        Role::create([
            'name' => 'adb_kab',
            'guard_name' => 'web'
        ]);

        // auditor
        Role::create([
            'name' => 'audit',
            'guard_name' => 'web'
        ]);

        // adb_kab
        Role::create([
            'name' => 'adb_kot',
            'guard_name' => 'web'
        ]);


        // telkom_view
        Role::create([
            'name' => 'telkom_view',
            'guard_name' => 'web'
        ]);

        // ba
        Role::create([
            'name' => 'ba',
            'guard_name' => 'web'
        ]);

        // Telkom
        Role::create([
            'name' => 'telkom',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'adm_telkom',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'pemeriksa_1',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'pemeriksa_2',
            'guard_name' => 'web'
        ]);
    }
}
