<?php

namespace App\Http\Controllers\Admin;

use App\Models\Units;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller
{
   public function unitindex()
    {
        $courseUnit = Units::all();
    	return view('admin.units')
            ->with('courseUnit',$courseUnit);
    }

    public function unitstore(Request $request)
    {
    	$courseUnit = new Units;

    	
        $courseUnit->course_code = $request->input('course_code');
    	$courseUnit->course_title = $request->input('course_title');
    	$courseUnit->course_unit = $request->input('course_unit');

    	$courseUnit->save();

    	return redirect('/units')->with('status', 'Data Added for Units');
    }

    public function unitedit($id)
    {
        $courseUnit = Units::findOrFail($id);
        return view('admin.units.edit-units')
            ->with('courseUnit',$courseUnit)
            ;
    }

    public function unitupdate(Request $request, $id)
    {
        $courseUnit = Units::findOrFail($id);
        $courseUnit->course_title = $request->input('course_title');
        $courseUnit->course_code = $request->input('course_code');
        $courseUnit->course_unit = $request->input('course_unit');

        $courseUnit->update();

        return redirect('units')->with('status','Data has been updated');
    }
}
