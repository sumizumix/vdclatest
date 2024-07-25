

@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Cart Booking Details</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-12" style="text-align: right;">
                                <button id="downloadReportBtnn" class="btn btn-success">
                                    <i class="bi bi-download"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                    </svg>
                                    Download report
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="reportContent"> <!-- Added id here -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->uname }}</td>
                                                <td>{{ $row->tname ? $row->tname : $row->pname }}</td>
                                                <td>{{ $row->quantity }}</td>
                                                <td class="text-nowrap">
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
        </div>
    </div>
    <script>
        document.getElementById('downloadReportBtnn').addEventListener('click', function () {
            html2canvas(document.getElementById('reportContent')).then(canvas => {
                var imgData = canvas.toDataURL('image/png');
                var pdf = new jsPDF('p', 'mm', 'a4');
                var imgWidth = 210; 
                var pageHeight = 295; 
                var imgHeight = canvas.height * imgWidth / canvas.width;
                var heightLeft = imgHeight;

                var position = 0;

                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;

                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }
                pdf.save('cart_booking_details.pdf');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    
@endsection

{{-- @extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Cart Booking Details</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-12" style="text-align: right;">
                                <button id="downloadReportBtnn" class="btn btn-success">
                                    <i class="bi bi-download"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                    </svg>
                                    Download report
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 align-middle">

                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->uname }}</td>
                                                <td>{{ $row->tname ? $row->tname : $row->pname }}</td>
                                                <td>{{ $row->quantity }}</td>
                                                <td class="text-nowrap">
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
        </div>
    </div>
    <script>
        document.getElementById('downloadReportBtnn').addEventListener('click', function () {
            html2canvas(document.getElementById('reportContent')).then(canvas => {
                var imgData = canvas.toDataURL('image/png');
                var pdf = new jsPDF('p', 'mm', 'a4');
                var imgWidth = 210; 
                var pageHeight = 295; 
                var imgHeight = canvas.height * imgWidth / canvas.width;
                var heightLeft = imgHeight;
    
                var position = 0;
    
                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;
    
                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }
                pdf.save('ct_scan_booking_details.pdf');
            });
        });
    </script>
@endsection --}}
