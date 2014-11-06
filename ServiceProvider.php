<?php

namespace Tee\News;

use Tee\News\Widgets\NewsBoxList;
use Tee\System\Widget;
use Event;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {
        // registra os widgets
        Widget::register(
            'newsBoxList',
            __NAMESPACE__.'\\Widgets\\NewsBoxList'
        );

        Event::listen('admin::menu.load', function($menu) {
            $format = '<img src="%s" class="fa" />&nbsp;&nbsp;<span>%s</span>';
            $menu->add(
                sprintf($format, moduleAsset('news', 'images/icon_news.png'), 'Notícias'),
                route('admin.news.index')
            );
        });
    }
}
