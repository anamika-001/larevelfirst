@extends('layouts.admin')

@section('title')
  
Admin panel
 
@endsection

@section('content')

<div class="card">
  <h5 class="card-header">Update Product Sub-category</h5>
  <div class="card-body">
<form role="form" action="{{action('SubcategController@update',[$details->id])}}" style="padding:30px">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
            @endif
    <p class="input-group">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Select Category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

  @foreach($categories as $catg)
  <select>
  <ul>
   <option value="{{$catg->id}}" name="catg_id">{{$catg->title}}</option>
   </ul>
   </select>
  @endforeach
 
  </div>
</div>
    <div>
    <input type="text" class="form-control border-0" name="subcateg" Placeholder="Sub-Category" value="{{ $details->subcateg }}"/> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
   
</div>
  
    <div>
    <input type="text" class="form-control border-0" name="name" Placeholder="Product Name" value="{{ $details->name }}"/> <span class="input-group-addon" style="border-left-width: 0px"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  
</div>
    </p>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <input type="submit" name ="submit" class="btn btn-info">
    <a href="{{url('view-records-subcateg')}}" class="btn btn-info" type=submit>Cancel</a>
   
   </form>
   <a href="{{url('view-records-subcateg')}}" class="btn btn-info" >View Product</a>
  </div>
</div>
@endsection

@section('scripts')


@endsection