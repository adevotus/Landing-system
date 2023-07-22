<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('admin.administrator_name')) {
            User::firstOrCreate(
                ['email' => config('admin.administrator_email')], [
                    'name' => config('admin.administrator_name'),
                    'roles_as' => config('admin.administrator_role'),
                    'password' => bcrypt(config('admin.administrator_password')),
                ]
            );
        }
    }
}
