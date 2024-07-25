@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit About Page Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('admin/about/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label"> Name</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $page_about->name }}" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $page_about->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Vision</label>
                                    <textarea class="form-control" id="description" name="vision" rows="3" required>{{ $page_about->vision }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Mission</label>
                                    <textarea class="form-control" id="description" name="mission" rows="3" required>{{ $page_about->mission }}</textarea>
                                </div>
                                <div>
                                    <h5>SEO Information</h5>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Title</label>
                                    <textarea class="form-control" id="seotitle" name="seotitle" rows="3" required>{{ $page_about->seotitle }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{ $page_about->seodescription }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit about us</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
