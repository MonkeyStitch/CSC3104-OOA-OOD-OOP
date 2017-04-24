<?php

namespace App\Http\Controllers;

use App\LicenseDrivers;
use App\Trunks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TrunkController extends Controller
{

    public function __construct()
    {
        $this->middleware('owner');
    }

    public function index()
    {
        $trunk = Trunks::all()->sortByDesc('trunk_id');

        return view('trunk.index', compact('trunk'));
    }


    public function create()
    {
        return view('trunk.create');
    }


    public function store(Request $request)
    {
//        return $request->all();
        $trunk = new Trunks();

        $trunk->trunk_name = $request->get('trunk_name');
        $trunk->category_trunk = $request->get('category_trunk');
        $trunk->freight_weight = $request->get('freight_weight');
        $trunk->image = '';
        $trunk->join_in = $request->get('joined');

        $trunk->save();

        if ($request->hasFile('picture')) {
            $trunk->image = $request->file('picture')->store('public/images/trunk');

        }

        $license = new LicenseDrivers();
        $license->user_id = $request->get('user_id');
        $license->type = $request->get('optionsRadiosInlineType');
        $license->category = $request->get('optionsRadiosInlineCategories');
        $license->issue = $request->get('dateIssue');
        $license->expiry = $request->get('dateExpiry');
        $license->save();



        if ($trunk->update()) {
            Session::flash('success', 'Profile updated.');
        }
        return redirect('managements/trunk');
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        $trunk = Trunks::find($id);

        if ($trunk->delete()) {
            Session::flash('success', 'ลบข้อมูลเสร็จสิ้น');
        }

        return redirect()->back();
    }

}
