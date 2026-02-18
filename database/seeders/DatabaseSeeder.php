<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
    $this->call(ProductSeeder::class);

       $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
              'password' => 123456,
        ]);

         User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
               'password' => 123456,
        ]);

        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
    }
}
