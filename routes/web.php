<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//one to one insert data
Route::get('/insert',function (){
    $user = User::findOrFail(1);
    $address = new Address(['name'=>'thisara']);
    $user->address()->save($address);
});

//one to one update data
Route::get('/update',function (){
    $address = Address::whereUserId(1)->first();
    $address->name = "Updated new address";

    $address->save();

});

//one to one read data
Route::get('/read',function (){
    $user = User::findOrFail(1);
    echo $user->address->name;

});

//one to one delete data
Route::get('/delete',function (){
    $user = User::findOrFail(1);
    $user->address()->delete();
    return "done";
});


