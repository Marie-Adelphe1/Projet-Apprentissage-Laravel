<?php

namespace App\Http\Controllers;
use App\Models\Command;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function addToBasket(Request $request) {
        if (Command::where('name',$request->name)->exists()) {
            $command = Command::where('name',$request->name)->first();
            $command->quantity++;
            $command->save();
        } else {
            $command = Command::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => 1,
        ]);
        }
        
        return redirect()->back();
    }
    public function displayBasket() {
        $commands = Command::all();
        return view('basket', ['commands' => $commands]);
    }
}
