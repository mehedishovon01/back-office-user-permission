<?php

namespace Database\Seeders\permissions;

use App\Models\Permissions\Module;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getModules() ?? [] as $module)
        {
            Module::firstOrCreate([
                'id' => $module['id'],
            ], [
                'name' => $module['name'],
                'status' => $module['status'],
            ]);
        }
    }

    private function getModules()
    {
        return [
            ['id' => '1',   'status' => '1', 'name' => 'User Access'],
        ];
    }
}
