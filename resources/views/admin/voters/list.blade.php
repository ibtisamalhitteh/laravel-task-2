@extends('admin.layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
 
{{--
                        <div class="datatableBtns">
                        <a href="/admin/exhibitions/approval/{{$exhibition->id}}" class="mr-2" title="Approve">
                        <i class="fas fa-thumbs-up fs-5 " ></i></a>
                        <a href="#"  class="reject mr-2" title="Reject" data-id="{{$exhibition->id}}">
                        <i class="fas fa-thumbs-down fs-5 "></i></a>
                        <a href="/admin/exhibitions/show/{{$exhibition->id}}" title="View" class="mr-2">
                        <i class="fas fa-eye fs-5 " ></i></a></div>
        --}}

  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Voters</h4>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
              
                <th> serial_number </th>
                <th> full name </th>
                <th> last name </th>
                <th> gender </th>
                <th> center name </th>
                <th> box number </th>
                <th> address </th>
                <th> # </th>

              </tr>
            </thead>
            <tbody>
               @foreach($list as $item)
              <tr class="table-info">
                <td> {{$item->serial_number}}</td>
                <td> {{$item->full_name}}</td>
                <td> {{$item->last_name}}</td>
                <td> {{$item->gender}}</td>
                <td> {{$item->center_name}}</td>
                <td> {{$item->box_number}}</td>
                <td> {{$item->address}}</td>
                <td> </td>
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