<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('products')->insert([
          	//Seed for Lavender category
             array('name'=>'Lavender Seed','slug'=>'lavender-seed', 'description'=>'Seed of Lavender','price'=>12000,'unit'=> '100gr', 'url_image'=>'frontend/images/product/lavender-seed.jpg','category_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Lavender Bud','slug'=>'lavender-bud', 'description'=>'Bud of Lavender','price'=>120000,'unit'=> 'bug', 'url_image'=>'frontend/images/product/true lavender.jpg','category_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'WholeSale/Retail','slug'=>'wholesale-retail', 'description'=>'Retail Lavender','price'=>15000,'unit'=> 'flower', 'url_image'=>'frontend/images/product/wholesale 1.jpg','category_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             //Seed for Handmade cateogry
              array('name'=>'Scented Bags','slug'=>'scented-bags', 'description'=>'Scenteds Bag Lavender','price'=>60000,'unit'=> 'bag', 'url_image'=>'frontend/images/product/scented bag 1.jpg','category_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Flower Bottle','slug'=>'flower-bottle', 'description'=>'Bottle for Flower Arrangement','price'=>60000,'unit'=> 'bottle', 'url_image'=>'frontend/images/product/flower-bottle 2.jpg','category_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             //Seed for Perfume
              array('name'=>'Small Perfume','slug'=>'small-perfume', 'description'=>'A smal Perfume ','price'=>400000,'unit'=> 'bottle', 'url_image'=>'frontend/images/product/perfume 1.jpg','category_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Large Perfume','slug'=>'large-perfume', 'description'=>'A large perfume bottle ','price'=>800000,'unit'=> 'bottle', 'url_image'=>'frontend/images/product/true lavender.jpg','category_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Pure Oil','slug'=>'pure-oil', 'description'=>'Pure Oil','price'=>250000,'unit'=> '1 bottle', 'url_image'=>'frontend/images/product/perfume 4.jpg','category_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              //Seed for other
              array('name'=>'Snowy','slug'=>'snowy', 'description'=>'A smal Perfume ','price'=>200000,'unit'=> 'bud', 'url_image'=>'frontend/images/product/snowy2.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Baby Bloom','slug'=>'baby-bloom', 'description'=>'A large perfume bottle ','price'=>200000,'unit'=> 'bud', 'url_image'=>'frontend/images/product/baby bloom 2.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Baby Breath','slug'=>'baby-breath', 'description'=>'Pure Oil','price'=>250000,'unit'=> '1 bud', 'url_image'=>'frontend/images/product/baby bloom 1.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Barkey','slug'=>'barkey', 'description'=>'A large perfume bottle ','price'=>200000,'unit'=> 'bud', 'url_image'=>'frontend/images/product/baby bloom 2.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Rose','slug'=>'rose', 'description'=>'Pure Oil','price'=>250000,'unit'=> '1 bud', 'url_image'=>'frontend/images/product/salem.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Salem','slug'=>'salem', 'description'=>'A smal Perfume ','price'=>400000,'unit'=> 'bud', 'url_image'=>'frontend/images/product/salem.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
              array('name'=>'Hyodrangas','slug'=>'hyodrangas', 'description'=>'A large perfume bottle ','price'=>100000,'unit'=> 'bud', 'url_image'=>'frontend/images/product/salem.jpg','category_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             
            
        ]);
    }
}
