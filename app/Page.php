<?php

namespace App;

//use Eloquent as Model;

/**
 * Class Page
 * @package App\Models
 * @version September 29, 2020, 5:30 am UTC
 *
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $main_image
 * @property string $keywords
 * @property string $background_color
 * @property integer $in_home
 * @property string $animation_image
 */

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Page extends Model {
//    use HasTranslations;
//    public $translatable = ['title', 'short_description','description'];
	public $fillable = [
		'title',
		'short_description',
		'description',
		'main_image',
		'keywords',
		'slug',
		'type',
		'background_color',
		'ordering',
		'in_home',
		'animation_image',
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'id' => 'integer',
		'title' => 'string',
		'background_color' => 'string',
		'in_home' => 'integer',
		'animation_image' => 'string',
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'title' => 'required|string',
		'short_description' => 'sometimes|nullable|string',
		'description' => 'required|string',
		'main_image' => 'sometimes|nullable|image',
		'keywords' => 'required|string',
		'background_color' => 'sometimes|nullable|string',
		'type' => 'required|in:page,service',
		'slug' => 'required|string',
		'in_home' => 'required|integer',
		'animation_image' => 'sometimes|nullable|string',
	];


	public function getMainImageAttribute($value) {
		return ($value) ? \Storage::url("app/public/".$value) : null;
	}

}
