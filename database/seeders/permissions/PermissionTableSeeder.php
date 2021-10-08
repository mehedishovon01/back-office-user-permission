<?php

namespace Database\Seeders\permissions;

use App\Models\Permissions\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getDatas() ?? [] as $permission)
        {
            Permission::firstOrCreate([
                'slug'                  => $permission['slug'],
            ], [
                'name'                  => $permission['name'],
                'parent_permission_id'  => $permission['parent_permission_id'],
                'created_by'            => 1,
                'updated_by'            => 1,
            ]);
        }
    }

    private function getDatas()
    {
        return [
            ['id' => '1','name' => 'User','slug' => 'users.index','description' => NULL,'created_by' => '1','updated_by' => '1','parent_permission_id' => '1'],
            ['id' => '2','name' => 'View','slug' => 'users.view','description' => NULL,'created_by' => '1','updated_by' => '1','parent_permission_id' => '1'],
            ['id' => '3','name' => 'Create','slug' => 'users.create','description' => NULL,'created_by' => '1','updated_by' => '1','parent_permission_id' => '1'],
            ['id' => '4','name' => 'Edit','slug' => 'users.edit','description' => NULL,'created_by' => '1','updated_by' => '1','parent_permission_id' => '1'],
            ['id' => '5','name' => 'Delete','slug' => 'users.delete','description' => NULL,'created_by' => '1','updated_by' => '1','parent_permission_id' => '1']
        ];
    }
}

