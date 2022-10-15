<?php

namespace App\Http\Livewire;

use App\Contact;
use ContactsTableSeeder;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;

    // untuk emitnya sesuai dengan nama yang ada di create
    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated',
    ];

    public function render()
    {

        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get(),
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contacts = Contact::find($id);

        $this->emit('getContacts', $contacts);
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was stored');
    }

    public function handleUpdated($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was updated');
    }
}
