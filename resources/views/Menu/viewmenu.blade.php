<x-layout>
    <x-slot name="title">
        View Main Menu
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>View Main-Menu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">View Menu</li>
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
                            <h5 class="card-title"><span>View Main Menu</span></h5>
                            <table class="table datatable">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">ID</th>
                                    <th scope="col">Menu Head</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Actions</th>

                                </tr>
                                </thead>
                                @foreach($viewmenu as $menu)
                                    <tr>
                                        <th>{{$menu->id}}</th>
                                        <td>{{$menu->menuhead}}</td>
                                        <td>{{$menu->priority}}</td>
                                        <td>@if($menu->isactive == 1)
                                                <a href="#" class="btn btn-sm btn-outline-success">Yes</a>
                                            @else
                                                <a href="#" class="btn btn-sm btn-outline-danger">No</a>
                                            @endif</td>

                                        <td>
                                            <a href="{{route('edit-main-menu',['id'=>$menu->id])}}" class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></a>
                                            <a href="{{route('delete-main-menu',['id'=>$menu->id])}}" class="btn btn-danger btn-sm "><i class="bi bi-recycle"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
            <script>
                @if(session()->has('success'))
                $(document).ready(function(){
                    alert('{{session()->get('success')}}');
                });

                @endif

            </script>

        </section>
    </x-slot>

</x-layout>
