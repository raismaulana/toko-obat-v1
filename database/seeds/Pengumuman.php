<!-- =========================================================================================
  Name: Toko Obat V1 Website
  Author: Muhammad Fauzan
  Author URL: http://fauzanishere.my.id
  Repository: https://github.com/fauzan121002/toko-obat-v1
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
<?php

use Illuminate\Database\Seeder;

class Pengumuman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengumuman')->insert([
            'isi_pengumuman'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officiis nihil, dicta expedita nisi beatae, et quis nemo obcaecati earum consequuntur adipisci quisquam ab neque officia eveniet vero quas aut debitis dolorem? Eaque, sapiente. Odio reprehenderit suscipit quis pariatur perferendis atque fugit sunt, vero alias amet quisquam! Assumenda unde corporis laborum! Nesciunt, quaerat iste laboriosam vel reprehenderit ea qui doloribus dolore reiciendis dolores quidem sed facilis, fugiat culpa minus est neque rerum corporis optio numquam explicabo aliquam. Veniam, facilis, atque. Reiciendis sapiente, tempore excepturi libero, totam, nobis animi, ipsam consequatur dignissimos esse praesentium nam mollitia provident iusto iure nisi sit?',
        ]);
    }
}
