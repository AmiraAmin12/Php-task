
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Lists</h1>
    <a href="{{url('lists/create ')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
           
        New list</a>
</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All LIST</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>collet Date</th>
                                            <th>Price</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($lists->isNotEmpty())
                                        @foreach($lists  as $list)

                                        <tr>
                                            <td>{{$lists->name}}  </td>
                                            <td>
                                                <img src="{{ asset($list->photo)}}" style="width:200px; height:200px;">
                                            </td>
                                           
                                           
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr col->
                                            <td>
                                            <div class="alert alert-danger" role="alert">
 no data found
</div>
                                            </td>
                                        </tr>

                                        
                                        @endif

                                    </tbody>
</table>


</div>
</div>
</div>
    
                                    </html>
 