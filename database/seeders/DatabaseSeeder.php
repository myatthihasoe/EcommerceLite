<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            SizeSeeder::class,
            // ProductDetailSeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            // OrderProductDetailSeeder::class,
            // ProductSeeder::class,
            AttributeSeeder::class
            // OrderSeeder::class,
            // OrderProductDetailSeeder::class,
            // ProductSeeder::class,
            // AttributeOptionProductDetailSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
