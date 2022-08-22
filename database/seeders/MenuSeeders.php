<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'nama' => 'Ayam original',
            'harga' => 'Rp8.000 - Rp10.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/ori.png'
        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Hot',
            'harga' => 'Rp8.000 - Rp10.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/hot.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Geprek',
            'harga' => 'Rp12.500 - Rp14.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/geprek-2.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Keju',
            'harga' => 'Rp12.000 - Rp14.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/keju-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Mozarella',
            'harga' => 'Rp13.500 - Rp15.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/mozarella-2.png'


        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Dkribho',
            'harga' => 'Rp12.500 - Rp14.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/dkribho.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Blackpepper',
            'harga' => 'Rp11.500 - Rp13.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/blackpepper-2.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Geprek Mozarella',
            'harga' => 'Rp16.500 - Rp18.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'fav' =>'y',
            'gambar' => 'images/menufood/geprek-mozarella-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Drakor',
            'harga' => 'Rp12.000 - Rp14.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'fav' =>'y',
            'gambar' => 'images/menufood/drakor-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Saus Asam Manis Pedas',
            'harga' => 'Rp12.000 - Rp14.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/asam-manis.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Nasi Box',
            'harga' => 'Rp13.000 - Rp15.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/nasi-box-2.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ati Ampela',
            'harga' => 'Rp5.000',
            'keterangan'=>'Ati Ampela',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/ati-ampela-min.png'


        ]);
        DB::table('menus')->insert([
            'nama' => 'Kulit',
            'harga' => 'Rp7.000',
            'keterangan'=>'Kulit',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/Kulit.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Kentang',
            'harga' => 'Rp6.000',
            'keterangan'=>'Kentang',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/kentang-2.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Sate',
            'harga' => 'Rp4.000/tsk',
            'keterangan'=>'Sate',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/sate-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Sosis Bakar',
            'harga' => 'Rp10.000',
            'keterangan'=>'Sosis',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/sosis.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'K-pop',
            'harga' => 'Rp8.000',
            'keterangan'=>'K-pop',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/Kpop.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Kepala Crispy',
            'harga' => 'Rp4.500',
            'keterangan'=>'Kepla Crispy',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/KEPALA-CRISPY.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Burger',
            'harga' => 'Rp12.000',
            'keterangan'=>'Burger',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/burger-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Usus Ori',
            'harga' => 'Rp6.000',
            'keterangan'=>'Usus Ori',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/Usus-Ori.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Usus Spicy',
            'harga' => 'Rp6.000',
            'keterangan'=>'Usus Spicy',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/Usus-Spicy.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Bumbu Tabur',
            'harga' => 'Rp7.500 - Rp8.500',
            'keterangan'=>'Kulit Balado | Usus Balado | Kentang Balado',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/bumbu-tabur.png'


        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Sambal Cakalang',
            'harga' => 'Rp12.500 - Rp14.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/AYAM-SAMBAL-CAKALANG.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Geprek Keju',
            'harga' => 'Rp13.000 - Rp15.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/Geprek-Keju.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Dkribho Keju',
            'harga' => 'Rp13.000 - Rp15.000',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/Dkribho-Keju.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Chicken Wings',
            'harga' => 'Rp15.000',
            'keterangan'=>'Dkribho/Drakor | Asam Manis Pedas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/CHICKEN-WINGS-SAUS.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'K-pop Saus',
            'harga' => 'Rp10.000',
            'keterangan'=>'Dkribho/Drakor | Asam Manis Pedas',
            'kategori' => 'makanan',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/KPOP-Saus.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'Ayam Sambal Bawang',
            'harga' => 'Rp12.500 - Rp14.500',
            'keterangan'=>'Paha Bawah | Sayap | Dada | Paha Atas',
            'kategori' => 'makanan',
            'gambar' => 'images/menufood/AYAM-SAMBAL-BAWANG.png'


        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Vanilla',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Vanilla',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/vanila-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Coklat',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Coklat',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/coklat-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Pisang',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Pisang',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/pisang-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Strawberry',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Strawberry',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/strawberry-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Greentea',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Greentea',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/greentea-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Mangga',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Mangga',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/mangga-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Taro',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Taro',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/taro-1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Cappuccino',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Cappuccino',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/cappuccino1.png'

        ]);
        DB::table('menus')->insert([
            'nama' => 'D-ingin Thaitea',
            'harga' => 'Rp9.000',
            'keterangan'=>'Rasa Thaitea',
            'kategori' => 'minuman',
            'cemilan'=> 'y',
            'gambar' => 'images/menufood/taitea-1.png'

        ]);

    }
}
