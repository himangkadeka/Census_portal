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
                <div class="col-md-12">
                <!-- Left side columns -->
                    <div class="col-lg-10 mx-auto">
                        <div class="card shadow">

                            <div class="card-header bg-primary">

                                <h3 class="text-light fw-bold" style="display: inline-block;">View Category</h3>

                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class=" btn btn-dark" style="float: right;">
                                    <i class="bi bi-plus-circle"></i>&nbsp<span>Create New Category</span></button>
                            </div>
                            <div class="card-body">
                                <table class="table ">
                                    <thead>

                                    <tr >
                                        <th scope="col">Serial</th>
                                        <th scope="col">Gallery Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @if(count($showCategory)>0)
                                    @foreach($showCategory as $key=>$category)
                                    <tr>
                                        @if($page_no > 0)
                                            <td>{{$page_no.++$key}}</td>
                                            @else
                                            <td>{{++$key}}</td>
                                        @endif

                                        <td>{{$category->name}}</td>
                                        <td>@if($category->status== 1)
                                                <span class="badge bg-success">active</span>
                                            @else
                                                <span class="badge bg-danger">inactive</span>
                                        </td>
                                        @endif
                                        <td>
                                            <a href="" class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="btn btn-danger btn-sm "><i class="bi bi-recycle"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <th colspan="3" class="text-center">No data found</th>
                                    </tr>
                                    @endif
                                    </tbody>
                                </table>
                                {!! $showCategory->links() !!}
                            </div>
                    </div>
                </div>
                </div>



            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{url('category/save-category')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                                @csrf
                                <div class="my-2">
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Title" >
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="my-2">
                                    <input type="number" name="priority" id="priority" class="form-control @error('priority') is-invalid @enderror" placeholder="Priority" >
                                    @error('priority')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="my-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="status" id="inlineCheckbox1" value="1" checked>
                                        <label class="form-check-label" for="inlineCheckbox1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="status" id="inlineCheckbox2" value="0">
                                        <label class="form-check-label" for="inlineCheckbox2">Block</label>
                                    </div>
                                </div>


                                {{--                                            <div class="my-2">--}}
                                {{--                                                <textarea name="content" id="content" rows="6" class="form-control " placeholder="Post Content"></textarea>--}}
                                {{--                                                @error('content')--}}
                                {{--                                                <div class="invalid-feedback">{{ $message }}</div>--}}
                                {{--                                                @enderror--}}
                                {{--                                            </div>--}}

{{--                                <div class="my-2">--}}
{{--                                    <input type="submit" value="Submit" class="btn btn-primary">--}}
{{--                                </div>--}}

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
{{--            <script>--}}
{{--                @if(session()->has('success'))--}}
{{--                $(document).ready(function(){--}}
{{--                    alert('{{session()->get('success')}}');--}}
{{--                });--}}

{{--                @endif--}}

{{--            </script>--}}

        </section>
    </x-slot>
</x-layout>
