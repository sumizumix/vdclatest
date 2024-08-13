@include('layout.header')

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span
                        class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Order status</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Patients</li>
                        <li>Order status</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover align-middle fs-15 lh-base">
                        <thead>
                            <tr>
                                <th class="bg-base-color text-white">Sl No.</th>
                                <th class="bg-base-color text-white">Product/ Test name</th>
                                <th class="bg-base-color text-white">Payment Details</th>
                                <th class="bg-base-color text-white">Amount</th>
                                <th class="bg-base-color text-white">Date</th>
                                <th class="bg-base-color text-white">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($groupedCart && $groupedCart->count() > 0)
                                @foreach ($groupedCart as $razorid => $rows)
                                    <tr class="order-row align-middle" data-id="{{ $razorid }}">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            @foreach ($rows as $row)
                                                @if ($row->type == 'package')
                                                    {{ $row->pname }}
                                                @elseif($row->type == 'test')
                                                    {{ $row->tname }}
                                                @endif
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>

                                            @if ($row->razorid == null)
                                                {{-- <button class="btn btn-warning btn-sm" disabled>
                                                <i class="fa-solid fa-hourglass"></i> No paid
                                            </button> --}}
                                                <i class="fa-solid fa-hourglass text-yellow"></i>
                                                <span class="text-capitalize fw-600 text-yellow">Not Paid</span>
                                            @else
                                                <input type="hidden" name="razorid" value="{{ $razorid }}">
                                                {{ $razorid }}
                                            @endif

                                        </td>
                                        <td>
                                            {{-- @foreach ($rows as $row)
                                                                        {{ $row->testprice ? $row->testprice : $row->productprice }}<br>
                                                                        @endforeach --}}
                                            @php
                                                $totalAmount = 0;
                                            @endphp

                                            @foreach ($rows as $row)
                                                @if ($row->type == 'package')
                                                    <img
                                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' id='KjOd-Rupee-B' height='10'  viewBox='0 0 170 250'%3E%3Cpath d='M113 24h41l15-23H15L0 24h26c27 0 52 2 62 25H15L0 72h91v1c0 17-14 43-60 43H8v22l90 113h41L45 134c39-2 75-24 80-62h29l15-23h-45c-1-9-5-18-11-25zm0 0' fill='%23000000'/%3E%3C/svg%3E" />{{ $row->productprice }}/-
                                                    @php
                                                        $totalAmount += $row->productprice;
                                                    @endphp
                                                @elseif($row->type == 'test')
                                                    <img
                                                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' id='KjOd-Rupee-B' height='10'  viewBox='0 0 170 250'%3E%3Cpath d='M113 24h41l15-23H15L0 24h26c27 0 52 2 62 25H15L0 72h91v1c0 17-14 43-60 43H8v22l90 113h41L45 134c39-2 75-24 80-62h29l15-23h-45c-1-9-5-18-11-25zm0 0' fill='%23000000'/%3E%3C/svg%3E" />
                                                    {{ $row->testprice }}/-
                                                    @php
                                                        $totalAmount += $row->testprice;
                                                    @endphp
                                                @endif
                                                <br>
                                            @endforeach
                                            ---------------------
                                            {{-- <p>TOTAL: {{ $totalAmount }}/-</p> --}}

                                            <p style="font-weight: bold; color: rgb(118, 14, 139);">TOTAL:
                                                {{ $totalAmount }}/-
                                            </p>


                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($rows->first()->cdate)->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            @php
                                                $status = $rows->first()->status;
                                                $paystatus = $rows->first()->paystatus;
                                            @endphp
                                            @if ($status == 'pending')
                                                <i class="bi bi-exclamation-circle-fill text-yellow"></i>
                                                <span
                                                    class="text-capitalize fw-600 text-yellow">{{ $status }}</span>
                                            @elseif ($status == 'approved' && $paystatus == 0)
                                                <i class="bi bi-check-circle-fill text-yellow"></i>
                                                <span class="text-capitalize fw-600 text-yellow">Pending</span>
                                            @elseif ($status == 'approved' && $paystatus == 1)
                                                {{-- <i class="bi bi-check-circle-fill text-success"></i> --}}
                                                {{-- <span class="text-capitalize fw-600 text-success">Paid</span> --}}
                                                <a href="javascript:void(0);" onclick="downloadPDF(this)"
                                                    class="btn btn-base-color">
                                                    <i class="bi bi-download"></i>
                                                    Download Receipt
                                                </a>
                                            @else
                                                <i class="bi bi-exclamation-circle-fill text-yellow"></i>
                                                <span
                                                    class="text-capitalize fw-600 text-yellow">{{ $status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center pt-60px pb-60px">
                                        <img src="{{ asset('frontend/vdc_images/no-reports-found.svg') }}"
                                            alt="No reports found image" class="opacity-3">
                                        <p class="pt-20px">No orders found</p>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.addimage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.png_support.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const {
            jsPDF
        } = window.jspdf;

        window.downloadPDF = function(element) {
            var row = element.closest("tr"); // Get the closest <tr> from the clicked link
            var cells = row.getElementsByTagName("td");
            var pdf = new jsPDF();
            var y = 25; // Y coordinate for the start of content

            // Add header to PDF
            pdf.setFontSize(22);
            pdf.setFont("times new roman", "bold");
            pdf.setTextColor(118, 14, 139);
            var imgData = '{{ asset('frontend/vdc_images/vdc-logo.png') }}'; // URL to your logo image
            pdf.addImage(imgData, 'PNG', 90, 12, 20, 10, y);
            y += 8;
            pdf.text("Vijayas Diagnostic Centre", 57, y);
            y += 10;

            // Add contact information
            pdf.setFontSize(11);
            pdf.setFont("times new roman", "normal");
            pdf.setTextColor(0, 0, 0);
            pdf.text("Near Vijaya Jubilee Hospital, Pulamon, Kottarakkara", 60, y);
            y += 6;
            pdf.setFontSize(10);
            pdf.text("+91 7034031188 / 7034031199", 75, y);
            y += 5;


            // Extract data from table row
            var rowArray = [];
            for (var j = 0; j < cells.length; j++) {
                rowArray.push(cells[j].innerText);
            }

            // Function to format date from d-m-Y
            function formatDate(dateStr) {
                // Assuming the date is in d-m-Y format, adjust if needed
                var parts = dateStr.split('-');
                var day = parts[0];
                var month = parts[1];
                var year = parts[2];
                return `${day}-${month}-${year}`;
            }

            pdf.text("Date:" + formatDate(rowArray[4]), 150, y);

            pdf.text("Payment Id:" + rowArray[2], 20, y);
            y += 5;
            // Draw underline
            pdf.setDrawColor(118, 14, 139);
            pdf.setLineWidth(1.2);
            pdf.line(20, y, 190, y);
            y += 10;
            // Prepare table data
            pdf.setFont("times new roman", "normal");

            var tableData = [{
                "Sl No.": rowArray[0],
                "Product/ Test name": rowArray[1],
                "Payment Details": rowArray[2],
                "Amount": rowArray[3]
            }];

            // Add table to PDF using autoTable
            // pdf.autoTable({
            //     startY: y,
            //     head: [['Sl No.', 'Product/ Test name', 'Payment Details', 'Amount']],
            //     body: tableData.map(row => [row['Sl No.'], row['Product/ Test name'], row['Payment Details'], row['Amount']]),
            //     theme: 'grid', // You can change the theme to 'striped' or 'plain'
            //     styles: { fontSize: 12,fontFace:'Times New Roman' },
            //     headStyles: { fillColor: [118, 14, 139], textColor: [255, 255, 255] },
            //     margin: { top: y }
            // });
            pdf.autoTable({
                startY: y,
                head: [
                    ['Sl No.', 'Product/ Test name', 'Amount']
                ],
                body: tableData.map(row => [1, row['Product/ Test name'], row['Amount']]),
                theme: 'grid', // You can change the theme to 'striped' or 'plain'
                styles: {
                    fontSize: 12,
                    fontFace: 'Times New Roman'
                },
                headStyles: {
                    fillColor: [118, 14, 139],
                    textColor: [255, 255, 255],
                    valign: 'middle',
                    halign: 'center'
                },
                columnStyles: {

                    0: {
                        halign: 'center'
                    },
                    2: {
                        halign: 'center'
                    },
                    1: {
                        halign: 'center'
                    } // Center align the 'Amount' column
                },
                margin: {
                    top: y
                }
            });




            y += 195;
            // Draw underline
            pdf.setDrawColor(118, 14, 139);
            pdf.setLineWidth(1);
            pdf.line(20, y, 190, y);
            y +=
                10;
            pdf.text("info@vijayadiagnosticcentre.com", 75, y);

            // Save the PDF
            pdf.save("order_details.pdf");
        }
    });
</script>

@include('layout.footer')



{{--


@include('layout.header')

<section class="pt-20px pb-20px top-space-margin page-title-big-typography cover-background round-cursor"
    style="background-image: url({{ asset('frontend/vdc_images/vdc-pages-banner.webp') }}); margin-top: 141px;">
    <div class="container">
        <div class="row h-150px align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0, 1], &quot;translateX&quot;: [-30, 0], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium">
                    <span
                        class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>VDC
                </h1>
                <h4 class="text-white text-shadow-medium fw-500 ls-minus-1px mb-0">Order status</h4>
            </div>
            <div class="col">
                <div class="mt-auto justify-content-end breadcrumb breadcrumb-style-01 fs-14 text-white"
                    data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                    <ul>
                        <li>Patients</li>
                        <li>Order status</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="bg-base-color text-white">Sl No.</th>
                            <th class="bg-base-color text-white">Product/ Test name</th>
                            <th class="bg-base-color text-white">Razorid</th>
                            <th class="bg-base-color text-white">Amount</th>
                            <th class="bg-base-color text-white">Date</th>
                            <th class="bg-base-color text-white">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($cart && $cart->count() > 0)
                        @foreach ($cart as $row)
                        <tr class="order-row" data-id="{{ $row->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->tname ? $row->tname : $row->pname }}</td>
                            <td>
                                <input type="hidden" name="razorid" value="{{ $row->razorid }}">
                                {{ $row->razorid }}
                            </td>
                            <td>{{ $row->testprice ? $row->testprice : $row->productprice }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->cdate)->format('d-m-Y') }}</td>
                            <td>
                                @if ($row->status == 'pending')
                                <i class="bi bi-exclamation-circle-fill text-yellow"></i>
                                <span class="text-capitalize fw-600 text-yellow">{{ $row->status }}</span>
                                @elseif ($row->status == 'approved' && $row->paystatus == 0)
                                <i class="bi bi-check-circle-fill text-success"></i>
                                <span class="text-capitalize fw-600 text-success">{{ $row->status }}</span>
                                @elseif ($row->status == 'approved' && $row->paystatus == 1)
                                <i class="bi bi-check-circle-fill text-success"></i>
                                <span class="text-capitalize fw-600 text-success">Paid</span>
                                <a href="javascript:void(0);" onclick="downloadPDF(this)" class="btn btn-base-color">
                                    <i class="bi bi-download"></i>
                                    Download Receipt
                                </a>
                                @else
                                <i class="bi bi-exclamation-circle-fill text-yellow"></i>
                                <span class="text-capitalize fw-600 text-yellow">{{ $row->status }}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" class="text-center pt-60px pb-60px">
                                <img src="{{ asset('frontend/vdc_images/no-reports-found.svg') }}"
                                    alt="No reports found image" class="opacity-3">
                                <p class="pt-20px">No orders found</p>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.autotable.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const { jsPDF } = window.jspdf;

        window.downloadPDF = function (element) {
            var row = element.closest("tr"); // Get the closest <tr> from the clicked link
            var cells = row.getElementsByTagName("td");
            var pdf = new jsPDF();
            var y = 20; // Y coordinate for the start of content

            // Add header to PDF
            pdf.setFontSize(22);
            pdf.setFont("helvetica", "bold");
            pdf.setTextColor(118, 14, 139);
            var imgData = '{{ asset('frontend/vdc_images/vdc - logo.png') }}'; // URL to your logo image
            pdf.addImage(imgData, 'PNG', 80, 12, 20, 10, y);
            y += 10;
            pdf.text("Vijayas Diagnostic Centre", 47, y);
            y += 10;

            // Add contact information
            pdf.setFontSize(12);
            pdf.setFont("helvetica", "normal");
            pdf.setTextColor(0, 0, 0);
            pdf.text("Near Vijaya Jubilee Hospital, Pulamon, Kottarakkara", 47, y);
            y += 10;
            pdf.text("+91 7034031188 / 7034031199", 59, y);
            y += 5;


            // Extract data from table row
            var rowArray = [];
            for (var j = 0; j < cells.length; j++) {
                rowArray.push(cells[j].innerText);
            }

            // Function to format date from d-m-Y
            function formatDate(dateStr) {
                // Assuming the date is in d-m-Y format, adjust if needed
                var parts = dateStr.split('-');
                var day = parts[0];
                var month = parts[1];
                var year = parts[2];
                return `${day}-${month}-${year}`;
            }

            pdf.text("Date:" + formatDate(rowArray[4]), 150, y);
            y += 5;
            // Draw underline
            pdf.setDrawColor(118, 14, 139);
            pdf.setLineWidth(1.5);
            pdf.line(20, y, 190, y);
            y += 10;
            // Prepare table data
            var tableData = [
                { "Sl No.": rowArray[0], "Product/ Test name": rowArray[1], "Razorid": rowArray[2], "Amount": rowArray[3] }
            ];

            // Add table to PDF using autoTable
            pdf.autoTable({
                startY: y,
                head: [['Sl No.', 'Product/ Test name', 'Razorid', 'Amount']],
                body: tableData.map(row => [row['Sl No.'], row['Product/ Test name'], row['Razorid'], row['Amount']]),
                theme: 'grid', // You can change the theme to 'striped' or 'plain'
                styles: { fontSize: 12 },
                headStyles: { fillColor: [118, 14, 139], textColor: [255, 255, 255] },
                margin: { top: y }
            });

            // Save the PDF
            pdf.save("order_details.pdf");
        }
    });
</script>


@include('layout.footer')

--}}
