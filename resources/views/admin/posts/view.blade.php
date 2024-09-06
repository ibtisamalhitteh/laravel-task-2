@extends('admin.layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
 


  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Post Details</h4>
     

      <h3>{{$post->title}}</h3>
      <div class="row">
        {!!$post->content !!}
      </div>
      <div class="row">
        <img src="{{url($post->thumb)}}">
      </div>
         
      </div>

     

      </div>
    </div>

  </div>

       

@endsection
