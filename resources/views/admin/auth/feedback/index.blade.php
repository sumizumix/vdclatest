@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title fw-semibold m-0">Feedback</h5>
                      
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table mb-0 align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedback as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                             
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->comment }}</td>
<td>{{\Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>

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
