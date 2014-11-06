<?php

namespace Tee\News\Widgets;

use View, Config;
use Tee\Page\Models\PageCategory;

class NewsBoxList {

    public function register(array $options)
    {
        $category = PageCategory::where('type', '=', PageCategory::NEWS)->first();
        $pages = $category->localizedPages()->get();
        return View::make(
            'news::widgets.newsBoxList.list',
            compact('pages', 'options')
        );
    }

} 