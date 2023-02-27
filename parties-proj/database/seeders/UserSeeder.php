<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'role' => User::IS_ADMIN,
            'name' => 'automatic_generation',
            'email' => 'automatic@parties.com',
            'password' => bcrypt('j2gekPB$2eG5') // TODO not secure
        ]);

        \App\Models\User::factory()->create([
            'role' => User::IS_READER,
            'name' => 'dummy_reader',
            'email' => 'reader@parties.com',
            'password' => bcrypt('6i%T8ak3np&7') // TODO not secure
        ]);

        \App\Models\User::factory()->create([
            'role' => User::IS_EDITOR,
            'name' => 'dummy_editor',
            'email' => 'editor@parties.com',
            'password' => bcrypt('j2gekPB$2eG5') // TODO not secure
        ]);
        \App\Models\User::factory()->create([
            'role' => User::IS_EDITOR,
            'name' => 'dummy1_editor',
            'email' => 'editor1@parties.com',
            'password' => bcrypt('qwe123') // TODO not secure
        ]);
        \App\Models\User::factory()->create([
            'role' => User::IS_EDITOR,
            'name' => 'dummy2_editor',
            'email' => 'editor2@parties.com',
            'password' => bcrypt('123qwe') // TODO not secure
        ]);

        \App\Models\User::factory()->create([
            'role' => User::IS_ADMIN,
            'name' => 'dummy_admin',
            'email' => 'admit@parties.com',
            'password' => bcrypt('j2gekPB$2eG5') // TODO not secure
        ]);
    }
}
