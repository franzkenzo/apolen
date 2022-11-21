<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Barang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Sanmol Tablet 500mg',
                'deskripsi' => 'Sanmol Tablet 500 mg adalah obat yang memiliki kandungan bahan aktif Paracetamol. Paracetamol bekerja dengan cara mengurangi kadar prostaglandin di dalam tubuh, sehingga tanda peradangan seperti demam dan nyeri akan berkurang. Obat ini digunakan untuk meringankan rasa sakit seperti sakit kepala, sakit gigi serta menurunkan demam',
                'kemasan' => '1 Strip isi 4 Tablet',
                'indikasi' => 'Meringankan rasa sakit seperti sakit kepala, sakit gigi dan menurunkan demam',
                'dosis' => 'Dewasa: 1-2 tablet, diberikan sebanyak 3-4 kali per hari',
                'cara_penyimpanan' => 'Simpan di tempat sejuk dan kering, serta terhindar dari sinar matahari langsung',
                'no_izin_edar' => 'DBL7622235610A2',
                'harga' => '2287',
                'id_kategori' => '2 '
            ],
            [
                'nama' => 'Sumagesic Tablet',
                'deskripsi' => 'Sumagesic merupakan obat yang digunakan untuk meredakan demam, pusing maupun rasa nyeri pada otot, kepala, dan gigi. Sumagesic mengandung zat aktif Paracetamol (Acetaminophen) yaitu zat aktif yang memiliki aktivitas sebagai penurun demam/antipiretik dan pereda nyeri/analgesik yang bekerja dengan cara menghambat pembentukan prostaglandin yaitu zat yang memicu nyeri dan demam di hipotalamus untuk meningkatkan pelepasan panas supaya suhu tubuh normal',
                'indikasi' => 'Menyembuhkan rasa sakit seperti sakit kepala, sakit gigi, sakit pada otot dan persendiaan, reumatoid artritis, osteoartritis dan sakit karena trauma ringan dan tindakan pembedahan, menurunkan demamMeringankan rasa sakit seperti sakit kepala, sakit gigi dan menurunkan demam',
                'dosis' => 'dewasa : 3-4 x sehari 1 tablet',
                'kemasan' => 'Dewasa : 3-4 x sehari 1 tablet',
                'cara_penyimpanan' => 'Simpan di tempat sejuk dan kering, serta terhindar dari sinar matahari langsung',
                'no_izin_edar' => 'DBL7814710810A1',
                'harga' => '2904',
                'id_kategori' => '1',
            ],
            [
                'nama' => 'Becom Zet Tablet',
                'deskripsi' => 'Becom Zet Tab 100 S adalah suplemen yang mengandung kombinasi antara multivitamin, mineral dan zinc yang berfungsi untuk memelihara daya tahan tubuh dan mempercepat pemulihan setelah sakit',
                'kemasan' => '1 Dos isi 10 Strip x 10 Tablet',
                'indikasi' => 'Becom Zet untuk apa? defisiensi vitamin B kompleks, Vitamin C, Vitamin E, Zinc',
                'dosis' => '1 x sehari 1 kaplet',
                'cara_penyimpanan' => 'Simpan di tempat sejuk dan kering, serta terhindar dari sinar matahari langsung',
                'no_izin_edar' => 'SD191555181',
                'harga' => '27240',
                'id_kategori' => '1',
            ],
            [
                'nama' => 'Zegavit Tablet',
                'deskripsi' => 'Zegavit adalah sebuah suplemen yang dapat digunakan untuk menjaga daya tahan tubuh',
                'kemasan' => '1 Dos isi 10 Blister x 5 Tablet',
                'indikasi' => 'Kekurangan vitamin dan mineral, menurunnya daya tahan tubuh',
                'dosis' => '> 12 th: sehari 1 kaplet',
                'cara_penyimpanan' => 'Simpan di tempat sejuk dan kering, serta terhindar dari sinar matahari langsung.',
                'no_izin_edar' => 'SD151546531',
                'harga' => '28299',
                'id_kategori' => '2',
            ],            
        ];

        foreach($data as $dt) {
            $dt['created_at'] = Time::now();
            $this->db->table('barang')->insert($dt);
        }
    }
}