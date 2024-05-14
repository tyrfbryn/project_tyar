<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'Membuang Sampah Pada Tempat Nya',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQPClTyyLBBt_kVaakzKMnqwkhXUk7QoB4r4t5wrz4ExZMneABtNItRC2U4tLS-oMva8c&usqp=CAU',
            'kategori' => 'Bersih',
            'konten' => 'Sampah-sampah yang menumpuk dapat menjadi sarang penyakit. Hal ini dikarenakan virus dan bakteri-bakteri lainnya menyukai tempat-tempat yang sangat kotor dan bau untuk berkembang biak',
            'penulis' => 'Disperkimta'
        ]);

        Artikel::insert([
            'judul' => 'Kebersihan Pada Tubuh',
            'foto' => 'https://cdn.gramedia.com/uploads/items/yuk_pakai_sabun.jpg',
            'kategori' => 'Kebersihan',
            'konten' => 'Menerapkan pola hidup bersih dan sehat (PHBS) lebih dari sekadar membiasakan anak untuk mencuci tangan. Mengajarkan anak pentingnya menjaga kebersihan diri pada anak sejak dini dapat menciptakan kebiasaan baik yang akan melekat hingga seumur hidup mereka.',
            'penulis' => 'Nurdin Hamzah'
        ]);

        Artikel::insert([
            'judul' => 'Kesehatan Tubuh',
            'foto' => 'https://fikes.esaunggul.ac.id/wp-content/uploads/2022/07/menjaga-kesehatan-saat-sibuk-kuliah-online.webp',
            'kategori' => 'Kesehatan',
            'konten' => 'Menjaga kesehatan dan kebugaran tubuh merupakan hal yang sangat penting. Hal ini karena dengan memiliki tubuh yang sehat dan bugar dapat mencegah tubuh terserang penyakit sehingga kita dapat tetap menjalankan aktifitas sehari-hari',
            'penulis' => 'Dr Tirta'
        ]);
    }
}
