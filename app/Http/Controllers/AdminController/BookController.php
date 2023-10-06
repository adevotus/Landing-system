<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function book()
    {
        $books = Book::get();
        $book= Book::get();
        return view('admin.pages.blog', [
            'books' => $books,
            'book'=> $book

        ]);
    }
    public function create_book()
    {
        return view('admin.pages.components.create_blog');
    }

    public function IndividualBook($id){

        $book = Book::find($id);
        $books = Book::get();
        
        return view('admin.pages.components.IndividualBook', [
            'book' => $book,
            'books' => $books
        ]);
    }

    public function store(Request $request)
    {


        //dd($request->all());
        $validatedData = new Book();
        $validatedData->title = $request->input('title');
        $validatedData->date = $request->input('date');
        $validatedData->initalDescr = $request->input('initalDescr');
        $validatedData->amount = $request->input('amount');
        $validatedData->slug = Str::slug($validatedData->title);
        if ($request->hasFile('Covermage')) {
            $Covermage = $request->file('Covermage');
            $CovermageName = time() . '.' . $Covermage->getClientOriginalExtension();
            $Covermage->move(public_path('public/images'), $CovermageName);
            $validatedData->Covermage = $CovermageName;
            // Delete the old profile image
            if (file_exists(public_path('images/' . $validatedData->Covermage))) {
                unlink(public_path('images/' . $validatedData->Covermage));
            }
        }
        if ($validatedData->save()) {
            $books = Book::get();
            return view('admin.pages.blog', [
                'books' => $books,

            ]);
        }

        return back()->with('error', 'Failed to save .');
    }
  
    public function edit($id)
    {
        $encryptedId = Crypt::encryptString($id);

        $books = Book::get();
        return view('admin.pages.blog', compact('books'));
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
        // $id = Crypt::decryptString($encryptedId);
        $validatedData = Book::find($id);
        $validatedData->title = $request->input('title');
        $validatedData->date = $request->input('date');
        $validatedData->initalDescr = $request->input('initalDescr');
        $validatedData->amount = $request->input('amount');
        $validatedData->slug = Str::slug($validatedData->title);
        if ($request->hasFile('Covermage')) {
            $Covermage = $request->file('Covermage');
            $CovermageName = time() . '.' . $Covermage->getClientOriginalExtension();
            $Covermage->move(public_path('public/images'), $CovermageName);
            $validatedData->Covermage = $CovermageName;
            // Delete the old profile image
            if (file_exists(public_path('images/' . $validatedData->Covermage))) {
                unlink(public_path('images/' . $validatedData->Covermage));
            }
        }

        if ($validatedData->save()) {
            $books = Book::get();
            return view('admin.pages.blog', [
                'books' => $books,

            ]);
        }

        return back()->with('error', 'Failed to update  record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return back()->with('error', ' record not found.');
        }

        $book->delete();
        $books = Book::get();
        return view('admin.pages.blog', [
            'books' => $books,
        ])->with('success', ' record deleted successfully.');
    }
}
