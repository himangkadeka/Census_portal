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
{{--            <div class="row">--}}
{{--                <div class="col-md-2"></div>--}}
{{--                <!-- Left side columns -->--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title"><span>Add New User</span></h5>--}}
{{--                            <form action="{{url('menu/add-user')}}" method="post">--}}
{{--                                @csrf--}}

{{--                                <div class="mb-3">--}}
{{--                                    <label for="name" class="form-label">First Name</label>--}}
{{--                                    <input type="text" class="form-control" id="firstname" name="firstname">--}}
{{--                                </div>--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label for="name" class="form-label">Last Name</label>--}}
{{--                                    <input type="text" class="form-control" id="lastname" name="lastname">--}}
{{--                                </div>--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label for="name" class="form-label">Email-id</label>--}}
{{--                                    <input type="text" class="form-control" id="emailid" name="emailid">--}}
{{--                                </div>--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label for="name" class="form-label">Mobile No</label>--}}
{{--                                    <input type="text" class="form-control" id="contact" name="contact">--}}
{{--                                </div>--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label for="name" class="form-label">Password</label>--}}
{{--                                    <input type="text" class="form-control" id="password" name="password">--}}
{{--                                </div>--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label for="name" class="form-label">Active</label>--}}
{{--                                    <input type="text" class="form-control" id="isactive" name="isactive">--}}
{{--                                </div>--}}


{{--                                <button class="btn btn-outline-primary mt-3" type="submit">Add Menu</button>--}}
{{--                            </form>--}}
{{--                            <div class="mt-3">--}}
{{--                                @if(session()->has('success'))--}}
{{--                                    <div class="alert alert-success">--}}
{{--                                        {{session('success')}}--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{--                    <div class="row">--}}
{{--                    --}}{{--                        <div class="col-12">--}}
{{--                    --}}{{--                            <div class="card">--}}

{{--                    --}}{{--                                <div class="filter">--}}
{{--                    --}}{{--                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                    --}}{{--                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                    --}}{{--                                        <li class="dropdown-header text-start">--}}
{{--                    --}}{{--                                            <h6></h6>--}}
{{--                    --}}{{--                                        </li>--}}

{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                    --}}{{--                                    </ul>--}}
{{--                    --}}{{--                                </div>--}}

{{--                    --}}{{--                                <div class="card-body">--}}
{{--                    --}}{{--                                    <h5 class="card-title"><span></span></h5>--}}

{{--                    --}}{{--                                    <!-- Line Chart -->--}}
{{--                    --}}{{--                                    <div id="reportsChart"><h1>Welcome Administrator</h1></div>--}}



{{--                    --}}{{--                                </div>--}}

{{--                    --}}{{--                            </div>--}}
{{--                    --}}{{--                        </div><!-- End Reports -->--}}

{{--                    --}}{{--                        <!-- Recent Sales -->--}}
{{--                    --}}{{--                        <div class="col-12">--}}
{{--                    --}}{{--                            <div class="card recent-sales overflow-auto">--}}

{{--                    --}}{{--                                <div class="filter">--}}
{{--                    --}}{{--                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                    --}}{{--                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                    --}}{{--                                        <li class="dropdown-header text-start">--}}
{{--                    --}}{{--                                            <h6></h6>--}}
{{--                    --}}{{--                                        </li>--}}

{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#"></a></li>--}}
{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#"></a></li>--}}
{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#"></a></li>--}}
{{--                    --}}{{--                                    </ul>--}}
{{--                    --}}{{--                                </div>--}}

{{--                    --}}{{--                                <div class="card-body">--}}
{{--                    --}}{{--                                    <h5 class="card-title"> <span></span></h5>--}}

{{--                    --}}{{--                                </div>--}}

{{--                    --}}{{--                            </div>--}}
{{--                    --}}{{--                        </div><!-- End Recent Sales -->--}}

{{--                    --}}{{--                        <!-- Top Selling -->--}}
{{--                    --}}{{--                        <div class="col-12">--}}
{{--                    --}}{{--                            <div class="card top-selling overflow-auto">--}}

{{--                    --}}{{--                                <div class="filter">--}}
{{--                    --}}{{--                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                    --}}{{--                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                    --}}{{--                                        <li class="dropdown-header text-start">--}}
{{--                    --}}{{--                                            <h6>Filter</h6>--}}
{{--                    --}}{{--                                        </li>--}}

{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                    --}}{{--                                        <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                    --}}{{--                                    </ul>--}}
{{--                    --}}{{--                                </div>--}}

{{--                    --}}{{--                                <div class="card-body pb-0">--}}
{{--                    --}}{{--                                    <h5 class="card-title"><span></span></h5>--}}



{{--                    --}}{{--                                </div>--}}

{{--                    --}}{{--                            </div>--}}
{{--                    --}}{{--                        </div><!-- End Top Selling -->--}}

{{--                    --}}{{--                    </div>--}}
{{--                </div><!-- End Left side columns -->--}}

{{--                <!-- Right side columns -->--}}
{{--                --}}{{--                <div class="col-lg-4">--}}

{{--                --}}{{--                    <!-- Recent Activity -->--}}
{{--                --}}{{--                    <div class="card">--}}
{{--                --}}{{--                        <div class="filter">--}}
{{--                --}}{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                --}}{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                --}}{{--                                <li class="dropdown-header text-start">--}}
{{--                --}}{{--                                    <h6>Filter</h6>--}}
{{--                --}}{{--                                </li>--}}

{{--                --}}{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                --}}{{--                            </ul>--}}
{{--                --}}{{--                        </div>--}}

{{--                --}}{{--                        <div class="card-body">--}}
{{--                --}}{{--                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>--}}

{{--                --}}{{--                            --}}{{----}}{{--                            <div class="activity">--}}

{{--                --}}{{--                            --}}{{----}}{{--                                <div class="activity-item d-flex">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activite-label"></div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activity-content">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                        <a href="#" class="fw-bold text-dark"></a>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    </div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                </div><!-- End activity item-->--}}

{{--                --}}{{--                            --}}{{----}}{{--                                <div class="activity-item d-flex">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activite-label"></div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activity-content">--}}

{{--                --}}{{--                            --}}{{----}}{{--                                    </div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                </div><!-- End activity item-->--}}

{{--                --}}{{--                            --}}{{----}}{{--                                <div class="activity-item d-flex">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activite-label"></div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activity-content">--}}

{{--                --}}{{--                            --}}{{----}}{{--                                    </div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                </div><!-- End activity item-->--}}

{{--                --}}{{--                            --}}{{----}}{{--                                <div class="activity-item d-flex">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activite-label"></div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activity-content">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                       <a href="#" class="fw-bold text-dark"></a>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    </div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                </div><!-- End activity item-->--}}

{{--                --}}{{--                            --}}{{----}}{{--                                <div class="activity-item d-flex">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activite-label">2 days</div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activity-content">--}}

{{--                --}}{{--                            --}}{{----}}{{--                                    </div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                </div><!-- End activity item-->--}}

{{--                --}}{{--                            --}}{{----}}{{--                                <div class="activity-item d-flex">--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activite-label"></div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                    <div class="activity-content">--}}

{{--                --}}{{--                            --}}{{----}}{{--                                    </div>--}}
{{--                --}}{{--                            --}}{{----}}{{--                                </div><!-- End activity item-->--}}

{{--                --}}{{--                            --}}{{----}}{{--                            </div>--}}

{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                    </div><!-- End Recent Activity -->--}}

{{--                --}}{{--                    <!-- Budget Report -->--}}
{{--                --}}{{--                    <div class="card">--}}
{{--                --}}{{--                        <div class="filter">--}}
{{--                --}}{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                --}}{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                --}}{{--                                <li class="dropdown-header text-start">--}}
{{--                --}}{{--                                    <h6>Filter</h6>--}}
{{--                --}}{{--                                </li>--}}

{{--                --}}{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                --}}{{--                            </ul>--}}
{{--                --}}{{--                        </div>--}}

{{--                --}}{{--                        <div class="card-body pb-0">--}}
{{--                --}}{{--                            <h5 class="card-title">Test<span></span></h5>--}}

{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                    </div><!-- End Budget Report -->--}}

{{--                --}}{{--                    <!-- Website Traffic -->--}}
{{--                --}}{{--                    <div class="card">--}}
{{--                --}}{{--                        <div class="filter">--}}
{{--                --}}{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                --}}{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                --}}{{--                                <li class="dropdown-header text-start">--}}
{{--                --}}{{--                                    <h6>Filter</h6>--}}
{{--                --}}{{--                                </li>--}}

{{--                --}}{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                --}}{{--                            </ul>--}}
{{--                --}}{{--                        </div>--}}

{{--                --}}{{--                        <div class="card-body pb-0">--}}
{{--                --}}{{--                            <h5 class="card-title">Test <span></span></h5>--}}

{{--                --}}{{--                            --}}{{----}}{{--                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>--}}



{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                    </div><!-- End Website Traffic -->--}}

{{--                --}}{{--                    <!-- News & Updates Traffic -->--}}
{{--                --}}{{--                    <div class="card">--}}
{{--                --}}{{--                        <div class="filter">--}}
{{--                --}}{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                --}}{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                --}}{{--                                <li class="dropdown-header text-start">--}}
{{--                --}}{{--                                    <h6>Filter</h6>--}}
{{--                --}}{{--                                </li>--}}

{{--                --}}{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                --}}{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                --}}{{--                            </ul>--}}
{{--                --}}{{--                        </div>--}}

{{--                --}}{{--                        <div class="card-body pb-0">--}}
{{--                --}}{{--                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>--}}

{{--                --}}{{--                            <div class="news">--}}
{{--                --}}{{--                                <div class="post-item clearfix">--}}
{{--                --}}{{--                                    <img src="assets/img/news-1.jpg" alt="">--}}
{{--                --}}{{--                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                --}}{{--                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>--}}
{{--                --}}{{--                                </div>--}}

{{--                --}}{{--                                <div class="post-item clearfix">--}}
{{--                --}}{{--                                    <img src="assets/img/news-2.jpg" alt="">--}}
{{--                --}}{{--                                    <h4><a href="#">Quidem autem et impedit</a></h4>--}}
{{--                --}}{{--                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>--}}
{{--                --}}{{--                                </div>--}}

{{--                --}}{{--                                <div class="post-item clearfix">--}}
{{--                --}}{{--                                    <img src="assets/img/news-3.jpg" alt="">--}}
{{--                --}}{{--                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>--}}
{{--                --}}{{--                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>--}}
{{--                --}}{{--                                </div>--}}

{{--                --}}{{--                                <div class="post-item clearfix">--}}
{{--                --}}{{--                                    <img src="assets/img/news-4.jpg" alt="">--}}
{{--                --}}{{--                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>--}}
{{--                --}}{{--                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>--}}
{{--                --}}{{--                                </div>--}}

{{--                --}}{{--                                <div class="post-item clearfix">--}}
{{--                --}}{{--                                    <img src="assets/img/news-5.jpg" alt="">--}}
{{--                --}}{{--                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>--}}
{{--                --}}{{--                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>--}}
{{--                --}}{{--                                </div>--}}

{{--                --}}{{--                            </div><!-- End sidebar recent posts-->--}}

{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                    </div><!-- End News & Updates -->--}}

{{--                --}}{{--                </div><!-- End Right side columns -->--}}

{{--            </div>--}}
{{--            <div class="gradient-custom">--}}
{{--                <div class="container py-5 h-100">--}}
{{--                    <div class="row justify-content-center align-items-center h-100">--}}
{{--                        <div class="col-12 col-lg-9 col-xl-7">--}}
{{--                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">--}}
{{--                                <div class="card-body p-4 p-md-5">--}}
{{--                                    <h4 class="mb-4 pb-2 pb-md-0 mb-md-5" style="color: #d080f5">User Registration</h4>--}}
{{--                                    <form>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 mb-4">--}}

{{--                                                <div class="form-group">--}}
{{--                                                    <label class="form-label" for="firstName">First Name</label>--}}
{{--                                                    <input type="text" id="firstName" placeholder="First Name" class="form-control form-control-md" />--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            <div class="col-md-6 mb-4">--}}

{{--                                                <div class="form-group">--}}
{{--                                                    <label class="form-label" for="lastName">Last Name</label>--}}
{{--                                                    <input type="text" id="lastName" placeholder="Last Name" class="form-control form-control-md" />--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 mb-4 d-flex align-items-center">--}}

{{--                                                <div class="form-group ">--}}
{{--                                                    <label for="birthdayDate" class="form-label">Email-Id</label>--}}
{{--                                                    <input type="text" class="form-control form-control-md" placeholder="Email-id" id="birthdayDate" />--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            <div class="col-md-6 mb-4 d-flex align-items-center">--}}

{{--                                                <div class="form-group ">--}}
{{--                                                    <label for="birthdayDate" class="form-label">Contact No</label>--}}
{{--                                                    <input type="text" class="form-control form-control-md" placeholder="Contact No" id="birthdayDate" />--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6 mb-4 pb-2">--}}

{{--                                                <div class="form-group">--}}
{{--                                                    <label class="form-label" for="emailAddress">Password</label>--}}
{{--                                                    <input type="email" id="emailAddress" placeholder="Password" class="form-control form-control-md" />--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            <div class="col-md-6 mb-4 pb-2">--}}

{{--                                                <select class="select form-control-sm">--}}
{{--                                                    <option value="" disabled>Choose Option</option>--}}
{{--                                                    <option value="1">Active</option>--}}
{{--                                                    <option value="0">Inactive</option>--}}

{{--                                                </select>--}}
{{--                                                <label class="form-label select-label">Choose option</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class=" pt-1">--}}
{{--                                            <input class="btn btn-outline-success btn-md" type="submit" value="Submit" />--}}
{{--                                        </div>--}}

{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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
