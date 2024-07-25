@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Member Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('admin/team/update/' . $team->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Member Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $team->name }}" a
                                        name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Designation</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $team->designation }}" a name="designation" required>
                                </div>

                               <div class="mb-3">
                                    <label class="form-label" for="">Featured Photo</label>
                                    <div>
                                        <img id="existing-image" src="{{ asset('uploads/' . $team->image) }}" width="100px">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Change Featured Photo</label>
                                    <input type="file" class="form-control" name="image" onchange="displaySelectedImage(event)">
                                </div>
                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>

                                    <input type="text" class="form-control" id="seotitle" value="{{ $team->seotitle }}"
                                        name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{$team->seodescription }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"> Edit Member</button>
                            </form>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
