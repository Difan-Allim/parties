<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Department::factory(2000)->create();
        \App\Models\Member::factory(35534)->create();
        \App\Models\DepartmentMember::factory(35534)->create();
        
    }
}
