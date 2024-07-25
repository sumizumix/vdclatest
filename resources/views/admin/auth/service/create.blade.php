@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Service Details</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="price" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Description</label>
                                <input type="text" class="form-control" id="name" name="description" required>
                            </div>
                            <h5 class="card-title fw-semibold mb-3">SEO Information</h5>

                            <div class="mb-3">
                                <label for="description" class="form-label">Title</label>
                                <textarea class="form-control" id="seotitle" name="seotitle" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
