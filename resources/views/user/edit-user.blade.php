<x-layout>
    <x-slot name="title">
        Update User Details
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>Update User Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Update User Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="col-md-2"></div>
                <!-- Left side columns -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span>Update User Details</span></h5>
                            <form action="{{url('menu/update-main-menu')}}" method="post">

                                @csrf
                                <input type="hidden" name="id" value="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Email-Id</label>
                                    <input type="text" class="form-control" id="email" name="email" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Contact</label>
                                    <input type="text" class="form-control" id="contact" name="contact" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Is Active</label>
                                    <select class="form-select" name="isactive" aria-label="Default select example">
                                        {{--                                        <option value="">Select</option>--}}

                                        {{--                                        <option value="{{$editmainmenu->isactive == 1 ? 'Yes' : 'No'}}">{{$editmainmenu->isactive == 1 ? 'Yes' : 'No'}}</option>--}}
                                        {{--                                        <option value="{{$editmainmenu->isactive == 0 ? 'No' : 'Yes'}}">{{$editmainmenu->isactive == 0 ? 'No' : 'Yes'}}</option>--}}
                                        <option value="" selected></option>
                                        @if($editmainmenu->isactive==0)
                                            <option value="1">Yes</option>
                                        @else
                                            <option value="0">No</option>
                                        @endif

                                    </select>
                                </div>


                                <button class="btn btn-outline-danger mt-3" type="submit">Update</button>
                                <a href="{{route('')}}" class="btn btn-outline-success mt-3">Go Back</a>
                            </form>
                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif


                        </div>
                    </div>

                </div><!-- End Left side columns -->

            </div>
        </section>
    </x-slot>
</x-layout>
