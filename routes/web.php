<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogicController;
 
Route::controller(LogicController::class)->group(function () {
    Route::get('/', 'index');
});

Route::get('/bagian-satu', function() {
	$list = [
		[
			"nik" => 1022334,
			"name" => "Hilda",
			"group" => 1
		],
		[
			"nik" => 1212343,
			"name" => "Nana",
			"group" => 3
		],
		[
			"nik" => 1098668,
			"name" => "Roger",
			"group" => 1
		],
		[
			"nik" => 1152671,
			"name" => "Kimmy",
			"group" => 2
		],
		[
			"nik" => 1269378,
			"name" => "Angela",
			"group" => 3
		],
		[
			"nik" => 1166378,
			"name" => "Natan",
			"group" => 2
		],
		[
			"nik" => 1244567,
			"name" => "Camilla",
			"group" => 3
		],
	];

	return view('answer-part-one')->with(compact('list'));
});
