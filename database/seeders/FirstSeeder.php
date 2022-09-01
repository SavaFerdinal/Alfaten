<?php
 
namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'sava',
            'email' => 'sava@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'sava'
        ]);
 
        User::create([
            'name'=> 'raisya',
            'email' => 'raisya@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'raisya'
        ]);
 
        User::create([
            'name'=> 'ferdinal',
            'email' => 'ferdinal@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'ferdinal'
        ]);
    }
}