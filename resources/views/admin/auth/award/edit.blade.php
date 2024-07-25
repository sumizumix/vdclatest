@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Award Details</h5>
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ url('admin/awards/update/' . $award->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Award Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $award->name }}" a
                                        name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Description</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $award->description }}" a name="description" required>
                                </div>
                                <div>
                                    <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>

                                    <input type="text" class="form-control" id="seotitle" value="{{ $award->seotitle }}"
                                        name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{$award->seodescription }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Edit Award
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
