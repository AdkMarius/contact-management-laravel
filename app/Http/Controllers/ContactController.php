<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use \Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contact.add-contact');
    }

    public function create(ContactFormRequest $request): RedirectResponse
    {
        $contact = Contact::create($request->validated());

        return redirect()->route('contact.view', [
            'id' => $contact->id
        ]);
    }

    public function list(): View
    {
        $contacts = Contact::all();

        return view('contact.list-contact', [
            'contacts' => $contacts
        ]);
    }

    public function read(string $id)
    {
        $contact = Contact::find($id);

        return view('contact.view', [
            'contact' => $contact
        ]);
    }

    public function update()
    {

    }

    public function delete(string $id): View
    {
        Contact::where('id', '=', $id)->delete();

        $contacts = Contact::all();

        return view('contact.list-contact', [
            'contacts' => $contacts
        ]);
    }

    public function search(Request $request): View
    {
        $searchValue = $request->input('searchValue');

        $contacts = Contact::
            where('name', 'like', '%' . $searchValue . '%')
            ->orWhere('firstName', 'like', '%' . $searchValue . '%')
            ->get();

        return view('contact.list-contact', [
            'contacts' => $contacts
        ]);
    }
}
