@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Prescription Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6  mx-auto">
                                        <form action="{{ route('admin.auth.viewprescription.search') }}" method="POST">
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

                                                <th scope="col">Name</th>
                                                <th scope="col">Phone</th>

                                                <th scope="col">Report</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prescription as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>
                                                        <!-- Link to view the PDF -->
                                                        <a href="{{ asset('uploads/' . $row->prescription) }}"
                                                            target="_blank" download
                                                            class="btn btn-sm btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-success">
                                                            <span>
                                                                <span class="btn-text">Download</span>
                                                                <span class="btn-icon"><i
                                                                        class="feather icon-feather-download"></i></span>
                                                                <span class="btn-icon"><i
                                                                        class="feather icon-feather-download"></i></span>
                                                            </span>
                                                        </a>
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
