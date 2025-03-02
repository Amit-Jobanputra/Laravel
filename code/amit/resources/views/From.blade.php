<html>
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
    
        <form action="{{route('display')}}" method="POST" class="mt-5" style="width: 50%; margin: auto;">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNmae">Name</label>
                  <input type="text" class="form-control"  name="name" placeholder="Name">
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control"  name="email" placeholder="Email">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control"  name="address" placeholder="1234 Main St">
             </div>
             
            <div class="form-row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control"  name="city">
                </div>
            </div>  
            
            
    <button type="submit" class="btn btn-primary">Sign in</button>
  
    </form>
    </body>
</html>