
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <h1>Display Information</h1>
   <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-center">Submitted Data</h2>
    <a href="{{ route('create') }}" class="btn btn-primary" style="float: right">Add Data</a>
    </div>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $datas)
            <tr>
                <td>{{ $datas->id}}</td>
                <td>{{ $datas->name }}</td>
                <td>{{ $datas->email }}</td>
                <td>{{ $datas->address }}</td>
                <td>{{ $datas->city }}</td>
                <td>
                    <a href="{{route('show',['id'=>$datas->id])}}" class="btn btn-secondary">View</a>
                    <a class="btn btn-warning">Edit</a>
                    <a class="btn btn-danger">Delete</a>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    
</body>
</html>
