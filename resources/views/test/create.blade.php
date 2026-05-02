<style>
    .container {
        margin: 150px auto;
        display: flex;
        justify-content: center;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>
<div class="container">

    <!-- @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif -->



<form action="{{route('test.store')}}" method="post">
@csrf
<table>
    <tbody>
    <tr>
        <td colspan="2" style="text-align: center"><h1>Create record</h1></td>
    </tr>
    <tr>
        <td><label for="">Name</label></td>
        <td><input type="text" name="name" value="{{old('name')}}" ></td>
    </tr>
    @error('name')
    <tr >
            <td style="color: red; text-align: center" colspan = 2>{{$message}}</td>
    </tr>
    @enderror
    <tr>
            <td><label for="">Email</label></td>
            <td><input type="email" name="email"  value="{{old('email')}}"  ></td>
        </tr>
        <tr>
            @error('email')
            <tr >
                    <td style="color: red; text-align: center" colspan = 2>{{$message}}</td>
            </tr>
            @enderror
        </tr>
        <tr>    
            <td><label for="">Comments</label></td>
            <td><input type="text" name="comments" ></td>
            
        </tr>
        <tr>
            @error('comments')
            <tr >
                    <td style="color: red; text-align: center" colspan = 2>{{$message}}</td>
            </tr>
            @enderror
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center"><button type="submit">Submit</button></td>
        </tr>
    </tbody>
</table>
</form>
</div>