@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title fw-semibold m-0">Upload Result Details</h5>
                        <a href="{{ route('admin.auth.report.create') }}" class="btn btn-primary btn-sm">
                            <i class="ti ti-plus"></i> Add New
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6  mx-auto">
                                        <form action="{{ route('admin.auth.report.search') }}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" name="query" class="form-control"
                                                    placeholder="Search">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if (count($prescription) == 0)
                                <div class="alert alert-info" role="alert">
                                    No results found.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table mb-0 align-middle"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Test Date</th>
                                                <th scope="col">Report Date</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Report</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prescription as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-nowrap">{{ \Carbon\Carbon::parse($row->testdate)->format('d-m-Y') }}</td>
                                                    <td class="text-nowrap">{{ \Carbon\Carbon::parse($row->reportdate)->format('d-m-Y') }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>
                                                        <a href="{{ asset('uploads/' . $row->report) }}"
                                                            target="_blank">View
                                                            PDF</a>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <a href="{{ URL::to('admin/report/edit/' . $row->id) }}"
                                                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>
                                                            Edit</a>
                                                        <a href="{{ URL::to('admin/report/delete/' . $row->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onClick="return confirm('Are you sure?');"><i
                                                                class="fas fa-trash-alt"></i>Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
