<?php

namespace App\Http\Controllers\Api\baconheo;

use App\Http\Controllers\Controller;
use App\Models\baconheo\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function index()
    {
        return Access::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Access|\Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        if($request->has('site')) $site = $request->site;
        else $site ="baconheo"
        return Access::create(["site"=>$site,"ip"=>$request->ip()]);
    }

    /**
     * Display the specified resource.
     *
     * @param Access $access
     * @return Access
     */
    public function show(Access $access)
    {
        return $access;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Access $access
     * @return bool
     */
    public function update(Request $request, Access $access)
    {
        return $access->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Access $access
     * @throws \Exception
     */
    public function destroy(Access $access)
    {
        $access->delete();
    }
}
