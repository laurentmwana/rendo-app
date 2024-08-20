<?php

namespace App\Http\Controllers;

use App\Events\SendMessageContactEvent;
use App\Models\Qz;
use App\Models\Contact;
use App\Search\SearchBar;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact.index', [
            'contact' => new Contact()
        ]);
    }

    public function send(Request $request): RedirectResponse
    {
        $validated = $this->rule($request);

        $contact = Contact::create($validated);


        event(new SendMessageContactEvent($contact));

        return redirect()->route('.contact')
            ->with('success', 'message envoyé avec succès');
    }

    private function rule(Request $request): array
    {
        return $request->validate([
            'name' => [
                'required',
                'string',
                'between:3,30'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],

            'subject' => [
                'required',
                'string',
                'between:10,255',
            ],

            'message' => [
                'required',
                'string',
                'between:10,5000',
            ],
        ]);
    }
}
