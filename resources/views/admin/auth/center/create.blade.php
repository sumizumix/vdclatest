@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Center Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.center.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Address</label>
                                    <input type="text" class="form-control" id="name" name="location"   required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Place</label>
                                    <input type="text" class="form-control" id="name" name="address"required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Email</label>
                                    <input type="text" class="form-control" id="name" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Phone</label>
                                    <input type="text" class="form-control" id="name" name="phone" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label" for="description">Time</label>
                                    <input type="text" class="form-control" id="name" name="time" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Mapcode</label>
                                    <input type="text" class="form-control" id="name" name="mapcode" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Maplink</label>
                                    <input type="text" class="form-control" id="name" name="maplink" required>
                                </div>
                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>

                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>
                                    <input type="text" class="form-control" id="seotitle" name="seotitle"
                                        required></input>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add
                                    center</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
