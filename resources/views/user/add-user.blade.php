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
        <section class="section dashboard">
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
            <div class="vh-50 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                <div class="card-body p-4 p-md-5">
                                    <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">User Registration</h4>
                                    <form>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
{{--                                                    <label class="form-label" for="firstName">First Name</label>--}}
                                                    <input type="text" id="firstName" placeholder="First Name" class="form-control form-control-md" />

                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
{{--                                                    <label class="form-label" for="lastName">Last Name</label>--}}
                                                    <input type="text" id="lastName" placeholder="Last Name" class="form-control form-control-md" />

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                                <div class="form-outline ">
{{--                                                    <label for="birthdayDate" class="form-label">Email-Id</label>--}}
                                                    <input type="text" class="form-control form-control-md" placeholder="Email-id" id="birthdayDate" />

                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                                <div class="form-outline ">
{{--                                                    <label for="birthdayDate" class="form-label">Contact No</label>--}}
                                                    <input type="text" class="form-control form-control-md" placeholder="Contact No" id="birthdayDate" />

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
{{--                                                    <label class="form-label" for="emailAddress">Password</label>--}}
                                                    <input type="email" id="emailAddress" placeholder="Password" class="form-control form-control-md" />

                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <select class="select form-control-sm">
                                                    <option value="" disabled>Choose Option</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>

                                                </select>
{{--                                                <label class="form-label select-label">Choose option</label>--}}
                                            </div>
                                        </div>

                                        <div class=" pt-1">
                                            <input class="btn btn-outline-success btn-md" type="submit" value="Submit" />
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
