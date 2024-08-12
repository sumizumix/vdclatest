@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit center Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('admin/center/update/' . $location->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $location->name }}"
                                        name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Address</label>
                                    <input type="text" class="form-control" id="name" name="address" value="{{ $location->location }}"  >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Place</label>
                                    <input type="text" class="form-control" id="name" value="{{ $location->address }}" name="location" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Email</label>
                                    <input type="text" class="form-control" id="name" value="{{ $location->email }}"
                                        name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Phone</label>
                                    <input type="number" class="form-control" id="name" value="{{ $location->phone }}"
                                        name="phone" required>
                                </div>

                               
                                <div class="mb-3">
                                    <label class="form-label" for="description">Time</label>
                                    <input type="text" class="form-control" id="name" name="time" value="{{ $location->time }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Mapcode</label>
                                    <input type="text" class="form-control" id="name" name="mapcode" value="{{ $location->mapcode }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Maplink</label>
                                    <input type="text" class="form-control" id="name" name="maplink" value="{{ $location->maplink }}">
                                </div>
                                    <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>

                                    <input type="text" class="form-control" id="seotitle"
                                        value="{{ $location->seotitle }}" name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{  $location->seodescription }}</textarea>
                                </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Edit center</button>
                    </form>



                </div>
            </div>

        </div>
    </div>
@endsection
