<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NoteController extends Controller
{
    public function FormNote(){
        return view('.notes.write');
    }

    // to push the note
    public function PushNote(Request $request){
        $validation = $request->validate([
            'subject' => 'required|string',
            'notecontent' => 'required|string',
            'protectnote' => 'required|string|in:YES,NO'
        ]);

        // authorkey is a key to edit the note!
        $primaryKey = rand(0, 999999); // generate from 0 -> 999999
        $authorkey = rand(0, 99999);

        // if the protectnote is activated, then we shall generate a password!
        if($request->protectnote == "YES")
            $password = rand(0, 99999);
        else
            $password = null;

        $notes = Notes::create([
            'id' => $primaryKey,
            'subject' => $request->subject,
            'content' => $request->notecontent,
            'authorkey' => hash('md5', $authorkey),
            'password' => ($password != null) ? hash('md5', $password) : null,
            'NoteStatus' => 'active' // active by default
        ]);

        // after pushing, we show the data!
        return view('.notes.result', [
            'subject' => $request->subject,
            'content' => $request->notecontent,
            'authorkey' => $authorkey,
            'password' => $password,
            'host' => $request->getHttpHost(),
            'id' => $primaryKey
        ]);
    }

    // to show the note
    public function ShowNote(Request $request, $id){
        $noteData = Notes::find($id);

        if($noteData->password == null){
            return view('.notes.view', [
                'subject' => $noteData->subject,
                'content' => $noteData->content,
                'protected' => false
            ]);
        }else{
            return view('.notes.view', [
                'id' => $id,
                'subject' => null,
                'content' => null,
                'protected' => true
            ]);
        }
    }

    public function ShowProtectedNote(Request $request, $id){
        $noteData = Notes::find($id)->first();

        if(hash('md5', $request->notepassword ) == $noteData->password){
            return view('.notes.view', [
                'subject' => $noteData->subject,
                'content' => $noteData->content,
                'protected' => false
            ]);
        }else{
            return redirect(route('homepage'));
        }
    }

    public function DeleteNote(){
        return view('.notes.delete');
    }

    public function DropNote(Request $request){
        $note = Notes::find($request->id);

        if($note->authorkey == hash('md5', $request->authorkey)){
            $note->delete();
        }

        return redirect(route('homepage'));
    }

    // to update the notes
    public function UpdateNote(Request $request, $id){

    }
}
