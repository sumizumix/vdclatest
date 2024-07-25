@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title fw-semibold m-0"> Members</h5>
                        <a href="{{ route('admin.auth.team.create') }}" class="btn btn-primary btn-sm">
                            <i class="ti ti-plus"></i> Add New
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table mb-0 align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($team as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('uploads/' . $row->image) }}" class="rounded object-fit-cover" width="80px" height="60px"></td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->designation }}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ URL::to('admin/team/edit/' . $row->id) }}"
                                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                    <a href="{{ URL::to('admin/team/delete/' . $row->id) }}"
                                                        class="btn btn-danger btn-sm"
                                                        onClick="return confirm('Are you sure?');"><i
                                                            class="fas fa-trash-alt"></i>Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
