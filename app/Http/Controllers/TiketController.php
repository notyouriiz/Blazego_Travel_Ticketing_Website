<?php

namespace App\Http\Controllers;

use App\Models\HargaTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TiketController extends Controller
{
    public function index()
    {
        $tickets = HargaTiket::paginate(10);
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'class' => 'required',
            'price' => 'required|numeric',
        ]);


        HargaTiket::create([
            'origin' => $request->origin,
            'destination' => $request->destination,
            'class' => $request->class,
            'price' => $request->price,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function edit(HargaTiket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, HargaTiket $ticket)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
            'class' => 'required',
            'price' => 'required|numeric',
        ]);


        $ticket->update([
            'origin' => $request->origin,
            'destination' => $request->destination,
            'class' => $request->class,
            'price' => $request->price,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function destroy(HargaTiket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
}
