@extends('admin.layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
 


  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Post Add New</h4>
     <form id="edit-categories" action="/administrator/posts/store" enctype='multipart/form-data' class="px-4 pt-3" method="POST">
                    @csrf

        <div class="row g-3">
            <div class="col-sm-6 input-wrapper ">
                  <label class="form-label" for="name_en">Title</label>
                  <div class="input-group input-group-merge">
                        <input type="text" id="title" value="" class="form-control dt-full-name" name="title" required>
                  </div>
              </div>


            <div class="col-sm-6 input-wrapper ">
                  <label class="form-label" for="name_en">Title</label>
                  <div class="input-group input-group-merge">
                        <textarea class="form-control" id="content" rows="3" name="content" required></textarea>
                  </div>
              </div>

        </div>


        <button class="btn btn-success btn-submit" type="submit">Add</button>
    </form>

    
         
      </div>

     

      </div>
    </div>

  </div>

       

@endsection
