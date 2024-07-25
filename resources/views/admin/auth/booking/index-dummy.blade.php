@extends('layout.admin_header')
@section('admin_content')
<div class="container-fluid">
  <div class="card">
      <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Booking Details</h5>
          <div class="card">
              <div class="card-body p-4">
                  <table class="table">

                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Package Name</th>
                              <th scope="col">Name</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Email</th>

                              <th scope="col">Action</th>

                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($bookpackage as $row)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $row->name }}</td>
                                  <td>{{ $row->product_name }}</td>
                                  <td>{{ $row->name }}</td>
                                  <td>{{ $row->phone }}</td>
                                  <td>{{ $row->email }}</td>



                                  <td>
                                      @if ($row->status == 'approved')
                                          <button class="btn btn-success btn-sm" disabled>
                                              <i class="fa-solid fa-check-circle"></i> Approved
                                          </button>
                                      @elseif($row->status == 'rejected')
                                          <button class="btn btn-danger btn-sm" disabled>
                                              <i class="fa-solid fa-times-circle"></i> Rejected
                                          </button>
                                      @else
                                          <a href="{{ route('package.approve', $row->id) }}"
                                              class="btn btn-success btn-sm">
                                              <i class="fa-solid fa-person-circle-check"></i> Approve
                                          </a>
                                          <a href="{{ route('package.reject', $row->id) }}"
                                              class="btn btn-danger btn-sm"
                                              onClick="return confirm('Are you sure?');">
                                              <i class="fas fa-trash-alt"></i> Reject
                                          </a>
                                      @endif
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
@endsection
