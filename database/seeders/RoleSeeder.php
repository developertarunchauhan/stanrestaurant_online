<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_list = [
            [
                'title' => 'Admin',
                'slug' => 'admin',
                'description' => 'The highest level of access in the management software, responsible for configuring system settings and managing user accounts.',
            ],
            [
                'title' => 'Cheif',
                'slug' => 'cheif',
                'description' => 'This category includes job roles such as Restaurant Manager, Assistant Manager, and General Manager, who are responsible for overseeing the day-to-day operations of the restaurant, managing staff, and ensuring customer satisfaction.',
            ],
            [
                'title' => 'Manager',
                'slug' => 'manager',
                'description' => 'These are the employees who interact directly with customers. This includes hosts/hostesses, servers/waitstaff, bartenders, and bussers.',
            ],
            [
                'title' => 'Waiter',
                'slug' => 'waiter',
                'description' => 'These are the employees who work in the kitchen and are responsible for preparing and cooking the food. This includes chefs, line cooks, prep cooks, and dishwashers.',
            ],
            [
                'title' => 'Delivery Drivers',
                'slug' => 'delivery-drivers',
                'description' => 'These are the employees who are responsible for delivering food to customers who have placed orders for takeout or delivery.',
            ],
            [
                'title' => 'Customer',
                'slug' => 'customer',
                'description' => 'These are the customer',
            ],
            [
                'title' => 'Guest(Without Login)',
                'slug' => 'guest-without-login',
                'description' => 'These are the customer',
            ]
        ];

        DB::table('roles')->insert($role_list);
    }
}
