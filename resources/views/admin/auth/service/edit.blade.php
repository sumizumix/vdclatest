@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Services</h5>
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ url('admin/service/update/' . $service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Service Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $service->name }}" a
                                        name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $service->description }}" a name="description" required>
                                </div>
                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Title</label>

                                    <input type="text" class="form-control" id="seotitle"
                                        value="{{ $service->seotitle }}" name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{$service->seodescription }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit Services</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
