<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
       User::create([
     'name' => 'Dita Nuansa',
     'username' => 'ditanuansa',
        'email' => 'ditanisa508@gmail.com',
        'password' =>bcrypt('12345')
       ]);

      // User::create([
        //'name' => 'Dian Nisa',
      //  'email' => 'diannisa8@gmail.com',
       // 'password' =>bcrypt('12345')
     //  ]);

    User::factory(3)->create();

       Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'
    ]);

    Category::create([
      'name' => 'Web Desaign',
      'slug' => 'web-desaign'
  ]);

 Category::create([
        'name' => 'Personal',
          'slug' => 'personal'
  ]);

    Post::factory(20)->create();

   // Post::create([
     //   'title' => 'Judul Pertama',
       // 'slug' => 'judul-pertama',
     //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
      //  'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto necessitatibus voluptas impedit fuga incidunt hic ea placeat ipsum, provident rerum molestiae minima facilis repellat expedita mollitia! Accusamus temporibus voluptates recusandae aut suscipit qui obcaecati similique alias! Animi nam similique sunt corrupti tempora ut consequuntur rem minima reprehenderit perferendis iusto eum, placeat reiciendis officiis velit culpa recusandae? Natus temporibus at eius quae? Illo possimus eaque ducimus, similique aliquid ullam officia iste facilis vero, quo tempore corporis inventore unde autem, quas eligendi quae amet ipsa distinctio ea nobis aliquam? Odio, cupiditate quidem alias officia esse accusamus nobis, nostrum est sunt illum placeat eum neque quas iste aperiam aliquid suscipit ullam cum porro ipsa minus officiis beatae. Cumque pariatur suscipit neque quibusdam incidunt, minima consectetur recusandae voluptates libero porro, sint quod a blanditiis natus voluptatem cum atque tempora veniam id labore quaerat nobis sapiente itaque. Praesentium aliquid nemo dolores nisi itaque voluptatum? Quod!',
        // 'category_id' =>1,
        // 'user_id' =>1
    // ]);
     //Post::create([
     //'title' => 'Judul Ke Dua',
     //'slug' => 'judul-ke-dua',
     //'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
     //'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto necessitatibus voluptas impedit fuga incidunt hic ea placeat ipsum, provident rerum molestiae minima facilis repellat expedita mollitia! Accusamus temporibus voluptates recusandae aut suscipit qui obcaecati similique alias! Animi nam similique sunt corrupti tempora ut consequuntur rem minima reprehenderit perferendis iusto eum, placeat reiciendis officiis velit culpa recusandae? Natus temporibus at eius quae? Illo possimus eaque ducimus, similique aliquid ullam officia iste facilis vero, quo tempore corporis inventore unde autem, quas eligendi quae amet ipsa distinctio ea nobis aliquam? Odio, cupiditate quidem alias officia esse accusamus nobis, nostrum est sunt illum placeat eum neque quas iste aperiam aliquid suscipit ullam cum porro ipsa minus officiis beatae. Cumque pariatur suscipit neque quibusdam incidunt, minima consectetur recusandae voluptates libero porro, sint quod a blanditiis natus voluptatem cum atque tempora veniam id labore quaerat nobis sapiente itaque. Praesentium aliquid nemo dolores nisi itaque voluptatum? Quod!',
     //'category_id' =>1,
     //'user_id' =>1
 //]);
 //Post::create([
   //  'title' => 'Judul Ke Tiga',
     //'slug' => 'judul-ke-tiga',
    // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    // 'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto necessitatibus voluptas impedit fuga incidunt hic ea placeat ipsum, provident rerum molestiae minima facilis repellat expedita mollitia! Accusamus temporibus voluptates recusandae aut suscipit qui obcaecati similique alias! Animi nam similique sunt corrupti tempora ut consequuntur rem minima reprehenderit perferendis iusto eum, placeat reiciendis officiis velit culpa recusandae? Natus temporibus at eius quae? Illo possimus eaque ducimus, similique aliquid ullam officia iste facilis vero, quo tempore corporis inventore unde autem, quas eligendi quae amet ipsa distinctio ea nobis aliquam? Odio, cupiditate quidem alias officia esse accusamus nobis, nostrum est sunt illum placeat eum neque quas iste aperiam aliquid suscipit ullam cum porro ipsa minus officiis beatae. Cumque pariatur suscipit neque quibusdam incidunt, minima consectetur recusandae voluptates libero porro, sint quod a blanditiis natus voluptatem cum atque tempora veniam id labore quaerat nobis sapiente itaque. Praesentium aliquid nemo dolores nisi itaque voluptatum? Quod!',
    // 'category_id' =>2,
     //'user_id' =>1
 //]);
   // Post::create([
   // 'title' => 'Judul Ke Empat',
   // 'slug' => 'judul-ke-empat',
   // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
   // 'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto necessitatibus voluptas impedit fuga incidunt hic ea placeat ipsum, provident rerum molestiae minima facilis repellat expedita mollitia! Accusamus temporibus voluptates recusandae aut suscipit qui obcaecati similique alias! Animi nam similique sunt corrupti tempora ut consequuntur rem minima reprehenderit perferendis iusto eum, placeat reiciendis officiis velit culpa recusandae? Natus temporibus at eius quae? Illo possimus eaque ducimus, similique aliquid ullam officia iste facilis vero, quo tempore corporis inventore unde autem, quas eligendi quae amet ipsa distinctio ea nobis aliquam? Odio, cupiditate quidem alias officia esse accusamus nobis, nostrum est sunt illum placeat eum neque quas iste aperiam aliquid suscipit ullam cum porro ipsa minus officiis beatae. Cumque pariatur suscipit neque quibusdam incidunt, minima consectetur recusandae voluptates libero porro, sint quod a blanditiis natus voluptatem cum atque tempora veniam id labore quaerat nobis sapiente itaque. Praesentium aliquid nemo dolores nisi itaque voluptatum? Quod!',
   // 'category_id' =>2,
   // 'user_id' =>2 
//]);
      
    }
}
