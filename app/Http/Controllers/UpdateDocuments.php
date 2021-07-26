<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateDocuments extends Controller
{
    //get data
    public function getdata(){
        return view('user.update_document');
    }

    //Update data
    public function update(Request $request, User $user){
        $request->validate([
            'document' => 'required | mimes:jpg,docx,pdf',
            'document_name' => 'required'
        ]);

        //upload document
        if($request->hasFile('document')){
            
            //get client original name
            $originalName = $request->document->getClientOriginalName();

            //get name without extension
            $filename = pathinfo($originalName, PATHINFO_FILENAME);

            //get Extension
            $extension = $request->document->getClientOriginalExtension();

            //File name to store
            $filenameToStore = $user->username.'_'.$request->document_name.'.'.$extension;

             //Store Document
             $request->document->storeAs('user_documents', $filenameToStore, 'public');

        }

        //Store in database using relationship
        $document = $user->documents()->create([
            'document' => $filenameToStore,
            'document_name' => $request->document_name
        ]);


        if($document){
             //return redirect
            return redirect()->back()->with('success', 'Document Upload Successful');
        }
      
    }

    //delete Document
    public function delete($id){
        //find document
        $document = Document::find($id);

        //delete from directory
        Storage::delete('public/user_documents/'.$document->document);

        //delete from database
        $document->delete();
        
        //redirect
        return redirect()->back()->with('success', 'Document Deleted Successfully');
        

    }
}
