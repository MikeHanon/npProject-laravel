<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $sellerRole = Role::where('name', 'seller')->first();
        $buyerRole = Role::where('name', 'buyer')->first();

        $admin = User::create([
            'name'=> 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $seller = User::create([
            'name'=> 'Seller',
            'email' => 'seller@seller.com',
            'password' => Hash::make('password')
        ]);
        $buyer = User::create([
            'name'=> 'Buyer',
            'email' => 'buyer@buyer.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $seller->roles()->attach($sellerRole);
        $buyer->roles()->attach($buyerRole);
    }
}
