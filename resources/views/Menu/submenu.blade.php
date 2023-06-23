<x-layout>
    <x-slot name="title">
        Add Sub-Menu
    </x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>Add Sub-Menu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add Sub-Menu</li>
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
                            <h5 class="card-title"><span>Add Sub-Menu</span></h5>
                            <form action="{{url('menu/save-submenu')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Main-Menu Head</label>
                                    <select class="form-select" name="mainmenuid" aria-label="Default select example">
                                        <option value="">Select Main Menu</option>
                                        @foreach ($mainmenu as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->menuhead }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Sub-Menu Head</label>
                                    <input type="text" class="form-control" id="submenuhead" name="submenuhead">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Priority</label>
                                    <input type="text" class="form-control" id="priority" name="priority">
                                </div>

                                <button class="btn btn-primary mt-3" type="submit">Add Sub-Menu</button>
                            </form>
                            <div class="mt-3">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>
    </x-slot>
</x-layout>
