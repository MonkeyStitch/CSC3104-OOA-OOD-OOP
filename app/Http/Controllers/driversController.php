<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Trunks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class driversController extends Controller
{


    public function __construct()
    {
        $this->middleware('owner');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drivers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trunks = Trunks::all()->sortByDesc('trunk_id');
        return view('drivers.create', compact('trunks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $profile = new Profile();

        $profile->user_id = Auth::id();
        $profile->first_name = $request->get('first_name');
        $profile->last_name = $request->get('last_name');
        $profile->address = $request->get('address');
        $profile->tel = $request->get('tel');
        $profile->birthday = $request->get('birthday');
        $profile->images = '';

        $profile->save();
        if ($request->hasFile('picture')) {
            $profile->image = $request->file('picture')->store('public/images/drivers');

        }

        if ($profile->update()) {
            Session::flash('success', 'Profile updated.');
        }

        return $request->all();
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
