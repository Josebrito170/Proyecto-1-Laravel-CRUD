<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function countries()
	{
		return response()->json([
			've'=> [
				'name' => 'Venezuela',
				'codigo' => '+58',
				'image' => 'https://www.venexula.com/image.png'
			]
		]);
	}
}