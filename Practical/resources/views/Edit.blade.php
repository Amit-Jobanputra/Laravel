<html>
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
        <form action="{{route('update',['id'=>$data->id])}}" method="POST" class="mt-5" style="width: 50%; margin: auto;">
            @csrf
            <div class="form-row">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" value="{{$data->Name}}">
                </div>                
            </div>
        
            <div class="form-row">
                <div class="mb-3">
                    <label for="Registration_No" class="form-label">Registration No</label>
                    <input type="text" class="form-control" id="Registration_No" name="Registration_No" value="{{$data->Registration_No}}" >
                </div>
            </div>
            
            <div class="form-row">
                <div class="mb-3">
                    <label for="Enrollment No" class="form-label">Enrollment No</label>
                    <input type="text" class="form-control" id="Enrollment_No" name="Enrollment_No" value="{{$data->Enrollment_No}}" >
                </div>
            </div>

            <div class="form-row">
                <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="Address" name="Address" value="{{$data->Address}}" >
                </div>
            </div>
            
            <div class="form-row">
                <div class="mb-3">
                    <label for="Phone_No" class="form-label">Student Phone No</label>
                    <input type="text" class="form-control" id="Phone_No" name="Phone_No" value="{{$data->Phone_No}}" >
                </div>
            </div>

            <div class="form-row">
                <div class="mb-3">
                    <label for="Parents_Phone_No" class="form-label">Parent's Phone No</label>
                    <input type="text" class="form-control" id="Parents_Phone_No" name="Parents_Phone_No" value="{{$data->Parents_Phone_No}}" >
                </div>
            </div>

            
            
    <button type="submit" class="btn btn-primary">Update</button>
    
  
    </form>
    </body>
</html>