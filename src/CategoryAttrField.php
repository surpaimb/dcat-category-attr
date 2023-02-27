<?php

namespace Dcat\Admin\Extension\DcatCategoryAttr;

use Dcat\Admin\Admin;
use Dcat\Admin\Extension\DcatCategoryAttr\Models\CategoryAttribute;
use Dcat\Admin\Form\Field;

class CategoryAttrField extends Field
{
    protected $view = 'dcat-category-attr::index';

    public function render()
    {
        Admin::js('vendor/dcat-admin-extensions/surpaimb/dcat-category-attr/js/index.js');
        Admin::css('vendor/dcat-admin-extensions/surpaimb/dcat-category-attr/css/index.css');

        $uploadUrl = DcatCategoryAttrServiceProvider::setting('attr_img_upload_url') ?: '/admin/category-attr-image-upload';
        $deleteUrl = DcatCategoryAttrServiceProvider::setting('attr_img_remove_url') ?: '/admin/category-attr-image-remove';
        $CategoryAttributes = CategoryAttribute::orderBy('sort', 'desc')->get();

        $this->script = <<< EOF
        window.DemoSku = new SurpaimbCategoryAttribute('{$this->getElementClassSelector()}');
EOF;
        $this->addVariables(compact('CategoryAttributes', 'uploadUrl', 'deleteUrl'));

        return parent::render();
    }

    /**
     * 添加扩展列.
     *
     * @param  array  $column
     * @return $this
     */
    public function addColumn(array $column = []): self
    {
        $this->addVariables(['extra_column' => json_encode($column)]);

        return $this;
    }
}
