<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sub-category</title>
</head>
<body>

<div class="d-flex justify-content-end">
<div class="col-md-4">
@include('sidebar')
</div>

<div class="col-md-8">
<div>
@include('header')
</div>
<br>
<div class="card">

  
 <div class="card-body">
 <h5 class="card-header">Product Sub-category</h5>
 <form role="form" action="results.html" style="padding:30px">
    <p class="input-group">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  </div>
    <div>
    <input type="text" class="form-control border-0" name="q" Placeholder="Product Title"/> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    <input type="hidden" name="mode" value="web" />
  </div>
  </br>
  
    <div>
    <input type="text" class="form-control border-0" name="q" Placeholder="Product Name" /> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    <input type="hidden" name="mode" value="web" />
  </div>
    </p>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <a href="#" class="btn btn-info">Add Product</a>
    <a href="#" class="btn btn-info">View Product</a>
 </form>
  </div>
</div>
</div>
</div>   
</body>
</html>