<?php

namespace App\Http\Controllers\baconheo\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\baconheo\Access;
class AccessController extends Controller
{
 	public function index()
    {
          return view('baconheo.access.index', ['accesses' => Access::all()->sortByDesc('id')]);
    }
}
