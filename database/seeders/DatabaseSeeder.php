<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        
        // \App\Models\User::factory(10)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    

   

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin343536@gmail.com';
        $user->password = '12345';
        $user->role = 'admin';
        
        $user->save();

}
}
