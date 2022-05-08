<?php

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/v1/books', function() {
    return Book::all();
});

Route::get('api/v1/members', function() {
    return User::where("role", "=", "member")->get();
});

Route::get('api/v1/borrows', function() {
    return Borrow::all();
});

Route::get('api/v1/borrows/user/{user_id}', function($user_id){
    return Borrow::where("member_id", "=", $user_id)->get();
});

Route::post('api/v1/login', function(Request $request) {
    $data = $request->all();
    $email = $data["email"];
    $user = User::where('email', $email)->first();
    $validCredentials = Hash::check($request['password'], $user->getAuthPassword());

    if ($validCredentials) {
        return $user;
    }
});

Route::post('api/v1/borrows/store', function(Request $request) {
    $data = $request->all();
    $return_date = Carbon\Carbon::now()->addDays(7);
    Borrow::create([
        "member_id" => $data["member_id"],
        "book_id" => $data["book_id"],
        'return_date' => $return_date,
    ]);
    return "success";
});

