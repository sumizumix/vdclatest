@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Upload Result</h5>
                <div class="card">
                    <div class="card-body p-4">
                        <form action="{{ route('admin.report.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Test Date</label>
                                <input type="date" class="form-control" id="name" name="testdate" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Report Date</label>
                                <input type="date" class="form-control" id="name" name="reportdate" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Phone</label>
                                <input type="text" class="form-control" id="name" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="">Photo *</label>
                                <div>
                                    <input type="file" name="report">
                                </div>
                            </div>

                            <div> <h5>SEO Information</h5></div>

                            <div class="form-group">
                                 <label for="description">Title</label>
                                 <textarea class="form-control" id="seotitle"  name="seotitle" rows="3" required></textarea>
                             </div>
                             <div class="form-group">
                                 <label for="description">Description</label>
                                 <textarea class="form-control" id="seodescription"  name="seodescription" rows="3" required></textarea>
                             </div>
                         </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add
                                Result</button>
                        </form>



                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
