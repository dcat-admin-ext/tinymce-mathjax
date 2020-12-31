<?php

use DcatAdminExt\TinymceMathjax\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('tinymce-mathjax', Controllers\TinymceMathjaxController::class.'@index');