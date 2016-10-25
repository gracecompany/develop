<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_product')->delete();
        
        \DB::table('category_product')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'product_id' => 1,
                'created_at' => '2016-09-07 13:19:17',
                'updated_at' => '2016-09-07 13:19:21',
            ),
            1 => 
            array (
                'category_id' => 1,
                'product_id' => 2,
                'created_at' => '2016-09-07 13:19:30',
                'updated_at' => '2016-09-07 13:19:33',
            ),
            2 => 
            array (
                'category_id' => 1,
                'product_id' => 3,
                'created_at' => '2016-09-07 13:19:41',
                'updated_at' => '2016-09-07 13:19:45',
            ),
            3 => 
            array (
                'category_id' => 5,
                'product_id' => 5,
                'created_at' => '2016-10-05 19:33:30',
                'updated_at' => '2016-10-05 19:33:33',
            ),
            4 => 
            array (
                'category_id' => 5,
                'product_id' => 6,
                'created_at' => '2016-10-05 19:33:45',
                'updated_at' => '2016-10-05 19:33:47',
            ),
        ));
        
        
    }
}
