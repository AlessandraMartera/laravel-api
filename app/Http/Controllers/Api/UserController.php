<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Tecnology;

class UserController extends Controller
{
    public function index(){
        $projects = Project :: paginate(5);
        return response()->json([
            'result' => $projects
        ]);
    }
}
