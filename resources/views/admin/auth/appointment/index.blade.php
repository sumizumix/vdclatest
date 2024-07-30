@extends('layout.admin_header')
@section('admin_content')
<div class="container-fluid">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mb-3">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="query" class="form-control" placeholder="Search" id="search">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary" id="searchBtn">Search</button>
                        </div>
                    </div>
                 
                </div>
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
                        <table class="table mb-0 align-middle" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Test</th>
                                    <th scope="col">Report</th>
                                    <th scope="col">Upload Result </th>
                                </tr>
                            </thead>
                            <tbody id="tableContent">
                                @foreach ($booksamplecollection as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->package }}</td>
                                        <td>{{ $row->test }}</td>
                                       
                                        <td>
                                            @if($row->image== Null)
                                       
                                       <button class="btn btn-warning " disabled>
                                        
                                         Pending
                                      </button>
                                       @else

                                            <a href="{{ asset('uploads/' . $row->image) }}"
                                                target="_blank">View
                                                PDF</a>
                                         @endif
                                        </td>

                                        <td>
                                            <form action="{{ url('admin/updateuploadresult/update/' . $row->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="image">
                                                <input type="hidden" name="existing" value="{{$row->image}}">
                                                <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="noResults"
                        style="
                    display: none;
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
                        Data is not found</div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('downloadReportBtn').addEventListener('click', function () {
        var reportContentClone = document.getElementById('reportContent').cloneNode(true);
        var actionHeaders = reportContentClone.querySelectorAll('th:nth-child(8)');
        var actionCells = reportContentClone.querySelectorAll('td:nth-child(8)');

        actionHeaders.forEach(function(header) {
            header.remove();
        });

        actionCells.forEach(function(cell) {
            cell.remove();
        });

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
            pdf.save('home_sample_collection_details.pdf');

            document.body.removeChild(tempContainer);
        });
    });

    document.getElementById('searchBtn').addEventListener('click', function() {
        var search = document.getElementById('search').value.toLowerCase();
        var rows = document.querySelectorAll('#dataTable tbody tr');
        var found = false;

        rows.forEach(function(row) {
            var cells = row.getElementsByTagName('td');
            var match = false;

            for (var i = 0; i < cells.length - 1; i++) {
                if (cells[i].textContent.toLowerCase().includes(search)) {
                    match = true;
                    break;
                }
            }

            if (match) {
                row.style.display = '';
                found = true;
            } else {
                row.style.display = 'none';
            }
        });

        document.getElementById('noResults').style.display = found ? 'none' : 'block';
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

@endsection
