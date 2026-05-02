<style>
   body {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 20px;
}

/* Ensure non-card elements (h1, panel hosts) span the full width */
body > *:not(.card) {
  grid-column: 1 / -1;
}

.card {
  display: flex;
  padding: 10px;
  border: none !important;
  color: white !important;
  background-color: #3b82f6 !important;
  border-radius: 12px !important;
  margin: 0 !important;
  width: auto !important;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
}
</style>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>Users List</h1>
<a href="{{ route('test.create') }}">Create</a>

@foreach($users as $user)
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ strtoupper($user->name) }}</h5>
        <p class="card-text">{{$user->email}}</p>
        <p class="card-text">{{ $user->comments }}</p>
        <a href="{{ route('test.edit', $user->id) }}"  class="btn btn-primary">Edit</a> |
        <a href="{{ route('test.show', $user->id) }}">Show</a> |
        <p>{{ (isset($user->created_at)) ? $user->created_at->diffForHumans() : '' }}</p>

    </div>
</div>
@endforeach