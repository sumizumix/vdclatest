@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title fw-semibold m-0">hospital Details</h5>
                        <a href="{{ route('admin.auth.hospital.create') }}" class="btn btn-primary btn-sm">
                            <i class="ti ti-plus"></i> Add New
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table  mb-0 align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Hospital Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">photo</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($locationitem as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->name }}</td>
                                              
                                                <td>{{ $row->address }}</td>
                                                <td>{{ $row->phone }}</td>
                                                
                                                <td>
                                                    @if($row->image)
                                     
                                                    <img src="{{ asset('uploads/' . $row->image) }}" class="rounded object-fit-cover" width="80px" height="60px">
                                                    
                                                    @else

                                                    No Image
                                                    
                                                    @endif
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ URL::to('admin/hospital/edit/' . $row->id) }}"
                                                        class="btn btn-warning btn-sm"><i class="ti ti-pencil"></i>
                                                        Edit</a>
                                                    <a href="{{ URL::to('admin/hospital/delete/' . $row->id) }}"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="ti ti-trash"></i>Delete</a>
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
