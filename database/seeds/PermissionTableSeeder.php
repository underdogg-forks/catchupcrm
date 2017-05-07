<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
        		'name' => 'relations-list',
        		'display_name' => 'Display relations Listing',
        		'description' => 'See only Listing Of relations'
        	],
        	[
        		'name' => 'relations-create',
        		'display_name' => 'Create relations',
        		'description' => 'Create New relations'
        	],
        	[
        		'name' => 'relations-edit',
        		'display_name' => 'Edit relations',
        		'description' => 'Edit relations'
        	],
        	[
        		'name' => 'relations-delete',
        		'display_name' => 'Delete relations',
        		'description' => 'Delete relations'
        	]
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
