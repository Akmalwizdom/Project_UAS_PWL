<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Rolex Submariner Date',
                'harga'  => 135000000,
                'jumlah' => 3,
                'foto' => 'rolex_submariner.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Omega Seamaster Diver 300M',
                'harga'  => 82000000,
                'jumlah' => 5,
                'foto' => 'omega_seamaster.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Tag Heuer Carrera Calibre 5',
                'harga'  => 45000000,
                'jumlah' => 4,
                'foto' => 'tag_heuer_carrera.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Cartier Santos de Cartier',
                'harga'  => 105000000,
                'jumlah' => 2,
                'foto' => 'cartier_santos.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Patek Philippe Nautilus',
                'harga'  => 250000000,
                'jumlah' => 1,
                'foto' => 'patek_philippe_nautilus.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Audemars Piguet Royal Oak',
                'harga'  => 180000000,
                'jumlah' => 2,
                'foto' => 'audemars_piguet_royal_oak.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}