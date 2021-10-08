<?php

namespace Database\Seeders\permissions;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $this->call([
            ModuleTableSeeder::class,
            SubmoduleTableSeeder::class,
            ParentPermissionTableSeeder::class,
            PermissionTableSeeder::class,
        ]);
        DB::commit();
    }
}
