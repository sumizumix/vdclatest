@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Hospital Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.hospital.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Hospital Name</label>
                                    <input type="text" class="form-control" id="labname" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Address</label>
                                    <input type="text" class="form-control" id="name" name="address" required>
                                </div>
                              
                                <div class="mb-3">
                                    <label class="form-label" for="description">Phone</label>
                                    <input type="text" class="form-control" id="name" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Photo </label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Website</label>
                                    <input type="text" class="form-control" id="name" name="website" required>
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
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add hospital</button>
                                </form>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
