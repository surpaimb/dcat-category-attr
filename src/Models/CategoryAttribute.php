<?php

namespace Dcat\Admin\Extension\DcatCategoryAttr\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class CategoryAttribute extends Model
{
    use HasDateTimeFormatter;

    public $table = 'category_attrs';

    protected $casts = [
        'attr_value' => 'json'
    ];
}
