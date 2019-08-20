<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorySearch extends Model
{
	protected $fillable = ['category_id'];
	protected $table = 'category_clicks';

	public function category()
	{
		return $this->belongsTo('App\Category');
	}}
