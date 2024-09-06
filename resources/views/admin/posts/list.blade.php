@extends('admin.layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
 


  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Psts List</h4>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
              
                <th> Thumb </th>
                <th> Title </th>
                <th> Content </th>
                <th> # </th>

              </tr>
            </thead>
            <tbody>
               @foreach($list as $item)
              <tr class="table-info">
                <td> <img src="{{$item->thumb?url($item->thumb):''}}" with="100" height="100" /></td>
                <td> {{$item->title}}</td>
                <td> {{substr(strip_tags($item->content),0,80)}}...</td>
               
                <td> 

                  <a href="/administrator/posts/view/{{$item->id}}">View</a>|
                  <a href="/administrator/posts/edit/{{$item->id}}">Edit</a>|
                  <a href="/administrator/posts/delete/{{$item->id}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>


     

      </div>
    </div>

  </div>

         {{-- Pagination --}}
        <div class="d-flex justify-content-center" id="pagination">
        {!! $list->links() !!}
      </div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush