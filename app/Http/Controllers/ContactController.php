<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //index
    public function index()
    {

        $messages = Contact::orderBy('id', 'desc')->paginate(10);


        return view('admin.pages.message.index', compact('messages'));
    }

    //view
    public function view($id)
    {
        $message = Contact::find($id);

        return view('admin.pages.message.view', compact('message'));
    }




    //contact
    public function contact()
    {
        return view('home.contact');
    }

    //contact store
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'nullable|string',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Message sent successfully');
    }

}
