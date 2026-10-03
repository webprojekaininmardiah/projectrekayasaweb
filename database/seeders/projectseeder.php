<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $projects = [
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
        [
            'title' => 'Sistem informasi akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah dan nilai perkuliahan',
            'teknologi' => 'Laravel & Bootsrap',
            'image' => 'project1.jpg',
            'status' => 'selesai',
        ],
     ];
    foreach ($projects as $project) {
        \App\Models\project:: create($project);
    }
    }
}
