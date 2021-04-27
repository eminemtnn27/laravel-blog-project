<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$slug=Str::slug('Laravel 5 Framework','-');
        $categories=['Dekoratif Boyama','Kağıt İşleri','Geri Dönüşüm/Kendin Yap','Keçe','Fimo','Özel Günler','Eğlencelik','Diğer Teknikler'];
        foreach($categories as $category) {
        DB::table('categories')->insert([
         'name'=>$category,
         'slug'=>Str::slug($category,"-"),
         'created_at'=>now(),
         'updated_at'=>now()

           ]);
    }
}
}
