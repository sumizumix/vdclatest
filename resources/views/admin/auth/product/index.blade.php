@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title fw-semibold m-0">Package Details</h5>
                        <a href="{{ route('admin.auth.product.create') }}" class="btn btn-primary btn-sm">
                            <i class="ti ti-plus"></i> Add New
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6  mx-auto">
                                        <form action="{{ route('admin.auth.product.search') }}" method="POST">
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
                            @if (count($product) == 0)
                                <div class="alert alert-info" role="alert"
                                    style="

                                text-align: center;
                                color: #763f98;
                                font-size: 20px;
                                font-weight: bold;
                                margin-top: 20px;
                                padding: 10px;
                                border: 2px solid #763f98;
                    border-radius: 5px;
            background-color: rgb(238 226 246);
                            ">
                                    No results found.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table mb-0 align-middle">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Package Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src="{{ asset('uploads/' . $row->image) }}"
                                                            class="rounded object-fit-cover" width="100px" height="80px">
                                                    </td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>₹{{ $row->price }}</td>

                                                    <td class="text-nowrap">
                                                        <a href="{{ URL::to('admin/product/edit/' . $row->id) }}"
                                                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>
                                                            Edit</a>
                                                        <a href="{{ URL::to('admin/product/delete/' . $row->id) }}"
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
