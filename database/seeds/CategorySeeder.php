<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'HTML', 'slug' => 'html']
        ];

        //Masukkan data ke database
        DB::table('categories')->insert($category);
    }
}
