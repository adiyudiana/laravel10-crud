<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        DB::table('students')->insert([
        [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'class' => '10th Grade',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 1',
        ],    
        [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'class' => '11th Grade',
            'phone' => '081234567891',
            'address' => 'Jl. Sudirman No. 2',
        ],
        [
            'name' => 'Michael Johnson',
            'email' => 'michael@example.com',
            'class' => '12th Grade',
            'phone' => '081234567892',
            'address' => 'Jl. Gatot Subroto No. 3',
        ],
    ]);
    }        
}
