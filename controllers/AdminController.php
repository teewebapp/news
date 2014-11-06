<?php

namespace Tee\News\Controllers;

use Tee\Page\Models\PageCategory;

use Tee\System\Breadcrumbs;

class AdminController extends \Tee\Page\Controllers\AdminController {
    public $resourceTitle = 'Notícias';
    public $resourceName = 'news';
    //public $modelClass = 'Tee\\Page\\Models\\Page';
    public $moduleName = 'page';

    public function getCategory() {
        return PageCategory::where('type', '=', PageCategory::NEWS)->first();
    }
}
