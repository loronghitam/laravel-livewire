<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $phone;

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

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $validateData = $this->validate();
        $contact = Contact::create($validateData);

        $this->resetInput();

        $this->emit('contactStored', $contact);
    }

    // Untuk merestar hasil inputan yang ada
    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
