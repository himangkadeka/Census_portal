<x-layout>
    <x-slot name="title">
        Upload Images
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>Update Images</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Upload Images</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="container mt-5">

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    <div class="card">--}}

{{--                        <div class="card-header text-center font-weight-bold">--}}
{{--                            <h2 class="text-left">Upload Images</h2>--}}
{{--                        </div>--}}

{{--                        <div class="card-body ">--}}
{{--                            <form method="POST" enctype="multipart/form-data" id="upload-image" action="">--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 mt-3 align-center">--}}
{{--                                        <div class="form-group col-md-4">--}}
{{--                                            <label for="">Title Of Image</label>--}}
{{--                                            <input type="text" name="title" class="form-control">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-md-4 mt-3">--}}
{{--                                            <label for="inputState">Category</label>--}}
{{--                                            <select id="inputState" class="form-control">--}}
{{--                                                <option selected>Select Category</option>--}}
{{--                                                <option>...</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group mt-3">--}}

{{--                                            <input type="file" name="image" placeholder="Choose image" id="image">--}}
{{--                                            @error('image')--}}
{{--                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group mt-3">--}}
{{--                                            <div class="custom-control custom-radio float-left">--}}
{{--                                                <input class="custom-control-input" value="1" type="radio" id="statusActive" name="status" checked="">--}}
{{--                                                <label for="statusActive" class="custom-control-label">Active</label>--}}
{{--                                            </div>--}}

{{--                                            <div class="custom-control custom-radio float-left ml-3">--}}
{{--                                                <input class="custom-control-input" value="0" type="radio" id="statusBlock" name="status">--}}
{{--                                                <label for="statusBlock" class="custom-control-label">Block</label>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <div class="col-md-12 mt-4">--}}
{{--                                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}

{{--                        </div>--}}

{{--                    </div>--}}
                        <div class="row my-3">
                            <div class="col-lg-8 mx-auto">
{{--                                <button href="" class=" btn btn-warning">Create Category</button>--}}

                                <div class="card shadow">

                                    <div class="card-header bg-primary">

                                        <h3 class="text-light fw-bold" style="display: inline-block;">Upload New Image</h3>


                                    </div>
                                    <div class="card-body p-4">
                                        <form action="/post" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="my-2">
                                                <input type="text" name="title" id="title" class="form-control " placeholder="Title" >
                                                @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="my-2">
                                                <select class="form-select" name="category_id" aria-label="Default select example">
                                                    <option value="1">Select Category</option>
                                                @error('category')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </select>
                                            </div>

                                            <div class="my-2">
                                                <input type="number" name="priority" id="category" class="form-control" placeholder="Priority" >
                                                @error('category')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="my-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                                    <label class="form-check-label" for="inlineCheckbox1">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Block</label>
                                                </div>
                                            </div>

                                            <div class="my-2">
                                                <input type="file" name="file" id="file" accept="image/*" class="form-control ">
                                                @error('file')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

{{--                                            <div class="my-2">--}}
{{--                                                <textarea name="content" id="content" rows="6" class="form-control " placeholder="Post Content"></textarea>--}}
{{--                                                @error('content')--}}
{{--                                                <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

                                            <div class="my-2">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
