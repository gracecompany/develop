<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{


	protected $fillable = ['username', 'email', 'password', 'isAdmin', 'last_login', 'first_name', 'last_name', 'slug'];

	/**
	  * @method userInfo
	  * @public
	  *@return \Illuminate\Database\Eloquent\Relations\HasOne
	  */
	public function userInfo()
	{
		return $this->hasOne(UserInfo::class);
	}


	/**
	  * @method orders
	  * @public
	  *@return \Illuminate\Database\Eloquent\Relations\HasMany
	  */
	public function orders()
	{
		return $this->hasMany(Order::class);
	}


	/**
	  * @method cart
	  * @public
	  *@return \Illuminate\Database\Eloquent\Relations\HasMany
	  */
	public function cart()
	{
		return $this->hasMany(Cart::class);
	}


	/**
	  * @method messages
	  * @public
	  *@return \Illuminate\Database\Eloquent\Relations\HasMany
	  */
	public function messages()
	{
		return $this->hasMany(Message::class);
	}
}
