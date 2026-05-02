@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h5>Edit Department</h5>
<form action="{{ route('departments.update', $row->id) }}" method="post">
@method('PUT')
@csrf

<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="{{$row->name}}"></td>
    </tr>
    <tr>
        <td>Slug</td>
        <td><input type="text" name="slug" value="{{$row->slug}}"></td>
    </tr>

    <tr>    
        <td>Description</td>
        <td><textarea name="description" id="description">{{ $row->description  }}</textarea></td>
    </tr>

    <tr>
        <td></td>
        <td><button type="submit">Update</button></td>
    </tr>
</table>
</form>