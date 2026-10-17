<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Kereta Api Jarak Jauh',
                'kategori' => 'Antarkota',
                'deskripsi' => 'Layanan perjalanan antarkota dengan pilihan kelas dan jadwal yang dapat disesuaikan dengan kebutuhan perjalanan.',
                'gambar' => 'images/layanan/KERETA API JARAK JAUH.jpg',
                'rute' => 'Berbagai kota di Pulau Jawa dan Sumatra',
                'jam_operasional' => 'Mengikuti jadwal perjalanan',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://booking.kai.id/',
            ],
            [
                'nama' => 'KA Commuter Line',
                'kategori' => 'Perkotaan',
                'deskripsi' => 'Layanan kereta komuter untuk membantu mobilitas masyarakat di kawasan perkotaan dan sekitarnya.',
                'gambar' => 'images/layanan/KAI COMMUTER.jpg',
                'rute' => 'Jabodetabek dan wilayah operasional terkait',
                'jam_operasional' => 'Mengikuti jadwal perjalanan',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://commuterline.id/',
            ],
            [
                'nama' => 'KA Bandara',
                'kategori' => 'Bandara',
                'deskripsi' => 'Pilihan transportasi kereta untuk mendukung perjalanan menuju dan dari bandara pada rute yang tersedia.',
                'gambar' => 'images/layanan/KA BANDARA.jpg',
                'rute' => 'Sesuai layanan KA Bandara yang beroperasi',
                'jam_operasional' => 'Mengikuti jadwal perjalanan',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://www.kai.id/',
            ],
            [
                'nama' => 'KA Lokal',
                'kategori' => 'Regional',
                'deskripsi' => 'Layanan kereta untuk perjalanan jarak dekat hingga menengah di wilayah operasional tertentu.',
                'gambar' => 'images/layanan/lokal.svg',
                'rute' => 'Rute regional sesuai jadwal',
                'jam_operasional' => 'Mengikuti jadwal perjalanan',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://booking.kai.id/',
            ],
            [
                'nama' => 'Kereta Wisata',
                'kategori' => 'Wisata',
                'deskripsi' => 'Layanan perjalanan wisata dengan fasilitas khusus sesuai paket dan ketersediaan yang ditawarkan.',
                'gambar' => 'images/layanan/KERETA WISATA.jpg',
                'rute' => 'Sesuai paket dan perjalanan yang tersedia',
                'jam_operasional' => 'Sesuai jadwal pemesanan',
                'status' => 'Informasi',
                'url_pemesanan' => 'https://www.kaiwisata.id/',
            ],
            [
                'nama' => 'Angkutan Barang',
                'kategori' => 'Logistik',
                'deskripsi' => 'Layanan angkutan barang menggunakan kereta api untuk mendukung distribusi logistik.',
                'gambar' => 'images/layanan/KAI LOGISTIK.jpg',
                'rute' => 'Koridor angkutan barang yang tersedia',
                'jam_operasional' => 'Sesuai layanan dan kontrak',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://www.kai.id/',
            ],
            [
                'nama' => 'Layanan di Stasiun',
                'kategori' => 'Fasilitas',
                'deskripsi' => 'Fasilitas stasiun untuk menunjang kenyamanan penumpang sebelum, saat, dan setelah perjalanan.',
                'gambar' => 'images/layanan/LAYANAN STASIUN KAI.jpg',
                'rute' => 'Stasiun sesuai fasilitas yang tersedia',
                'jam_operasional' => 'Mengikuti jam operasional stasiun',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://www.kai.id/',
            ],
            [
                'nama' => 'Pemesanan Tiket Online',
                'kategori' => 'Digital',
                'deskripsi' => 'Pemesanan tiket melalui kanal digital resmi untuk membantu pelanggan merencanakan perjalanan.',
                'gambar' => 'images/layanan/LOKET KAI.jpg',
                'rute' => 'Layanan digital',
                'jam_operasional' => 'Sesuai ketersediaan sistem',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://booking.kai.id/',
            ],
            [
                'nama' => 'Layanan Pelanggan',
                'kategori' => 'Informasi',
                'deskripsi' => 'Kanal informasi dan bantuan pelanggan terkait perjalanan, tiket, dan layanan kereta api.',
                'gambar' => 'images/layanan/LAYANAN PELANGGAN.jpg',
                'rute' => 'Kanal layanan pelanggan',
                'jam_operasional' => 'Periksa kanal resmi untuk jam layanan terbaru',
                'status' => 'Aktif',
                'url_pemesanan' => 'https://www.kai.id/',
            ],
            [
                'nama' => 'Integrasi Antarmoda',
                'kategori' => 'Integrasi',
                'deskripsi' => 'Dukungan konektivitas perjalanan kereta dengan moda transportasi lain di lokasi yang terintegrasi.',
                'gambar' => 'images/layanan/integrasi.svg',
                'rute' => 'Lokasi integrasi sesuai fasilitas setempat',
                'jam_operasional' => 'Mengikuti jadwal moda terkait',
                'status' => 'Informasi',
                'url_pemesanan' => 'https://www.kai.id/',
            ],
        ];

        foreach ($data as $item) {
            Layanan::updateOrCreate(['nama' => $item['nama']], $item);
        }
    }
}
