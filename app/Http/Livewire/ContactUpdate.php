<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{
    public $name;
    public $phone, $contactId;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required|min:12|max:15',
    ];

    protected $messages = [
        'name.required' => 'Datanya engga boleh kosong',
        'phone.required' => 'Isi data phonennya',
        'phone.min' => 'Di indonesia no hp ada 12 digit',
        'phone.max' => 'Maximalnya 12 digit dong, jangan batu',

    ];

    protected $listeners = [
        'getContacts' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contacts)
    {

        $this->name = $contacts['name'];
        $this->phone = $contacts['phone'];
        $this->contactId = $contacts['id'];
    }

    public function update()
    {
        $this->validate($this->rules);
        if ($this->contactId) {
            $contact = Contact::find($this->contactId);
            $contact->update([
                'name' => $this->name,
                'phone' => $this->phone,
            ]);
            $this->resetInput();
            $this->emit('contactUpdated', $contact);
        }
    }

    private function resetInput()
    {

        $this->name = null;
        $this->phone = null;
    }
}
