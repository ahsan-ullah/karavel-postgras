<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->input('page') : 1;
        $key = 'page-'.$page;
        $key .= $request->has('birth_year') ? '-year-'.$request->input('birth_year') : '';
        $key .= $request->has('birth_month') ? '-month-'.$request->input('birth_month') : '';
        $users = Cache::remember('users-' . $key, 60, function(){
            $whereClause = request()->all();
            unset($whereClause['page']);
            // $birth_month = [];
            // if ($whereClause['birth_month']) {
            //     $birth_month = ['birth_date' => $whereClause['birth_month']];
            // }
            // $birth_year = [];
            // if ($whereClause['birth_year']) {
            //     $birth_year = ['birth_date' => $whereClause['birth_year']];
            // }
            return User::whereYear('birth_date', 2000)
            // ->whereMonth($birth_month)
            ->paginate(10);
        });

        return view('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
