@extends('layout.admin_header')
@section('admin_content')
<div class="container-fluid">
  <div class="card">
      <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Package Details</h5>
          <div class="card">
              <div class="card-body p-4">
                  <form action="{{ route('admin.product.store') }}" method="POST"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="name">Product Name</label>
                          <input type="text" class="form-control" id="name" name="name"
                              required>
                      </div>
                      <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="price">Price</label>
                          <input type="number" class="form-control" id="price" name="price"
                              required>
                      </div>
                      <div class="form-group">
                          <label for="">Photo *</label>
                          <div>
                              <input type="file" name="image">
                          </div>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add New
                          Product</button>
                  </form>



              </div>
          </div>

      </div>
  </div>
</div>
@endsection
