<?php

namespace App\Http\Controllers;

use App\Models\Adventurer;
use App\Models\AdventurerType;
use App\Models\Shop;
use App\Models\ShopDungeon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\View\View
     */
    public function show($userId): \Illuminate\View\View
    {
        $shop = Shop::where('user_id', $userId)->first();
        $ownedAdventurers = Adventurer::where('shop_id', $shop->id)
            ->join('adventurer_types', 'adventurers.adventurer_type_id', '=', 'adventurer_types.id')
            ->get();
        $adventurers = AdventurerType::all();

        return view('components.shop', [
            'shop' => $shop,
            'ownedAdventurers' => $ownedAdventurers,
            'adventurers' => $adventurers,
            'user' => Auth::user(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
