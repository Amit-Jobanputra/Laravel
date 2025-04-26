<html>
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
        <h2 class="mb-4" align="center">ID Card Details</h2>
        <form action="{{route('display')}}" method="POST" class="mt-5" style="width: 50%; margin: auto;">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" >
            </div>
            @error('Name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
    
            <div class="mb-3">
                <label for="Registration_No" class="form-label">Registration No</label>
                <input type="text" class="form-control" id="Registration_No" name="Registration_No" >
            </div>
            @error('Registration_No')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="Enrollment_No" class="form-label">Enrollment No</label>
                <input type="text" class="form-control" id="Enrollment_No" name="Enrollment_No" >
            </div>
            @error('Enrollment_No')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" id="Address" name="Address" >
            </div>
            @error('Address')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="Phone_No" class="form-label">Student Phone No</label>
                <input type="tel" class="form-control" id="Phone_No" name="Phone_No" >
            </div>
            @error('Phone_No')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="Parents_Phone_No" class="form-label">Parent's Phone No</label>
                <input type="tel" class="form-control" id="Parents_Phone_No" name="Parents_Phone_No" required>
            </div>  
            @error('Parents_Phone_No')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            
    <button type="submit" class="btn btn-primary">Sign in</button>
  
    </form>
    </body>
</html>