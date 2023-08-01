<x-layout>
    <x-slot name="title">
        Add New user
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>Add User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="section dashboard">
            <div class="vh-90">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                            <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-4 mt-0">User Registration</p>
                                            @if ($errors->any())
                                                {{ implode('', $errors->all(':message')) }}
                                            @endif
                                            <form class="mx-1 mx-md-4" action="{{url('register')}}" method="post">
                                                @csrf
                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fa fa-user fa-lg me-3 fa-fw"></i>

                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example1c">First Name</label>
                                                        <input type="text" id="firstname" name="first_name" class="form-control" />

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fa fa-user fa-lg me-3 fa-fw"></i>

                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example1c">Last Name</label>
                                                        <input type="text" id="lastname" name="last_name" class="form-control" />

                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example3c">Your Email</label>
                                                        <input type="email" id="email" name="email" class="form-control" />

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example3c">Your Contact</label>
                                                        <input type="number" id="contact" name="contact" class="form-control" />

                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example4c">Password</label>
                                                        <input type="password" id="password" name="password" class="form-control" />

                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-2">
                                                        <label class="form-label" for="form3Example4c">User Status</label>
                                                        <select class="form-control form-control-md" name="isactive" >
                                                            <option selected disabled>Choose Option</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-2">
                                                        <label class="form-label" for="form3Example4c">User Role</label>
                                                        <select class="form-control form-control-md" name="role" >
                                                            <option selected disabled>Choose Option</option>
                                                            <option value="superadmin">Super Admin</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="employee">Employee</option>
                                                            <option value="user">User</option>
                                                        </select>

                                                    </div>
                                                </div>
{{--                                                <div class="form-check d-flex justify-content-center mb-5">--}}
{{--                                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />--}}
{{--                                                    <label class="form-check-label" for="form2Example3">--}}
{{--                                                        I agree all statements in <a href="#!">Terms of service</a>--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-outline-primary btn-md">Register</button>
                                                </div>

                                            </form>

                                                @if(session()->has('success'))
                                                    <div class="alert alert-success alert-dismissible fade show">
                                                        <i class="bi bi-check-circle me-1"></i>
                                                        {{session('success')}}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif

                                        </div>
                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                                 class="img-fluid" alt="Sample image">


                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>

            </section>


    </x-slot>
</x-layout>
