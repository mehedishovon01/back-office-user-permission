<?php

namespace Database\Seeders\permissions;

use App\Models\Permissions\ParentPermission;
use Illuminate\Database\Seeder;

class ParentPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getDatas() ?? [] as $parent_permission)
        {
            ParentPermission::firstOrCreate([
                'name' => $parent_permission['name'],
            ], [
                'id' => $parent_permission['id'],
                'submodule_id' => $parent_permission['submodule_id'],
            ]);
        }
    }

    private function getDatas()
    {
        return [
            ['id' => '1','name' => 'User Access','submodule_id' => '1'],
        ];
    }
}
