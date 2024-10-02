<?php

namespace Database\Seeders;

use App\Enums\RoleTypeEnum;
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
        Role::create(['name'=> RoleTypeEnum::USER, 'guard_name' => 'web']);
        Role::create(['name'=> RoleTypeEnum::ADMIN, 'guard_name' => 'web']);
    }
}
