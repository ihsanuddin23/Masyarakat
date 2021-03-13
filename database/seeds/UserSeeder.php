<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'      => 'Admin Role',
            'email'     => 'admin@example',
            'password'  => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name'      => 'User Role',
            'email'     => 'masyarakat@example',
            'password'  => bcrypt('User')
        ]);

        $user->assignRole('user');
    }
}