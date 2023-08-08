<x-layout>
    <x-slot name="title">
    Directory
</x-slot>
    <x-slot name="content">
        <div class="pagetitle">
            <h1>Directory</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Create Directory</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="container mt-5">

@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div class="row my-2">
    <div class="col-lg-8 mx-auto">
        {{--                                <button href="" class=" btn btn-warning">Create Category</button>--}}

        <div class="card shadow">

            <div class="card-header bg-primary">

                <h3 class="text-light" style="display: inline-block;">Officers Directory</h3>


            </div>
            <div class="card-body p-2">
                <form>
                    @csrf
                    <div class="my-2">
                        <input type="text" name="title" id="title" class="form-control " placeholder="Enter your Name" >
                        <div id="error-title" class="input__error" style="color: red"></div>
                    </div>

{{--                    <div class="my-2">--}}
{{--                        <select class="form-select" name="category_id" id="category_id" aria-label="Default select example">--}}
{{--                            <option value="">Select Category</option>--}}
{{--                            @foreach($category as $categ)--}}
{{--                                <option value="{{$categ->id}}">{{$categ->name}}</option>--}}
{{--                            @endforeach--}}


{{--                        </select>--}}
{{--                        <div id="error-category_id" class="input__error" style="color: red"></div>--}}
{{--                    </div>--}}

                    <div class="my-3">
                        <input type="text" name="priority" id="priority" class="form-control" placeholder="Enter Designation" >
                        <div id="error-priority" class="input__error" style="color: red"></div>
                    </div>
                    <div class="my-3">
                        <input type="text" name="priority" id="priority" class="form-control" placeholder="Enter Email-id" >
                        <div id="error-priority" class="input__error" style="color: red"></div>
                    </div>

                    <div class="my-3">
                        <input type="text" name="priority" id="priority" class="form-control" placeholder="Enter Phone No" >
                        <div id="error-priority" class="input__error" style="color: red"></div>
                    </div>


                    <div class="my-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" checked>
                            <label class="form-check-label" for="inlineCheckbox1">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0">
                            <label class="form-check-label" for="inlineCheckbox2">Block</label>
                        </div>
                    </div>

{{--                    <div class="my-2">--}}

{{--                        <input type="file" name="image" id="img" accept="image/*" class="form-control " >--}}
{{--                        <div id="error-image" class="input__error" style="color: red"></div>--}}
{{--                        <div class="holder" style="height: 300px;width: 300px;border: 1px solid black;">--}}
{{--                            <img id="imgPreview" src="#" alt="pic" style="max-width: 300px;max-height: 300px;min-width: 300px;min-height: 300px"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="my-2">
                        <input type="button" value="Create Directory" id="btn-save" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<script>
    $(document).ready(() => {
        $('#img').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    console.log(event.target.result);
                    $('#imgPreview').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    $(document).ready(function () {
        async function save() {
            // $('.input__error').html('')

            var formData = new FormData();
            var imgFile = document.querySelector('#img');
            formData.append("title", $('#title').val());
            formData.append("category_id", $('#category_id').val());
            formData.append("priority", $('#priority').val());
            formData.append("image", imgFile.files[0]);
            // formData.append("_token", $('meta[name="_token"]').attr('content'));

            axios.post('{{route('image')}}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).then(function (response) {
                console.log(response.status)
                if (response.status == '200') {
                    {{--$('#success-modal-preview').modal({backdrop: 'static', keyboard: false})--}}
                    {{--$('#success-modal-preview').modal('show');--}}
                    {{--//window.location.href = "{{ route('add-pdf-course-file')}}";--}}
                }
            })
                .catch(function (error) {
                    console.log(error)
                    // $('#btn-save').prop('disabled', false);
                    // $('#btn-save').html('Save PDF File')
                    // $(`#error`).addClass('border-theme-6')
                    // if (error.response.data.exception) {
                    //     $(`#error`).html('Something went wrong.')
                    // }
                    //
                    for (const [key, val] of Object.entries(error.response.data.errors)) {
                        // $(`#input-${key}`).addClass('border-theme-6')
                        $(`#error-${key}`).html(val)
                    }
                });

        }
        $('#btn-save').on('click', function () {
            save()
        })

    })


</script>
</section>
</x-slot>
</x-layout>
