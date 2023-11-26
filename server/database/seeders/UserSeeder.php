<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role_id' => 1,
                'name' => 'Rahmat',
                'email' => 'rahmat@gmail.com',
                'image' => 'default.jpg',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'instagram' => null,
                'twitter' => null,
                'linkedin' => null,
                'whatsapp' => null
            ],
            [
                'role_id' => 2,
                'name' => 'Nabila Zaein Dwi Kensiwi',
                'email' => 'nabila@gmail.com',
                'image' => 'trainer-3.jpg',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'instagram' => 'https://www.instagram.com/nabilazaein',
                'twitter' => 'https://www.twitter.com/',
                'linkedin' => 'https://www.linkedin.com/in/',
                'whatsapp' => '082233703699'
            ],
            [
                'role_id' => 2,
                'name' => 'Mentari Tika Fortherina',
                'email' => 'mentari@gmail.com',
                'image' => 'trainer-3.jpg',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'instagram' => 'https://www.instagram.com/mentaritikaf',
                'twitter' => 'https://www.twitter.com/',
                'linkedin' => 'https://www.linkedin.com/in/mentari-tika-fortherina-tarigan-1b464621b/',
                'whatsapp' => '081260993047'
            ],
            [
                'role_id' => 2,
                'name' => 'Jihan Sasri',
                'email' => 'jihan@gmail.com',
                'image' => 'trainer-3.jpg',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'instagram' => 'https://www.instagram.com/jihansasri',
                'twitter' => 'https://www.twitter.com/jihansasri',
                'linkedin' => 'https://www.linkedin.com/in/jihan-sasri-sajidah-9b8241256/',
                'whatsapp' => 'https://wa.me/081212683964'
            ]
        ];

        User::insert($users);
    }
}