<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag=['bebek','dekor','örgü','dantel','nakış','dikiş',
        'el yapımı','maket','takı','kırlet','önlük','tasarım','kumaş','makas','duvar','nakış','fincan'];
        foreach($tag as $tags){
            DB::table('tag')->insert([
                'name'=>$tags

            ]);
    }
}
}