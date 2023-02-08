<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([UserSeeder::class]);

        \App\Models\City::factory(100)->create();
        \App\Models\Type::factory(100)->create();
        \App\Models\Social::factory(100)->create();
        \App\Models\Purpose::factory(100)->create();
        \App\Models\Legal::factory(100)->create();
        \App\Models\Organisation::factory(500)->create();
        // \App\Models\Department::factory(5000)->create();
        // \App\Models\Member::factory(10000)->create();
        \App\Models\Discount::factory(10000)->create();
        \App\Models\Document::factory(6000)->create();
        \App\Models\Department::factory(2000)
            ->has(\App\Models\Member::factory()->count(4))
            ->create();


        

        //  \App\Models\DepartmentMember::factory(25000)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
