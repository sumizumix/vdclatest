



@extends('layout.admin_header')
@section('admin_content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Test Details</h5>
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ url('admin/test/update/' . $test->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Test Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $test->name }}" name="name" required>
                        </div>

                        @php
                            $cleaned_parameter = str_replace(['\"', '\\\"', '"'], '', $test->parameter); // Removes \" and \"
                            $parameters = explode(",", trim($cleaned_parameter, "[]")); // Explode and trim square brackets
                        @endphp
                        
                        <div class="mb-3" id="parameters-container">
                            <div class="row justify-content-evenly align-items-center d-flex">
                                @foreach($parameters as $param)
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Parameter</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" class="form-control mb-3" name="parameter[]" style="width: 500px;" required value="{{ $param }}">
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger mb-3 remove-field">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-primary" id="add-field">Add More</button>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <input type="number" class="form-control" id="price" value="{{ $test->price }}" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="testcode">Test Code</label>
                            <input type="text" class="form-control" id="testcode" name="testcode" value="{{ $test->testcode }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="Schedule">Schedule</label>
                            <input type="text" class="form-control" id="Schedule" name="Schedule" value="{{ $test->Schedule }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="prerequisite">Pre-requisite</label>
                            <input type="text" class="form-control" id="prerequisite" name="prerequisite" value="{{ $test->prerequisite }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="reporttime">Report Time</label>
                            <input type="text" class="form-control" id="reporttime" name="reporttime" value="{{ $test->reporttime }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Featured Photo</label>
                            <div>
                                <img id="existing-image" src="{{ asset('uploads/' . $test->image) }}" width="100px">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Change Featured Photo</label>
                            <input type="file" class="form-control" name="image" onchange="displaySelectedImage(event)">
                        </div>
                        <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                        <div class="mb-3">
                            <label class="form-label" for="seotitle">Title</label>
                            <input type="text" class="form-control" id="seotitle" value="{{ $test->seotitle }}" name="seotitle" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="seodescription">SEO Description</label>
                            <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{ $test->seodescription }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Edit Test</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Event listener for adding new fields
        $('#add-field').click(function() {
            let newFieldHtml = `
                <div class="col-12 mb-3">
                    <label class="form-label">Parameter</label>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" name="parameter[]" style="width: 500px;" required>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-danger mb-3 remove-field">Delete</button>
                        </div>
                    </div>
                </div>`;
            $('#parameters-container').append(newFieldHtml);
        });

        // Delegate the click event to dynamically added delete buttons
        $(document).on('click', '.remove-field', function() {
            $(this).closest('.col-12').remove();
        });
    });
</script>
@endsection
