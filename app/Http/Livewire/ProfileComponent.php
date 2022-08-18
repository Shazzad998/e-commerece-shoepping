<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileComponent extends Component
{

    public $firstname;
    public $lastname;
    public $email;
    public $name;
    public $phone;
    public $street;
    public $city;
    public $state;
    public $postal_code;
    public $address_id;

    public function mount()
    {
        $address = Address::with('user')->where('user_id',Auth::user()->id)->first();
        $this->email = Auth::user()->email;
        $this->firstname = ($address)? $address->firstname: '';
        $this->lastname = ($address)? $address->lastname: '';
        $this->address_id = ($address)? $address->id: '';
        $this->phone = ($address)? $address->phone: '';
        $this->street = ($address)? $address->street: '';
        $this->city = ($address)? $address->city: '';
        $this->state = ($address)? $address->state: '';
        $this->postal_code = ($address)? $address->postal_code: '';


    }

    public function store()
    {
        $this->validate([
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'phone' => ['required','unique:addresses,phone'],
            'street' => ['required','string'],
            'city' => ['required','string'],
            'state' => ['required','string'],
            'postal_code' => ['required','numeric'],
            
        ]);

        Address::create([
            'user_id' => Auth::user()->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
        ]);


        session()->flash('success', toast_success('Address Created Successfully')); 
    }

    public function update()
    {
       
        $this->validate([
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'phone' => ['required','unique:addresses,phone,'.$this->address_id],
            'street' => ['required','string'],
            'city' => ['required','string'],
            'state' => ['required','string'],
            'postal_code' => ['required','numeric'],
            
        ]);

        Address::findOrFail($this->address_id)->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
        ]);


        session()->flash('success', toast_success('Address Updated Successfully')); 
    }


    public function render()
    {
        return view('livewire.profile-component');
    }
}
