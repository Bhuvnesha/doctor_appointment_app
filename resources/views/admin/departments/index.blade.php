<h1>List</h1>
<a href="{{ route('departments.create') }}">Create</a>
<table>
    <tr>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    @foreach ($rows as $department)
        <tr>
            <td>{{ $department->name }}</td>
            <td>{{ $department->slug }}</td>
            <td>{{ $department->description }}</td>
            <td>
                <a href="{{ route('departments.edit', $department->id) }}">Edit</a>
                <form action="{{ route('departments.destroy', $department->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>