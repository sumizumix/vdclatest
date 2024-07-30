@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Member Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="price">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="price">Designation</label>
                                    <input type="text" class="form-control" id="name" name="designation" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="">Photo </label>
                                    <input type="file" class="form-control" name="image">
                                    <div class="error text-danger">{{ $errors->first('image') }}</div>
                                </div>

                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>

                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>
                                    <input type="text" class="form-control" id="seotitle" name="seotitle" required></input>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Member</button>
                            </form>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
