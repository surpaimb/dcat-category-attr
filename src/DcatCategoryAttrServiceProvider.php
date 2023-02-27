<?php

namespace Dcat\Admin\Extension\DcatCategoryAttr;

use Dcat\Admin\Admin;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;

class DcatCategoryAttrServiceProvider extends ServiceProvider
{
    protected $js = [
        'js/index.js',
    ];
    protected $css = [
        'css/index.css',
    ];

    protected $menu = [
        [
            'title' => '属性管理',
            'uri' => 'category-attribute'
        ]
    ];

    public function init()
    {
        parent::init();

        if ($views = $this->getViewPath()) {
            $this->loadViewsFrom($views, 'dcat-category-attr');
        }

        Admin::booting(function () {
            Form::extend('catattr', CategoryAttrField::class);
        });
    }

    public function settingForm(): Setting
    {
        return new Setting($this);
    }
}
