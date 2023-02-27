<?php

use Dcat\Admin\Extension\DcatCategoryAttr\Http\Controllers;
use Illuminate\Support\Facades\Route;

// 属性
Route::resource('category-attribute', Controllers\CategoryAttributeController::class)->except('show');
// 图片上传
Route::post('category-attr-image-upload', [Controllers\UploadController::class, 'store']);
Route::post('category-attr-image-remove', [Controllers\UploadController::class, 'delete']);
