<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $admin = new User();
//        $admin->id = 1;
//        $admin->name = 'admin';
//        $admin->email= 'admin@admin.com';
//        $admin->email_verified_at= Carbon::now();
//        $admin->password = Hash::make('12345678');
//        $admin->created_at = Carbon::now();
//        $admin->updated_at = Carbon::now();
//        $admin->save();

            $admin = new User();
            $admin->id = 1;
            $admin->email= 'admin@admin.com';
            $admin->username= 'admin';
            $admin->password = Hash::make('admin');
            $admin->save();
    }
}
