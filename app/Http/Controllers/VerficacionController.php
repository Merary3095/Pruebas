<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VerficacionController extends Controller
{
	function verificar(request $request)
	{
		if($request->get('email'))
		{
			$email = $request->get('email');
			$datos =DB::table("usuarios")->where('email','LIKE',"%$email%")->count();
			if ($datos > 0) {
				echo "not_unique";
			}
			else
			{
				echo "unique";
			}
		}
	}
}
