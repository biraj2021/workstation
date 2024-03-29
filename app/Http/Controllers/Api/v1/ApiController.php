<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResources;

class ApiController extends Controller
{	
    public function profile(Request $request){
    	//return UserResources::collection(User::find($request->user()));
    	return UserResources::collection($this->find($request->user()));
    }
}
