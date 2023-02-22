<?php

namespace Database\Seeders;

use App\Models\Aspirasi;
use App\Models\Kategori;
use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();
        Penduduk::factory(5)->create();

        User::create([
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin')
        ]);

        Aspirasi::create([
            "nik" => "1292834",
            'id_kategori' => '1',
            'lokasi' => "Jakarta",
            'keterangan_singkat' => 'Banjir',
            "Keterangan" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint deleniti cupiditate vero ullam voluptatem enim placeat obcaecati, non accusamus qui possimus itaque optio adipisci beatae necessitatibus temporibus veritatis fugit. Dolore!', 
            'status' => 'menunggu',
            'feedback' => '-'
        ]);
        Aspirasi::create([
            "nik" => "1231813",
            'id_kategori' => '2',
            'lokasi' => "Bandung",
            "Keterangan_singkat" => 'Saluran air macet',
            "Keterangan" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint deleniti cupiditate vero ullam voluptatem enim placeat obcaecati, non accusamus qui possimus itaque optio adipisci beatae necessitatibus temporibus veritatis fugit. Dolore!', 
            'status' => 'proses',
            'feedback' => '-'
        ]);
        Aspirasi::create([
            "nik" => "638193",
            'id_kategori' => '3',
            'lokasi' => "Tanggerang",
            "Keterangan_singkat" => 'Minyak naik harga',
            "Keterangan" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint deleniti cupiditate vero ullam voluptatem enim placeat obcaecati, non accusamus qui possimus itaque optio adipisci beatae necessitatibus temporibus veritatis fugit. Dolore!', 
            'status' => 'selesai',
            'feedback' => '-'
        ]);

        Kategori::create([
            'kategori' => 'Keamanan'
        ]);
        Kategori::create([
            'kategori' => 'Sosial'
        ]);
        Kategori::create([
            'kategori' => 'Ekonomi'
        ]);
    }
}
