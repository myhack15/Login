<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $roles = [
        'jack-ol',
        'ping-er',
        'sixtyniner',
      ];

      foreach ($roles as $role) {
        Role::create([
          'name' => $role,
        ]);
      }
    }
}
