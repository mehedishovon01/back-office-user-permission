<?php

namespace Database\Seeders\permissions;

use App\Models\Permissions\SubModule;
use Illuminate\Database\Seeder;

class SubmoduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getSubmodules() ?? [] as $submodule)
        {
            SubModule::firstOrCreate([
                'name'      => $submodule['name']
            ], [
                'id'        => $submodule['id'],
                'module_id' => $submodule['module_id'],
            ]);
        }
    }

    private function getSubmodules()
    {
        return $submodules = [
            ['id' => '1','name' => 'User Access','module_id' => '1','created_at' => '2019-12-25 20:45:50','updated_at' => '2019-12-25 23:03:11'],
        ];
    }
}
