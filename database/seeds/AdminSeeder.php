<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
       'name'=>'Emine',
       'email'=>'eminemetin9@gmail.com',
    //   'slug'=>Str::slug($admins),
   'password'=>bcrypt(102030),


         ]);
    }
}
