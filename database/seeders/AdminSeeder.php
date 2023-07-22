<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
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

        if(config('admin.hr_name')) {
            User::firstOrCreate(
                ['email' => config('admin.hr_email')], [
                    'name' => config('admin.hr_name'),
                    'roles_as' => config('admin.hr_role'),
                    'password' => bcrypt(config('admin.hr_password')),
                ]
            );
        }
        if(config('admin.gs_name')) {
            User::firstOrCreate(
                ['email' => config('admin.gs_email')], [
                    'name' => config('admin.gs_name'),
                    'roles_as' => config('admin.gs_role'),
                    'password' => bcrypt(config('admin.gs_password')),
                ]
            );
        }

        // if(config('admin.auditor_name')) {
        //     User::firstOrCreate(
        //         ['email' => config('admin.auditor_email')], [
        //             'name' => config('admin.auditor_name'),
        //             'roles_as' => config('admin.auditor_role'),
        //             'password' => bcrypt(config('admin.auditor_password')),
        //         ]
        //     );
        // }
    }
}
