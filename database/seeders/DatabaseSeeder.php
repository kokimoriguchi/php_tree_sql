<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tree;
use App\Models\TreeUser;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        TreeUser::create([
            'name' => 'test1',
        ]);

        Tree::create([
            'parent_id' => null,
            'master_id' => '2',
        ]);

        Tree::create([
            'parent_id' => '1',
            'master_id' => '3',
        ]);
    }
}
