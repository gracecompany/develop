<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {
	protected $table = "userinfo";

	protected $fillable = ['user_id', 'photo', 'address', 'city', 'state', 'zipcode', 'country', 'about_me', 'website', 'company', 'gender', 'phone',
		'mobile', 'work', 'other', 'dob', 'skypeid', 'githubid', 'twitter_username', 'instagram_username', 'facebook_username', 'facebook_url', 'linked_in_url',
		'google_plus_url', 'slug', 'display_name'];

	/**
	 * @method user
	 * @public
	 * @return @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo(User::class);
	}
}
