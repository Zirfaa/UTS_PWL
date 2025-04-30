<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DasboardController extends BaseController
{
    public function produk()
    {
        $data['produk']=[
            [
            'nama' => 'Victus',
            'seri' => 'R0017TX',
            'kategori' => 'Laptop',
            'stok' => 'Ready',
            'harga' => '17000000'
            ],
            [
            'nama' => 'HyperX Stinger2',
            'seri' => '-',
            'kategori' => 'Headset',
            'stok' => 'Ready',
            'harga' => '500000'
            ],
            [
            'nama' => 'Logitech',
            'seri' => 'B175',
            'kategori' => 'Mouse',
            'stok' => 'Ready',
            'harga' => '170000'
            ]
        ];
        return view('produk',$data);

    }
}
