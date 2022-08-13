<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $key = "";
        $key .= $request->input('birth_year') ? '-year-'.$request->input('birth_year') : '';
        $key .= $request->input('birth_month') ? '-month-'.$request->input('birth_month') : '';
        $users = [];
        if (isset($request->birth_year) || isset($request->birth_month)) {
            $users = Cache::remember('users' . $key, 60, function() use($request) {
                return User::where(function($query) use($request) {
                    if (isset($request->birth_year)) {
                        $query->whereYear('birth_date', $request->birth_year);  
                    }
                    if (isset($request->birth_month)) {
                        $query->whereMonth('birth_date', $request->birth_month);
                    }                           
                })       
                ->get();
            });
            $page = $request->page;
            $perPage = 20;
            
            $users = new LengthAwarePaginator(
                $users->forPage($page, $perPage), $users->count(), $perPage, $page
            );
            $users->withPath('/users');            
        }                       
        return view('users', compact('users'));
    }
}
