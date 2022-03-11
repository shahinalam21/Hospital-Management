@include('admin.css')
<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')
<!-- partial -->
<div class="container-fluid page-body-wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-4">
                <h1 class="text-center fs-2 bg-info text-dark py-2">Add Doctor</h1>
            </div>
            <div class="col-md-9 mt-4">
                <div class="card bg-success">
                    <div class="card-body">

                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <button type="close" data-dismiss="alert">
                                    
                                </button>
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/uplode_doctor') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control text-info">
                                @error('name')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control text-info">
                                @error('phone')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Specility</label>
                                <select name="specility" class="form-select text-info">
                                    <option selected>--select--</option>
                                    <option value="skin">skin</option>
                                    <option value="hard">hard</option>
                                    <option value="neuro">neuro</option>
                                    <option value="medicin">medicin</option>
                                </select>
                                @error('specility')
                                    <div class="alert ">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Room No</label>
                                <input type="text" name="room" class="form-control text-info">
                                @error('room')
                                <div class="alert ">{{ $message }}</div>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control text-info" name="image" type="file" id="formFile">
                                @error('image')
                                <div class="alert ">{{ $message }}</div>
                            @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- container-scroller -->
@include('admin.script')
