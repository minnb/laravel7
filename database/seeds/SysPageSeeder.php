<?php

use Illuminate\Database\Seeder;

class SysPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('sys_pages')->insert([
            'id' => 1,
            'category' => "HOMEPAGE",
            'name' => "HOMEPAGE",
            'alias' => "HOMEPAGE",
            'thumbnail' => "",
            'link' => "",
            'description' => "",
            'keyword' => "",
            'options' => "[]",
            'blocked' => 0,
        ]);

    }
}
