

@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                        <button id="downloadReportBtn" class="btn btn-success">
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
      
          
            <div id="reportContent">
                <div class="card">
                    <div class="card-body">
                    <h2 class="card-title fw-semibold mb-4 text-center">Home Sample Collection Details</h2>
                        <div class="table-responsive">
                            <table class="table mb-0 align-middle">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile No</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Package</th>
                                        <th scope="col">Test</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($booksamplecollection as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td>{{ $row->address }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->package }}</td>
                                            <td>{{ $row->test }}</td>
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
                                                    <a href="{{ route('sample.approve', $row->id) }}" class="btn btn-success btn-sm">
                                                        <i class="fa-solid fa-person-circle-check"></i> Approve
                                                    </a>
                                                    <a href="{{ route('sample.reject', $row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">
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
    <script>
        document.getElementById('downloadReportBtn').addEventListener('click', function () {
            // Clone the report content
            var reportContentClone = document.getElementById('reportContent').cloneNode(true);

            // Remove the "Action" column from the cloned table
            var actionHeaders = reportContentClone.querySelectorAll('th:nth-child(8)');
            var actionCells = reportContentClone.querySelectorAll('td:nth-child(8)');

            actionHeaders.forEach(function(header) {
                header.remove();
            });

            actionCells.forEach(function(cell) {
                cell.remove();
            });
  // Apply styles to the cloned table for the desired look
  var clonedTable = reportContentClone.querySelector('table');
            clonedTable.style.color = 'black'; // Set text color to black for table data
            clonedTable.style.fontWeight = 'normal'; // Reset font weight to normal for table data
            clonedTable.style.backgroundColor = 'white'; // Set background color to white for table
    
            var tableHeadings = clonedTable.querySelectorAll('th');
            tableHeadings.forEach(function(heading) {
                heading.style.backgroundColor = 'black'; // Set background color to black for table headings
                heading.style.color = 'white'; // Set text color to white for table headings
            });
            // Create a temporary container to hold the cloned table for rendering
            var tempContainer = document.createElement('div');
            tempContainer.appendChild(reportContentClone);
            document.body.appendChild(tempContainer);

            // Use html2canvas to create a screenshot of the cloned table without the "Action" column
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
                pdf.save('home_sample_collection_details.pdf');

                // Remove the temporary container
                document.body.removeChild(tempContainer);
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    {{-- <script>
        document.getElementById('downloadReportBtn').addEventListener('click', function () {
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
    </script> --}}
@endsection

