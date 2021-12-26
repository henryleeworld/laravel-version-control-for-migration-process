<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'      => 1,
                'user_id' => 1,
                'name'   => 'Admin',
            ],
            [
                'id'      => 2,
                'user_id' => 2,
                'name'    => 'User',
            ],
            [
                'id'      => 3,
                'user_id' => 3,
                'name'    => 'Admin',
            ],
            [
                'id'      => 4,
                'user_id' => 4,
                'name'    => 'User',
            ],
        ];

        Role::insert($roles);
    }
}
