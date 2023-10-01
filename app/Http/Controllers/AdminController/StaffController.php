<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Crypt;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function staff()
    {
        $staffs = Staff::get();
        return view('admin.pages.staff', [
            'staffs' => $staffs,

        ]);
    }

    public function create_staffs()
    {
        return view('admin.pages.components.create_staff');
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


        //dd($request->all());
        $validatedData = new Staff();
        $validatedData->Fname = $request->input('Fname');
        $validatedData->Lname = $request->input('Lname');
        $validatedData->Mname = $request->input('Mname');
        $validatedData->email = $request->input('email');
        $validatedData->contact = $request->input('contact');
        $validatedData->location = $request->input('location');
        $validatedData->job_title = $request->input('job_title');
        $validatedData->job_position = $request->input('job_position');
        $validatedData->description = $request->input('description');


        if ($validatedData->save()) {
            $staffs = Staff::get();
            return view('admin.pages.staff', [
                'staffs' => $staffs,

            ]);
        }

        return back()->with('error', 'Failed to save  staff.');
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
        $encryptedId = Crypt::encryptString($id);

        $staffs = Staff::get();
        return view('admin.pages.staff', compact('staffs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        // $id = Crypt::decryptString($encryptedId);
        $validatedData = Staff::find($id);
        $validatedData->Fname = $request->input('Fname');
        $validatedData->Lname = $request->input('Lname');
        $validatedData->Mname = $request->input('Mname');
        $validatedData->email = $request->input('email');
        $validatedData->contact = $request->input('contact');
        $validatedData->location = $request->input('location');
        $validatedData->job_title = $request->input('job_title');
        $validatedData->job_position = $request->input('job_position');
        $validatedData->description = $request->input('description');

        if ($validatedData->save()) {
            $staffs = Staff::get();
            return view('admin.pages.staff', [
                'staffs' => $staffs,

            ]);
        }

        return back()->with('error', 'Failed to update staff record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        if (!$staff) {
            return back()->with('error', 'Staff record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $staff->delete();
        $staffs = Staff::get();
        return view('admin.pages.staff', [
            'staffs' => $staffs,
        ])->with('success', 'Staff record deleted successfully.');
    }
}
