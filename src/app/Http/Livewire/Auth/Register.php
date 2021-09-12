<?php

namespace App\Http\Livewire\Auth;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public string $email = '';
    public string $name = '';
    public string $shopName = '';
    public string $password = '';
    public string $passwordConfirmation = '';

    protected array $rules = [
        'email' => 'required|email|unique:users',
        'name' => 'required',
        'shopName' => 'required',
        'password' => 'required|min:8|same:passwordConfirmation',
    ];

    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        $shop = Shop::create([
            'user_id' => $user->id,
            'name' => $this->shopName,
        ]);

        auth()->login($user);

        return redirect()->route('shop.show', ['userId' => $user->id]);
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth');
    }
}
