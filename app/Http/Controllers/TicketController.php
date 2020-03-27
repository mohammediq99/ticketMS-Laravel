<?php

namespace App\Http\Controllers;

use App\ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $ticket = ticket::latest()->paginate(10);
        return view('ticket.index')->with('tickets' , $ticket);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('ticket.create');
    }

    public function store(Request $request)
    {

        $request->validate([
          'summury' => 'string|max:250|required',
          'description' => 'required',
          'status' => 'required'
        ]);
$ticket =new ticket();
$ticket->summury = $request->summury;
$ticket->description = $request->description;
$ticket->status = $request->status;

    $ticket->save();

    return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ticket = ticket::findOrFail($id);
      return view('ticket.show')->with('ticket' , $ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ticket $ticket)
    {
      $request->validate([
        'summury' => 'string|max:250|required',
        'description' => 'required',
        'status' => 'required'
      ]);
      $ticket->summury = $request->summury;
      $ticket->description = $request->description;
        $ticket->status = $request->status;
        $ticket->save();
        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $ticket = ticket::findOrFail($id);
      $ticket->delete();
      return redirect()->route('tickets.index');

    }
}
