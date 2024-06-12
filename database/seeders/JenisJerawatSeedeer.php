<?php

namespace Database\Seeders;

use App\Models\JenisJerawat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisJerawatSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Acne Scar/Bekas Jerawat',
                'description' => 'Bekas jerawat jaringan parut'
            ],
            [
                'name' => 'Comedo',
                'description' => 'Beruntusan, komedo hitam (blackhead), dan komedo putih (whitehead)'
            ],
            [
                'name' => 'Jerawat Aktif',
                'description' => 'Segala jenis mulai dari popule, nodule, ataupun cystic mulai dari tingkat ringan sampai berat'
            ],
            [
                'name' => 'Post Inflamasi Hiperpigmentasi (PIH)',
                'description' => 'Post Inflammatory Hyperpigmentation atau bekas jerawat kehitaman'
            ],
            [
                'name' => 'Post Inflammatory Erythema (PIE)',
                'description' => 'Post Inflammatory Erythema atau bekas jerawat kemerahan.'
            ],
        ];

        foreach ($data as $key => $value) {
            JenisJerawat::create([
                'name' => $value['name'],
                'description' => $value['description'],
            ]);
        }
    }
}
