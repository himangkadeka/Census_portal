<x-layout>
    <x-slot name="title">
        View User
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>View User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">View User</li>
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
                            <h5 class="card-title"><span>View Registered User</span></h5>
                            <table class="table datatable">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Serial</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Action</th>


                                </tr>
                                </thead>
                                    @foreach($view_user as $key=>$user)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->contact}}</td>
                                        <td>{{$user->role_name}}</td>
                                        <td>@if($user->isactive== 1)
                                                <a href="#" class="btn btn-md btn-success">Yes</a>
                                                @else
                                                <a href="#" class="btn btn-md btn-danger">No</a>
                                        </td>
                                            @endif

                                        <td>
                                            <a href="" class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="btn btn-danger btn-sm "><i class="bi bi-recycle"></i></a>
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
