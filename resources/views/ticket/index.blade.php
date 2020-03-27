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

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>summury </th>
          <th>Description</th>
          <th>status</th>
          <th>Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach($tickets as $ticket )
        <tr>
          <td>{{ $ticket->id }}</td>
          <td>{{ $ticket->summury}}</td>
          <td>{{ $ticket->description}}</td>
          <td>{{ $ticket->status}}</td>
          <td>
            <a class="btn btn-primary" href="{{route('ticket.show',['id' => $ticket->id])}}">edit</a>
<a class="btn btn-danger" href="{{route('ticket.delete',['id' => $ticket->id])}}">Delete</a>

          </td>
        </tr>
@endforeach
      </tbody>
    </table>

{{ $tickets->links() }}

  </div>
</main>


@endsection
