@extends('layouts.admin')

@section('title')
  
Admin panel
 
@endsection

@section('content')

<div class="card">
  
  <div class="card-body">
  <h5 class="card-header">Category</h5>
  
<form role="form" action="{{url('store')}}" style="padding:30px">
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
   
    <p class="input-group">
    

    <div>
    <input type="text" class="form-control border-0" name="title" Placeholder="Product Title"/> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  
    </div>
     </br>
    <div>
    <input type="text" class="form-control border-0" name="product" Placeholder="Product Name" /> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
   
    </div>
    </p>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <button class="btn btn-info" type=submit>Add Product</button>
   
   </form>
   <a href="{{url('view-records-categ')}}" class="btn btn-info" type>View Product</a>
  </div>
</div>
@endsection

@section('scripts')


@endsection