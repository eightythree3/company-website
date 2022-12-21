<?php

namespace App;

use Eloquent as Model;

/**
 * Class Contact
 * @package App\Models
 * @version September 29, 2020, 8:28 am UTC
 *
 * @property string $name
 * @property string $company
 * @property string $country
 * @property string $city
 * @property string $email
 * @property string $phone
 * @property string $message
 */
class Contact extends Model {

	public $fillable = [
		'name',
		'company',
		'country',
		'city',
		'email',
		'phone',
		'message',
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'id' => 'integer',
		'name' => 'string',
		'company' => 'string',
		'country' => 'string',
		'city' => 'string',
		'email' => 'string',
		'phone' => 'string',
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'name' => 'required|string',
		'company' => 'required|string',
		'country' => 'required|string',
		'city' => 'required|string',
		'email' => 'required|string',
		'phone' => 'required|string',
		'message' => 'required|string',
	];

}
