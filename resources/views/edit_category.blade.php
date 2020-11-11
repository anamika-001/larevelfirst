@extends('layouts.admin')

@section('title')
  
Admin panel
 
@endsection

@section('content')

<div class="card">
  
  <div class="card-body">
  <h5 class="card-header">Edit Category Section</h5>
  <!-- form to edit data -->
<form role="form" action="{{action('AdminController@update',[$details->id])}}" style="padding:30px">
<div class="flash-message">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
            @endif
  </div>
      
    <p class="input-group">
   
    <div>
    <input type="text" class="form-control border-0" name="title" Placeholder="Product Title" value="{{ $details->title }}" /> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  
    </div>
     </br>
    <div>
    <input type="text" class="form-control border-0" name="product" Placeholder="Product Name" value="{{ $details->product }}" /> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
   
    </div>
    </p>
    <!-- button navigate to updated edit page  -->
    <input type="submit" name ="submit" class="btn btn-info">

    <!-- button to return back on view page -->
    <a href="{{url('view-records-categ')}}" class="btn btn-info" type=submit>Cancel</a>
   
   </form>
   <!-- button to view product -->
   <a href="{{url('view-records-categ')}}" class="btn btn-info" type>View Product</a>
  </div>
</div>
@endsection

@section('scripts')


@endsection