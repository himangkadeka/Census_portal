<x-layout>
    <x-slot name="title">
        Add Page
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>Add Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add Page</li>
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
                            <h5 class="card-title"><span>Add New Page</span></h5>
                    <form action="">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Main Menu</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Main-menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Sub Menu</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Sub-Menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Page Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Meta</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Content</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Priority</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Add New</button>
                    </form>
                    </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="card">--}}

{{--                                <div class="filter">--}}
{{--                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                        <li class="dropdown-header text-start">--}}
{{--                                            <h6></h6>--}}
{{--                                        </li>--}}

{{--                                        <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title"><span></span></h5>--}}

{{--                                    <!-- Line Chart -->--}}
{{--                                    <div id="reportsChart"><h1>Welcome Administrator</h1></div>--}}



{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div><!-- End Reports -->--}}

{{--                        <!-- Recent Sales -->--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="card recent-sales overflow-auto">--}}

{{--                                <div class="filter">--}}
{{--                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                        <li class="dropdown-header text-start">--}}
{{--                                            <h6></h6>--}}
{{--                                        </li>--}}

{{--                                        <li><a class="dropdown-item" href="#"></a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#"></a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#"></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title"> <span></span></h5>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div><!-- End Recent Sales -->--}}

{{--                        <!-- Top Selling -->--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="card top-selling overflow-auto">--}}

{{--                                <div class="filter">--}}
{{--                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                        <li class="dropdown-header text-start">--}}
{{--                                            <h6>Filter</h6>--}}
{{--                                        </li>--}}

{{--                                        <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                                <div class="card-body pb-0">--}}
{{--                                    <h5 class="card-title"><span></span></h5>--}}



{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div><!-- End Top Selling -->--}}

{{--                    </div>--}}
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
{{--                <div class="col-lg-4">--}}

{{--                    <!-- Recent Activity -->--}}
{{--                    <div class="card">--}}
{{--                        <div class="filter">--}}
{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                <li class="dropdown-header text-start">--}}
{{--                                    <h6>Filter</h6>--}}
{{--                                </li>--}}

{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>--}}

{{--                            --}}{{--                            <div class="activity">--}}

{{--                            --}}{{--                                <div class="activity-item d-flex">--}}
{{--                            --}}{{--                                    <div class="activite-label"></div>--}}
{{--                            --}}{{--                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>--}}
{{--                            --}}{{--                                    <div class="activity-content">--}}
{{--                            --}}{{--                                        <a href="#" class="fw-bold text-dark"></a>--}}
{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div><!-- End activity item-->--}}

{{--                            --}}{{--                                <div class="activity-item d-flex">--}}
{{--                            --}}{{--                                    <div class="activite-label"></div>--}}
{{--                            --}}{{--                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>--}}
{{--                            --}}{{--                                    <div class="activity-content">--}}

{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div><!-- End activity item-->--}}

{{--                            --}}{{--                                <div class="activity-item d-flex">--}}
{{--                            --}}{{--                                    <div class="activite-label"></div>--}}
{{--                            --}}{{--                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>--}}
{{--                            --}}{{--                                    <div class="activity-content">--}}

{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div><!-- End activity item-->--}}

{{--                            --}}{{--                                <div class="activity-item d-flex">--}}
{{--                            --}}{{--                                    <div class="activite-label"></div>--}}
{{--                            --}}{{--                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>--}}
{{--                            --}}{{--                                    <div class="activity-content">--}}
{{--                            --}}{{--                                       <a href="#" class="fw-bold text-dark"></a>--}}
{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div><!-- End activity item-->--}}

{{--                            --}}{{--                                <div class="activity-item d-flex">--}}
{{--                            --}}{{--                                    <div class="activite-label">2 days</div>--}}
{{--                            --}}{{--                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>--}}
{{--                            --}}{{--                                    <div class="activity-content">--}}

{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div><!-- End activity item-->--}}

{{--                            --}}{{--                                <div class="activity-item d-flex">--}}
{{--                            --}}{{--                                    <div class="activite-label"></div>--}}
{{--                            --}}{{--                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>--}}
{{--                            --}}{{--                                    <div class="activity-content">--}}

{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div><!-- End activity item-->--}}

{{--                            --}}{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div><!-- End Recent Activity -->--}}

{{--                    <!-- Budget Report -->--}}
{{--                    <div class="card">--}}
{{--                        <div class="filter">--}}
{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                <li class="dropdown-header text-start">--}}
{{--                                    <h6>Filter</h6>--}}
{{--                                </li>--}}

{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="card-body pb-0">--}}
{{--                            <h5 class="card-title">Test<span></span></h5>--}}

{{--                        </div>--}}
{{--                    </div><!-- End Budget Report -->--}}

{{--                    <!-- Website Traffic -->--}}
{{--                    <div class="card">--}}
{{--                        <div class="filter">--}}
{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                <li class="dropdown-header text-start">--}}
{{--                                    <h6>Filter</h6>--}}
{{--                                </li>--}}

{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="card-body pb-0">--}}
{{--                            <h5 class="card-title">Test <span></span></h5>--}}

{{--                            --}}{{--                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>--}}



{{--                        </div>--}}
{{--                    </div><!-- End Website Traffic -->--}}

{{--                    <!-- News & Updates Traffic -->--}}
{{--                    <div class="card">--}}
{{--                        <div class="filter">--}}
{{--                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                                <li class="dropdown-header text-start">--}}
{{--                                    <h6>Filter</h6>--}}
{{--                                </li>--}}

{{--                                <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="card-body pb-0">--}}
{{--                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>--}}

{{--                            <div class="news">--}}
{{--                                <div class="post-item clearfix">--}}
{{--                                    <img src="assets/img/news-1.jpg" alt="">--}}
{{--                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>--}}
{{--                                </div>--}}

{{--                                <div class="post-item clearfix">--}}
{{--                                    <img src="assets/img/news-2.jpg" alt="">--}}
{{--                                    <h4><a href="#">Quidem autem et impedit</a></h4>--}}
{{--                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>--}}
{{--                                </div>--}}

{{--                                <div class="post-item clearfix">--}}
{{--                                    <img src="assets/img/news-3.jpg" alt="">--}}
{{--                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>--}}
{{--                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>--}}
{{--                                </div>--}}

{{--                                <div class="post-item clearfix">--}}
{{--                                    <img src="assets/img/news-4.jpg" alt="">--}}
{{--                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>--}}
{{--                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>--}}
{{--                                </div>--}}

{{--                                <div class="post-item clearfix">--}}
{{--                                    <img src="assets/img/news-5.jpg" alt="">--}}
{{--                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>--}}
{{--                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>--}}
{{--                                </div>--}}

{{--                            </div><!-- End sidebar recent posts-->--}}

{{--                        </div>--}}
{{--                    </div><!-- End News & Updates -->--}}

{{--                </div><!-- End Right side columns -->--}}

            </div>
        </section>
    </x-slot>
</x-layout>
