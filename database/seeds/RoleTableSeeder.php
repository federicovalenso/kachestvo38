<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee =  new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'Administrator';
        $role_employee->save();
        $role_employee =  new Role();
        $role_employee->name = 'user';
        $role_employee->description = 'Standart user';
        $role_employee->save();
    }
}
