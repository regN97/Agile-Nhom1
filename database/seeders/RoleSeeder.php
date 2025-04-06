<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Quản trị viên',
        ]);

        Role::create([
            'name' => 'customer',
            'description' => 'Khách hàng',
        ]);

        Role::create([
            'name' => 'staff',
            'description' => 'Nhân viên',
        ]);
    }
}
