<?php

namespace App\Http\Livewire;

use App\Contact;
use ContactsTableSeeder;
use Livewire\Component;

class ContactIndex extends Component
{

    // untuk emitnya sesuai dengan nama yang ada di create
    protected $listeners = [
        'contactStored' => 'handleStored',
    ];

    public function render()
    {

        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get(),
        ]);
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was stored');
    }
}
