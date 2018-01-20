<?php

use Illuminate\Database\Seeder;

class junSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
              ['Nis'=>'123',
              'Nama'=>'junika',
              'Tempat_lahir'=>'palembang',
              'Tanggal_lahir'=>'2001-06-01',
              'Alamat'=>'bandung',
              'Cita-cita'=>'tentara',
              'Hobi'=>'olahraga',
              'Photo'=>'tidak ada']
              ];
                DB::table('siswas')->insert($a);
             
    }
}
