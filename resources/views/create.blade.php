<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://kit.fontawesome.com/98fc1f78d5.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
     crossorigin="anonymous">
     
    <style>
      .photo {
        background-color: #E9E9E9!important;
      }
      input[type="file" i]{
        color: #fff;
      }
      .footer{
        display: flex;
        padding-top: 10px;
        justify-content: center;
      }
      .form-control{
        background-color: #E9E9E9 !important;
        border-radius: 18px;
      }
      .nav-link{
        font-size: 12px;
        color: #707070;
      }
    .icon{
        font-size: 40px;
    color: #3A9A38; 
    background: #fff !important;
    padding: 10px !important;
    border-radius: 50% !important;
    position: absolute;
    left: 150px;
    z-index: 1000;
    margin-top: 20px;
      }
    </style>
    
  </head>
  
  <body>
  
  </div>
</nav>
 <!-- endheader -->
  <div class="container text-center " >
  <div class="row">
    <div class="col-4">   
    </div>

    
    <div class="col-4" style="background-color: #fff;">
        <!-- header -->
  
    
    <form  action="{{url('/index')}}" method="POST" enctype="multipart/form-data" style="background-color: #fff;">
@csrf
                    
 <div class="card shadow mb-4">
  <div class="card-header py-3">
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
    <i class="fas fa-arrow-left"></i> Add New Listing
    </a>
  </div>

                        <div class="card-body">
                          @if(session('success'))
                          <div class="alert alert-success">
                          {{session('success')}}
                          </div>
                        @endif
 
<div class=" photo card text-dark bg-light mb-3" style="max-width: 10rem; height:120px; margin-left:70px; border:thick dashed #3A9A38;">
<div class="form-group">               
  <div class="custom-file mb-3">
  <i class="fa-sharp fa-regular fa-plus" style="color:#3A9A38; padding-top:30px; font-size:26px;"></i> 
 <input type="file" class="custom-file-input" name="photo">
   @error('photo')
    <p class="text-danger">{{$message}}</p>
    @enderror
 <label class="custom-file-label"></label> </div>
 </div>
  </div>
                        

 
<div class="form-floating mb-3">
  <input type="text"  name="title"  class="form-control" id="floatingInput" placeholder="title">
  <label for="floatingInput">Title</label>
  @error('title')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>

<div class="form-floating">
  <textarea class="form-control" name="content" placeholder="contente" id="floatingTextarea2" style="height: 100px ;margin-bottom:8px;"></textarea>
  <label for="floatingTextarea2">content</label>
  @error('content')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>

<div class="form-floating mb-3">
  <input type="text"  name="category"  class="form-control" id="floatingInput" placeholder="title">
  <label for="floatingInput">Category</label>
  @error('category')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>
<div class="form-floating mb-3">
  <input type="text"  name="Quantity"  class="form-control" id="floatingInput" placeholder="title">
  <label for="floatingInput">Quantity</label>
  @error('Quantity')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>
<div class="form-floating mb-3">

  <input type="phone"  name="Phone Number"  class="form-control" id="floatingInput" placeholder="title">
  <label for="floatingInput">Phone Number</label>
  @error('Phone Number')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>

<div class="form-floating mb-3">
  <input type="text"  name="Address"  class="form-control" id="floatingInput" placeholder="title">
  <label for="floatingInput">Address</label>
  @error('Address')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>
<div class="form-floating mb-3">
  <input type="text"  name="Price"  class="form-control" id="floatingInput" placeholder="title">
  <label for="floatingInput">Price</label>
  @error('Price')
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>

</div>
 <div class="col-12">
    <button type="submit" class="btn btn-success" style="padding: 15px 140px; margin-bottom: 40px;">Publish</button>
  </div>
  <div class="">
  <span >
  <i class="fas fa-plus icon"style="font-size:40px; color:#3A9A38;" ></i>
  </span>
</div>
                   
</div>

<div class="card">
  <div class="card-body footer">
  <ul class="nav justify-content-center list">
  <li class="nav-item">
  <i class="fas fa-home"></i>
    <a class="nav-link " aria-current="page" href="#">HOME</a>
  </li>
  <li class="nav-item">
  <i class="far fa-calendar-alt"></i>
    <a class="nav-link" href="#">ORDER</a>
  </li>
    </ul>
    <ul class="nav justify-content-center list">

    </ul>
    <ul class="nav justify-content-center list">  
  <li class="nav-item">
  <i class="fas fa-wallet"></i>
    <a class="nav-link" href="#">WALLET</a>
  </li>
  <li class="nav-item">
  <i class="far fa-user"></i>
    <a class="nav-link disabled">PROFILE
  </li>
</ul>
  </div>
  
</div>
</form> 



    </div>
    <div class="col-4">    
    </div>
  </div>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>


</html>