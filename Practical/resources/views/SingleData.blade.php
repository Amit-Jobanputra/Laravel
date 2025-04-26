<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-center">Singel Data Display</h2>
    <button class="btn btn-primary"><a href="{{ route('displayData') }}" class="text-white
    text-decoration-none">Back</a></button>
    </div>
   <div class="container mt-5">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Registration Number </th>
                <th>Enrollment Number</th>
                <th>Address</th>
                <th>Student Phone Number </th>
                <th>Parents Phone Number </th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ $data->id}}</td>
                <td>{{ $data->Name}}</td>
                <td>{{ $data->Registration_No}}</td>
                <td>{{ $data->Enrollment_No }}</td>
                <td>{{ $data->Address }}</td>
                <td>{{ $data->Phone_No  }}</td>
                <td>{{ $data->Parents_Phone_No  }}</td>
            </tr>
            </tbody>
    </table>
</div>
