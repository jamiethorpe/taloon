<?php

namespace App\Http\Livewire\Auth;

use App\Models\Adventurer;
use App\Models\Dungeon;
use App\Models\Shop;
use App\Models\ShopDungeon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Faker\Factory;

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
        //@todo Separate logic into Service classes
        $this->validate();
        $faker = Factory::create('en_US');

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        $shop = Shop::create([
            'user_id' => $user->id,
            'name' => $this->shopName,
            'gold' => 20,
        ]);

        Adventurer::create([
            'shop_id' => $shop->id,
            'adventurer_type_id' => 1,
            'name' => $faker->firstName(),
            'level' => 1,
            'health' => 100,
            'is_alive' => 1,
        ]);

        $dungeons = Dungeon::all();

        foreach ($dungeons as $dungeon){
            ShopDungeon::create([
                'dungeon_id' => $dungeon->id,
                'shop_id' => $shop->id,
                'is_cleared' => 0,
            ]);
        }

        auth()->login($user);

        return redirect()->route('shop.show', ['userId' => $user->id]);
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth');
    }
}
