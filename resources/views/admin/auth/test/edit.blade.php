@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Test Details</h5>
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ url('admin/test/update/' . $test->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Test Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $test->name }}" a
                                        name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="price">parameter</label>
                                    <input type="text" class="form-control" id="price" value="{{ $test->parameter }}"
                                        name="parameter" required>
                                        <div id="parameters-container">
                                          
                                        <button type="button" class="btn btn-primary" id="add-field">Add Parameter</button>
                                      
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="number" class="form-control" id="price" value="{{ $test->price }}"
                                        name="price" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Test code</label>
                                    <input type="text" class="form-control" id="testcode" name="testcode"  value="{{ $test->testcode }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Schedule </label>
                                    <input type="text" class="form-control" id="Schedule" name="Schedule"  value="{{ $test->Schedule }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Pre-requisite</label>
                                    <input type="text" class="form-control" id="prerequisite" name="prerequisite"  value="{{ $test->prerequisite }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Report time</label>
                                    <input type="text" class="form-control" id="reporttime" name="reporttime"  value="{{ $test->reporttime }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Featured Photo</label>
                                    <div>
                                        <img id="existing-image" src="{{ asset('uploads/' . $test->image) }}" width="100px">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Change Featured Photo</label>
                                    <input type="file" class="form-control" name="image" onchange="displaySelectedImage(event)">
                                </div>
                                <h5 class="card-title fw-semibold mb-4">SEO Information</h5>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Title</label>
                                    <input type="text" class="form-control" id="seotitle" value="{{ $test->seotitle }}"
                                        name="seotitle" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description"> Seo Description</label>
                                    <textarea class="form-control" id="seodescription" name="seodescription" rows="3" required>{{$test->seodescription }}</textarea>
                                </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Edit Test</button>
                    </form>



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
