<?php

namespace Tee\News\Widgets;

use View, Config;
use Tee\Page\Models\PageCategory;

class NewsBoxList {

    public function register(array $options)
    {
        $options = array_merge([
            'itemBoxClass' => 'itemBoxClass',
            'titleClass' => 'title',
            'descriptionClass' => 'description',
            'limit' => 6,
        ], $options);
        $category = PageCategory::where('type', '=', PageCategory::NEWS)->first();
        $pages = $category->localizedPages()
                    ->orderBy('created_at', 'DESC')
                    ->limit($options['limit'])
                    ->get();
        return View::make(
            'news::widgets.newsBoxList.list',
            compact('pages', 'options')
        );
    }

} 