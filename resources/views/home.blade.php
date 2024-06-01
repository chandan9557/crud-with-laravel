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
            <h1 class="text-center text-dark">Crud Operation</h1>
            <div class="col-md-5">
                <form action="" method="POST">
                    @csrf
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter name" name="name">
</div>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">City</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter city" name="city">
</div>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Marks</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="enter marks" name="marks">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>
                </form>
                @if (session()->has('status'))
<div class="alert alert-success">{{session('status')}}</div>

                @endif
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->marks}}</td>
                            <td><a href="{{url('/delete',$item->id)}}" class="btn btn-danger">Delete</a>
                                <a href="{{url('/edit',$item->id)}}" class="btn btn-info">Edit</a>
                            </td>
                          </tr>  
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>