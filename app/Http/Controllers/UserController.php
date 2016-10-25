<?php

namespace app\Http\Controllers;

use \Ecommerce\helperFunctions;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Users\EloquentUser;
use App\Models\User;
use App\Models\UserInfo;
use File;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct() {
		$this->middleware('isAdmin', ['only' => [
			'store',
			'delete',
			'edit',
		]]);
		$this->middleware('auth', ['only' => [
			'dashboard',
			'editAccount',
			'editInfo',
		]]);
	}

	public function dashboard() {
		 $user = Sentinel::getUser();
		//$user = User::where('user_id', Sentinel::getUser()->id)->first();
		helperFunctions::getCartInfo($cart, $total);
		//return view('frontend.my-account', compact('total', 'cart', 'user'));
	}

	/**
	 * @param Request $request
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'username' => 'required|unique:users',
			'password' => 'required|confirmed',
			'email' => 'required',
		]);
		$user = User::create([
			'username' => $request->username,
			'password' => bcrypt($request->password),
			'email' => $request->email,
		]);
		$user->isAdmin = $request->isAdmin;
		$user->save();
		File::makeDirectory(public_path() . "/content/" . $user->username);
		File::makeDirectory(public_path() . "/content/" . $user->username . "/photos/");
		$dest = public_path() . "/content/" . $user->username . "/photos/profile.png";
		$file = public_path() . "/img/profile.png";
		File::copy($file, $dest);
		UserInfo::create(["user_id" => $user->id, "photo" => "/content/" . $user->username . "/photos/profile.png"]);
		return \Redirect('/admin/users')->with([
			'flash_message' => 'User Successfully Added !',
		]);
	}

//     Route::get('/photo/{size}/{name}', function($size = NULL, $name = NULL){
	//     if(!is_null($size) &amp;&amp; !is_null($name)){
	//         $size = explode('x', $size);
	//         $cache_image = Image::cache(function($image) use($size, $name){
	//            return $image-&gt;make(url('/photos/'.$name))-&gt;resize($size[0], $size[1]);
	//         }, 10); // cache for 10 minutes

//         return Response::make($cache_image, 200, ['Content-Type' =&gt; 'image']);
	//     } else {
	//         abort(404);
	//     }
	// });

	/**
	 * @param $id
	 */
	public function delete($id) {
		$user = User::find($id);
		File::deleteDirectory(public_path() . "/content/" . $user->username);
		$user->delete();
		return \Redirect('/admin/users')->with([
			'flash_message' => 'User has been Successfully removed',
			'flash-warning' => true,
		]);
	}

	/**
	 * @param Request $request
	 * @param $id
	 */
	public function edit(Request $request, $id) {
		$user = User::find($id);
		$user->isAdmin = $request->isAdmin;
		$user->update([
			'username' => $request->username,
			'email' => $request->email,
		]);

		$user->userInfo()->update([
			'photo' => $request->photo,
			'address' => $request->address,
			'city' => $request->city,
			'state' => $request->state,
			'zipcode' => $request->zipcode,
			'country' => $request->country,
			'about_me' => $request->about_me,
			'website' => $request->website,
			'company' => $request->company,
			'gender' => $request->gender,
			'phone' => $request->phone,
			'mobile' => $request->mobile,
			'work' => $request->work,
			'other' => $request->other,
			'dob' => $request->dob,
			'skypeid' => $request->skypeid,
			'githubid' => $request->githubid,
			'twitter_username' => $request->twitter_username,
			'instagram_username' => $request->instagram_username,
			'facebook_username' => $request->facebook_username,
			'facebook_url' => $request->facebook_url,
			'linked_in_url' => $request->linked_in_url,
			'google_plus_url' => $request->google_plus_url,
			'slug' => $request->slu,
			'display_name' => $request->display_name,
		]);
		return \Redirect()->back()->with([
			'flash_message' => 'User Successfully Edited',
		]);
	}

	/**
	 * @param Request $request
	 */
	public function editAccount(Request $request) {
		$user = Sentinel::getUser();
		$this->validate($request, [
			'photo' => 'image',
			'new_password' => 'confirmed',
		]);
		if (\Hash::check($request->old_password, $user->password)) {
			Sentinel::getUser()->update(['password' => bcrypt($request->new_password)]);
		}
		if ($request->hasFile('photo')) {
			$dest = 'content/' . $user->username . "/photos/";
			File::delete(public_path() . $user->userInfo->photo);
			$name = str_random(11) . "_" . $request->file('photo')->getClientOriginalName();
			$request->file('photo')->move($dest, $name);

			UserInfo::where('user_id', $user->id)->update(['photo' => '/' . $dest . $name]);
		}
		$user->update([
			'email' => $request->email,
		]);
		return \Redirect()->back()->with([
			'flash_message' => 'Successfully saved !',
		]);
	}

	/**
	 * @param Request $request
	 */
	public function editInfo(Request $request) {
		UserInfo::where('user_id', Sentinel::getUser()->id)->update($request->except('_token'));
		return \Redirect()->back()->with([
			'flash_message' => 'Successfully saved !',
		]);
	}
}
