<?php

namespace DcatAdminExt\TinymceMathjax\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class TinymceMathjaxController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('dcat-admin-ext.tinymce-mathjax::index'));
    }
}