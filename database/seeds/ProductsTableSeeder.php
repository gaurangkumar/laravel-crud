<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Item1',
                'price' => 1000,
                'detail' => 'Item1 Description',
                'created_at' => '2019-06-08 10:17:03',
                'updated_at' => '2019-06-08 10:17:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Item2',
                'price' => 2000,
                'detail' => 'Item2 Description',
                'created_at' => '2019-06-08 10:21:19',
                'updated_at' => '2019-06-08 10:21:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Item3',
                'price' => 3000,
                'detail' => 'Item3 Description',
                'created_at' => '2019-06-08 10:21:44',
                'updated_at' => '2019-06-08 10:21:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Item4',
                'price' => 4000,
                'detail' => 'Item4 Description',
                'created_at' => '2019-06-08 10:25:16',
                'updated_at' => '2019-06-08 10:25:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Item5',
                'price' => 5000,
                'detail' => 'Item5 Description',
                'created_at' => '2019-06-08 10:25:26',
                'updated_at' => '2019-06-08 10:25:26',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Item6',
                'price' => 6000,
                'detail' => 'Item6 Description',
                'created_at' => '2019-06-08 17:22:40',
                'updated_at' => '2019-06-08 17:22:40',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Item7',
                'price' => 7000,
                'detail' => 'Item7 Description',
                'created_at' => '2019-06-08 17:23:38',
                'updated_at' => '2019-06-08 17:23:38',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Item8',
                'price' => 8000,
                'detail' => 'Item8 Description',
                'created_at' => '2019-06-08 17:23:57',
                'updated_at' => '2019-06-08 17:23:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Item9',
                'price' => 9000,
                'detail' => 'Item9 Description',
                'created_at' => '2019-06-08 17:24:16',
                'updated_at' => '2019-06-08 17:24:16',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Item10',
                'price' => 10000,
                'detail' => 'Item10 Description',
                'created_at' => '2019-06-08 17:24:33',
                'updated_at' => '2019-06-08 17:24:33',
            ),
        ));
        
        
    }
}