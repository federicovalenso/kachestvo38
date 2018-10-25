<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $admin = new User();
        $admin->name = 'Шергин Анатолий Сергеевич';
        $admin->email = 'qwe.tt@mail.ru';
        $admin->password = bcrypt('57435743');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
