<?php

/**
 *
 */
class PostTableSeeder extends Seeder
{

  public function run()
  {
    //Kosongkan table Post
    DB::table('post')->delete();

    //Buat data berupa array untuk diinput ke datebase
    $posts = array(
      array('id'=>1,'title'=>'Tips Cepat Nikah','content'=>'lorem ipsum'),
      array('id'=>2, 'title'=>'hauskan menunda Nikah?', 'content'=>'lorem ipsum'),
      array('id'=>3, 'title'=>'membangun Visi Misi keluarga', 'content'=>'lorem ipsum')

    );
    //Masukan Data ke datebase
    DB::table('posts')->insert($posts);
  }
}


 ?>
