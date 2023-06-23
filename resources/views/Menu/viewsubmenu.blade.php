<x-layout>
    <x-slot name="title">
    View Sub-Menu
</x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>View Sub-Menu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">View Sub-Menu</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="col-md-1"></div>
                <!-- Left side columns -->
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span>View Sub-Menu</span></h5>
                            <table class="table datatable">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Sub-Menu</th>
                                    <th scope="col">Main Menu</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Actions</th>

                                </tr>
                                </thead>
                                @foreach($viewsubmenu as $submenu)
                                <tr>
                                    <th>{{$submenu->id}}</th>
                                    <td>{{$submenu->submenuhead}}</td>
                                    <td>{{getMainMenuName($submenu->mainmenuid)}}</td>
                                    <td>{{$submenu->priority}}</td>
                                    <td>@if($submenu->isactive == 1)
                                            <a href="#" class="btn btn-sm btn-primary">Yes</a>
                                        @else
                                            <a href="#" class="btn btn-sm btn-danger">No</a>
                                        @endif</td>

                                    <td>
                                        <a href="{{url('/edit',$submenu->id)}}" class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{url('/delete',$submenu->id)}}" class="btn btn-danger btn-sm "><i class="bi bi-recycle"></i></a>
                                    </td>
                                </tr>
                                    @endforeach
                                    </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </x-slot>

</x-layout>
