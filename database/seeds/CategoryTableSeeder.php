<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('categories')->insert([
             array('name'=>'True Lavender', 'description'=>'A collection of product made from Lavender','slug'=>'true-lavender','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Handmade', 'description'=>'A collection of handemade product made from Lavender like scented bag, flower bottle...','slug'=>'handmade','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Perfume', 'description'=>'A collection of perfume made from Lavender','slug'=>'perfume','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Combo', 'description'=>'A collection of combo made from Lavender and other','slug'=>'combo','created_at' => Carbon::now(),'updated_at' => Carbon::now()),
             array('name'=>'Other', 'description'=>'A collection of other exclude Lavender','slug'=>'other','created_at' => Carbon::now(),'updated_at' => Carbon::now())        
        ]);
    }
}
