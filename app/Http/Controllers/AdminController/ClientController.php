<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client()
    {
        $clients = Client::get();
        return view('admin.pages.client', [
            'clients' => $clients,

        ]);
    }
    
    public function index()
    {
        //
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
             $validatedData = new Client();
             $validatedData->clientName = $request->input('clientName');
             $validatedData->webLink = $request->input('webLink');
             $validatedData->description = $request->input('description');
             if ($request->hasFile('clientLogo')) {
                 $clientLogo = $request->file('clientLogo');
                 $clientLogoName = time() . '.' . $clientLogo->getClientOriginalExtension();
                 $clientLogo->move(public_path('public/images'), $clientLogoName);
                 $validatedData->clientLogo = $clientLogoName;
                 // Delete the old profile image
                 if (file_exists(public_path('images/' . $validatedData->clientLogo))) {
                     unlink(public_path('images/' . $validatedData->clientLogo));
                 }
             }
     
     
             if ($validatedData->save()) {
                 $clients = Client::get();
                 return view('admin.pages.client', [
                     'clients' => $clients,
     
                 ]);
             }
     
             return back()->with('error', 'Failed to save  client.');
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

        $clients = Client::get();
        return view('admin.pages.client', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$encryptedId)
    {
        $id = Crypt::decryptString($encryptedId);
        $validatedData = Client::find($id);
        $validatedData->clientName = $request->input('clientName');
        $validatedData->webLink = $request->input('webLink');
        $validatedData->description = $request->input('description');
        if ($request->hasFile('clientLogo')) {
            $clientLogo = $request->file('clientLogo');
            $clientLogoName = time() . '.' . $clientLogo->getClientOriginalExtension();
            $clientLogo->move(public_path('public/images'), $clientLogoName);
            $validatedData->blogImage = $clientLogoName;
            // Delete the old profile image
            if (file_exists(public_path('images/' . $validatedData->clientLogo))) {
                unlink(public_path('images/' . $validatedData->clientLogo));
            }
        }


        
        if ($validatedData->save()) {
            $clients = Client::get();
            return view('admin.pages.client', [
                'clients' => $clients,

            ]);
        }
        return back()->with('error', 'Failed to update client record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = Client::find($id);
        if (!$clients) {
            return back()->with('error', 'blog record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $clients->delete();
        $clients = Client::get();
        return view('admin.pages.client', [
            'clients' => $clients,
        ])->with('success', 'client record deleted successfully.');
    }
    }

