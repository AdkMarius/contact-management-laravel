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
        $contact = new Contact();

        return view('contact.add-contact', [
            'contact' => $contact
        ]);
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

    public function read(string $id): View
    {
        $contact = Contact::find($id);

        return view('contact.view', [
            'contact' => $contact
        ]);
    }

    public function edit(string $id): View
    {
        $contact = Contact::find($id);

        return view('contact.edit-contact', [
           'contact' => $contact
        ]);
    }

    public function update(string $id, ContactFormRequest $request): View
    {
        $contact = Contact::find($id);

        $contact->update($request->validated());

        return view('contact.view', [
            'contact' => $contact
        ]);
    }

    public function delete(string $id): RedirectResponse
    {
        Contact::where('id', '=', $id)->delete();

        return redirect()->route('contact.list');
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
