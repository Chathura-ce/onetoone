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



