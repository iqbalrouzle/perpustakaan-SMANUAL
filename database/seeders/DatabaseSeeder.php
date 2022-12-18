<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "Admin Utama";
        $admin->email = "ujle@admin.com";
        $admin->password = Hash::make("qweqweqwe");
        $admin->peran = "admin";
        $admin->save();

        $admin = new User();
        $admin->name = "Ujle";
        $admin->email = "coba@admin.com";
        $admin->password = Hash::make("smanual");
        $admin->peran = "admin";
        $admin->save();
    }
}