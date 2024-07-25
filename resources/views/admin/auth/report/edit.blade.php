@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Result Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('admin/report/update/' . $prescription->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Test Date</label>
                                    <input type="date" class="form-control" id="name"
                                        value="{{ $prescription->testdate }}" name="testdate" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Report Date</label>
                                    <input type="date" class="form-control" id="name"
                                        value="{{ $prescription->reportdate }}"name="reportdate" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $prescription->name }}" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Phone</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $prescription->phone }}" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <a href="{{ asset('uploads/' . $prescription->report) }}" target="_blank">View Existing
                                        Result</a>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">New Report *</label>
                                    <input type="file" name="report" class="form-control">
                                </div>
                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>
                                    <input type="text" class="form-control" id="seotitle"
                                        value="{{ $prescription->seotitle }}" name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{$prescription->seodescription }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Update
                                    Result Details</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
