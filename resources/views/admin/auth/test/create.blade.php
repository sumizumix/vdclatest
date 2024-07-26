@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Test Details</h5>
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.test.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Test Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div> --}}
                                <div class="mb-12">
                                    <label class="form-label" for="parameter-1">Tests</label>
                                    <div id="parameters-container">
                                        <input type="text" class="form-control mb-3" name="parameter[]"
                                            style="width: 300px;" required>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="add-field">Add Tests</button>

                                <div class="mb-3">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="">Photo *</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Test code</label>
                                    <input type="text" class="form-control" id="testcode" name="testcode" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Schedule </label>
                                    <input type="text" class="form-control" id="Schedule" name="Schedule" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Pre-requisite</label>
                                    <input type="text" class="form-control" id="prerequisite" name="prerequisite" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Report time</label>
                                    <input type="text" class="form-control" id="reporttime" name="reporttime" required>
                                </div>
                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>
                                    <input class="form-control" id="seotitle" name="seotitle" required></input>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"> Add New Test</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('add-field').addEventListener('click', function() {
            const container = document.getElementById('parameters-container');
            const index = container.children.length + 1;
            const newField = document.createElement('div');
            newField.classList.add('mb-3');
            newField.innerHTML = `
               
                <input type="text" class="form-control col-3" name="parameter[]" style="width: 300px;"  required>
            `;
            container.appendChild(newField);
        });
    </script>
@endsection
