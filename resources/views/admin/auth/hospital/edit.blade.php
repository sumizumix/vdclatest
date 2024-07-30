@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit hospital Details</h5>
                    <div class="card">
                        <div class="card-body ">
                            <form action="{{ url('admin/hospital/update/' . $location->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="labname"
                                        value="{{ $location->name }}" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Address</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $location->address }}" name="address" required>
                                </div>
                               
                                <div class="mb-3">
                                    <label class="form-label" for="description">Phone</label>
                                    <input type="number" class="form-control" id="name" value="{{ $location->phone }}"
                                        name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Website</label>
                                    <input type="text" class="form-control" id="time" value="{{ $location->website }}"
                                        name="website" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Photo</label>
                                    <div>
                                        {{-- <img id="existing-image" src="{{ asset('uploads/' . $location->image) }}" width="100px"> --}}
                                        @if($location->image)
                                     
                                        <img src="{{ asset('uploads/' . $location->image) }}" class="rounded object-fit-cover" width="80px" height="60px">
                                        
                                        @else

                                        No Image
                                        
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Change  Photo</label>
                                    <input type="file" class="form-control" name="image" onchange="displaySelectedImage(event)">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="name">Embedded Map Code</label>
                                    <input type="text" class="form-control" id="mapcode"
                                        value="{{ $location->mapcode }}" name="mapcode" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">MapLink</label>
                                    <input type="text" class="form-control" id="maplink"
                                        value="{{ $location->maplink }}" name="maplink" required>
                                </div>
                                <div>
                                    <h5>SEO Information</h5>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>

                                    <input type="text" class="form-control" id="seotitle"
                                        value="{{ $location->seotitle }}" name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{$location->seodescription }}</textarea>
                                </div>
                        </div>

                    </div>



                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Edit hospital</button>
                    </form>



                </div>
            </div>

        </div>
    </div>
@endsection
