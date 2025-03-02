<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center">Singel Data Display</h2>
   <div class="container mt-5">
    <table class="table table-bordered table-striped table-hover  table-responsive">
        <thead class="table-dark text-center fs-5">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->id}}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->city }}</td>
        </tbody>
    </table>
</div>
