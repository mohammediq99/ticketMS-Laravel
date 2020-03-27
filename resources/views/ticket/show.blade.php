@extends('layouts.main')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tickets</h1>
    <div class="btn-toolbar mb-2 mb-md-0">

      <div class="btn-group mr-2">

          <a class="btn btn-primary" href="{{ route('ticket.create')}}" role="button">Add New Ticket</a>
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>

<div class="">

  <form method="POST" action="{{ route('ticket.update' , ['id' => $ticket->id])}}">

    @csrf

    <div class="form-group">
      <label for="summury">summury</label>
      <input type="text" class="form-control" name="summury" id="summury" value="{{ $ticket->summury }}"/>
    </div>
    <div class="form-group">
      <label for="description">description</label>
      <textarea type="text" class="form-control" id="description" name="description" >{{$ticket->description}}</textarea>
    </div>



          <div class="form-group">
         <label for="status">status</label>
         <select class="form-control" id="status" name="status">
           <option value="Open">Open</option>
           <option vallue="In progrees">In progrees</option>
           <option value="Closed">Closed</option>

         </select>
       </div>




    <button type="submit" class="btn btn-primary">Submit</button>
  </form>




</div>




@endsection
