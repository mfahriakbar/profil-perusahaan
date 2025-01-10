<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'company_name' => 'BPMSPH',
            'about' => 'Balai Pengujian Mutu dan Sertifikasi Produk Hewan adalah lembaga yang bertugas melaksanakan pengujian mutu dan sertifikasi produk hewan.',
            'vision' => 'Menjadi lembaga pengujian dan sertifikasi produk hewan yang terpercaya dan berkelas dunia.',
            'mission' => 'Memberikan pelayanan pengujian dan sertifikasi produk hewan yang profesional, akurat, dan tepat waktu.',
            'address' => 'Jl. Pemuda No. 29A, Jakarta Timur',
            'email' => 'info@bpmsph.go.id',
            'phone' => '(021) 1234567'
        ]);
    }
}
