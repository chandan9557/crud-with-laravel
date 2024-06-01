<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud Opration</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center text-dark">Edit Form</h1>
            <div class="col-md-5">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$student->name}}" name="name">
</div>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">City</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$student->city}}" name="city">
</div>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Marks</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" value="{{$student->marks}}" name="marks">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Update</button>
</div>
                </form>
                @if (session()->has('status'))
<div class="alert alert-success">{{session('status')}}</div>

                @endif
            </div>
           
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>