<?php

namespace App\Vendor;

use Illuminate\Database\Eloquent\Model;
use App\Support\Filterable;

class Category extends Model
{
	use Filterable;

    protected $table = 'vendor_categories';
    protected $fillable = ['name'];
    protected $sortable = [
    	'id', 'name', 'created_at'
    ];

    protected $searchable = ['name'];

    protected $allowedFilters = [];
}
