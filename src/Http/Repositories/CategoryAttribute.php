<?php

namespace Dcat\Admin\Extension\DcatCategoryAttr\Http\Repositories;

use Dcat\Admin\Extension\DcatCategoryAttr\Models\CategoryAttribute as CategoryAttributeModel;
use Dcat\Admin\Repositories\EloquentRepository;

class CategoryAttribute extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = CategoryAttributeModel::class;
}
