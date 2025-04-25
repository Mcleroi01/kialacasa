<?php

namespace App\Livewire\Owner\Establishment;

use App\Models\User;
use Livewire\Component;
use App\Models\Establishment;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public string $name = '';
    public string $address = '';
    public string $latitude = '';
    public string $longitude = '';

    public string $email = '';
    public string $password = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'address' => 'required|string',
        'latitude' => 'nullable|numeric',
        'longitude' => 'nullable|numeric',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8',
    ];

    public function save()
    {
        $this->validate();

        $user= User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // assign user role

        // $user->assignRole('owner');

        Establishment::create([
            'user_id' => $user->id,
            'name' => $this->name,
            'address' => $this->address,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        session()->flash('success', 'Établissement créé avec succès !');
        return redirect()->route('owner.dashboard');
    }

    public function render()
    {
        return view('livewire.owner.establishment.create');
    }
}