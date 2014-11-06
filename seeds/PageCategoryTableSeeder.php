<?php

namespace Tee\News\Seeds;

use Tee\Page\Models\PageCategory;
use Seeder, DB, DateTime, Eloquent;

class PageCategoryTableSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();
        PageCategory::create(array(
            'name' => 'Notícias',
            'type' => PageCategory::NEWS,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
    
}