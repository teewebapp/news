<?php

namespace Tee\News\Seeds;

use Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(__NAMESPACE__.'\\PageCategoryTableSeeder');
    }

}