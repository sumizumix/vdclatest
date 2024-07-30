@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Location Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.location.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Lab Name</label>
                                    <input type="text" class="form-control" id="labname" name="labname" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Address</label>
                                    <input type="text" class="form-control" id="name" name="address" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Email</label>
                                    <input type="text" class="form-control" id="name" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Phone</label>
                                    <input type="text" class="form-control" id="name" name="phone"  required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="name">Time</label>
                                    <input type="text" class="form-control" id="time" name="time" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Place</label>
                                    <input type="text" class="form-control" id="place" name="place" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Embedded Map Code</label>
                                    <input type="text" class="form-control" id="mapcode" name="mapcode" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">MapLink</label>
                                    <input type="text" class="form-control" id="maplink" name="maplink" required>
                                </div>
                                <br>
                                <div>
                                    <h5>SEO Information</h5>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>
                                    <textarea class="form-control" id="seotitle" name="seotitle" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Location</button>
                                </form>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
