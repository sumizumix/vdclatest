@extends('layout.admin_header')
@section('admin_content')
@extends('layout.admin_sidebar')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
   
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
     
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Banner Details</h5>
              <div class="card">
                  <div class="card-body p-4">
                      <table class="table">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Image</th>
                              <th scope="col">Action</th>

                            </tr>
                          </thead>
                         
                      </table>


                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
