@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h5>Add Department</h5>
<form action="{{ route('departments.store') }}" method="post">
@csrf
<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="{{old('name')}}"></td>
    </tr>
    <tr>
        <td>Slug</td>
        <td><input type="text" name="slug" value="{{old('slug')}}"></td>
    </tr>

    <tr>    
        <td>Description</td>
        <td><textarea name="description" id="description"></textarea></td>
    </tr>

    <tr>
        <td></td>
        <td><button type="submit">Save</button></td>
    </tr>
</table>
</form>