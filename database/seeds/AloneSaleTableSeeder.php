<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AloneSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alone_sales')->insert([
             array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>1,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>3,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>5,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>7,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>2,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>8,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
            array('rate'=>10, 'began_at'=>'2016-10-10','ended_at'=>'2016-12-12','product_id'=>10,'created_at' => Carbon::now(),'updated_at' => Carbon::now()),
        ]);
    }
}
