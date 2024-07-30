@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6  mx-auto">
                            <!--<form action="{{ route('admin.auth.cartindex.search') }}" method="POST">-->
                            @csrf
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" placeholder="Search"
                                    id="search">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary" id="searchBtn">Search</button>
                                </div>
                            </div>
                            <!--</form>-->
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12" style="text-align: right;">
                                <button id="downloadReportBtn" class="btn btn-success">
                                    <i class="bi bi-download"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg>
                                    Download report
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card" id="reportContent">
                        <div class="card-body">
                            <h2 class="card-title fw-semibold mb-4 text-center">Cart Booking Details</h2>
                            <div class="table-responsive">
                                <table class="table mb-0 align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Payment Id</th>
                                            <!--<th scope="col">Action</th>-->
                                            <th scope="col">Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableContent">
                                        @foreach ($cart as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->uname }}</td>
                                                <td>{{ $row->tname ? $row->tname : $row->pname }}</td>
                                                <td>{{ $row->quantity }}</td>
                                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>


                                                <td>@if ($row->razorid == NULL)
                                                    <button class="btn btn-success btn-sm" disabled>Not Paid
                                                             <i class="fa-solid fa-check-circle"></i> 
                                                    </button>
                                                    @else
                                                    {{ $row->razorid }}</td>
                                                    @endif


                                                <!--<td class="text-nowrap">-->
                                                <!--    @if ($row->status == 'approved')-->
                                                <!--        <button class="btn btn-success btn-sm" disabled>-->
                                                <!--            <i class="fa-solid fa-check-circle"></i> Approved-->
                                                <!--        </button>-->
                                                <!--    @elseif($row->status == 'rejected')-->
                                                <!--        <button class="btn btn-danger btn-sm" disabled>-->
                                                <!--            <i class="fa-solid fa-times-circle"></i> Rejected-->
                                                <!--        </button>-->
                                                <!--    @else-->
                                                <!--        <a href="{{ route('package.approve', $row->id) }}"-->
                                                <!--            class="btn btn-success btn-sm">-->
                                                <!--            <i class="fa-solid fa-person-circle-check"></i> Approve-->
                                                <!--        </a>-->
                                                <!--        <a href="{{ route('package.reject', $row->id) }}"-->
                                                <!--            class="btn btn-danger btn-sm"-->
                                                <!--            onClick="return confirm('Are you sure?');">-->
                                                <!--            <i class="fas fa-trash-alt"></i> Reject-->
                                                <!--        </a>-->
                                                <!--    @endif-->
                                                <!--</td>-->
                                                <td>
                                                    @if ($row->paystatus == 1)
                                                        <button class="btn btn-warning btn-sm" disabled>
                                                            <i class="fa-solid fa-hourglass"></i> Paid
                                                        </button>
                                                    @else
                                                        <button class="btn btn-warning btn-sm" disabled>
                                                            <i class="fa-solid fa-hourglass"></i> Pending
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div id="noResults" style="display: none;">
                                    Data is not found
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script>
        document.getElementById('downloadReportBtn').addEventListener('click', function() {
            var reportContentClone = document.getElementById('reportContent').cloneNode(true);
            
            // Remove the "Action" column header
            var actionHeaders = reportContentClone.querySelectorAll('th:nth-child(7)');
            actionHeaders.forEach(function(header) {
                header.remove();
            });

            // Remove the "Action" column cells
            var actionCells = reportContentClone.querySelectorAll('td:nth-child(7)');
            actionCells.forEach(function(cell) {
                cell.remove();
            });

            // Apply styles to the cloned table
            var clonedTable = reportContentClone.querySelector('table');
            clonedTable.style.color = 'black';
            clonedTable.style.fontWeight = 'normal';
            clonedTable.style.backgroundColor = 'white';

            var tableHeadings = clonedTable.querySelectorAll('th');
            tableHeadings.forEach(function(heading) {
                heading.style.backgroundColor = 'black';
                heading.style.color = 'white';
            });

            var tempContainer = document.createElement('div');
            tempContainer.appendChild(reportContentClone);
            document.body.appendChild(tempContainer);

            html2canvas(tempContainer).then(canvas => {
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

                document.body.removeChild(tempContainer);
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $("#searchBtn").click(function() {
            var search = $('#search').val();
            var array = [];
            var found = false;

            $("#tableContent").find("td").each(function() {
                array.push($(this));
                $(this).hide();
            });

            array.forEach(function(td) {
                if (td.text().includes(search)) {
                    var row = td.parent();
                    row.children().show();
                    found = true;
                }
            });

            if (!found) {
                $("#noResults").show();
            } else {
                $("#noResults").hide();
            }
        });
    </script>
@endsection
