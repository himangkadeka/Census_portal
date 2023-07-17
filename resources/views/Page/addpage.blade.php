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
                                @foreach($mainmenu as $menu)
                                <option value="{{$menu->id}}">{{$menu->menuhead}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Sub Menu</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Sub-Menu</option>
                                @foreach($submenu as $smenu)
                                    <option value="{{$smenu->id}}">{{$smenu->submenuhead}}</option>
                                @endforeach
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

                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
