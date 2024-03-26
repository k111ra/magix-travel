<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index(){
        $messages = Message::all();
        return view('admin.messages.index',compact('messages'));
    }

        public function restore(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
          
            'nom' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Créer une nouvelle réservation
        $messages = new Message();
        // $reservation->client_id = $request->input('client_id');
        $messages->nom = $request->input('nom');
        $messages->email = $request->input('email');
        $messages->phone = $request->input('phone');
        $messages->subject = $request->input('subject');
        $messages->message = $request->input('message');
        $messages->save();

        // Rediriger avec un message de succès
        return redirect()->back()
            ->with('success', 'Reservation créée avec succès.');
    }

    public function  update(Message $message)
    {
        $message->update(['read' => true]);
    
        return back();
    }

    public function show($id){
        $messages = Message::findOrFail($id);
        return view('admin.messages.show',compact('messages'));
    }
}
