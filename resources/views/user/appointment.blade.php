
    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

            <form class="main-form" method="POST" action="{{url('/appointment')}}">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        @error('name')
                        <div class="alert ">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="Email address..">
                        @error('email')
                        <div class="alert ">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" class="form-control">
                        @error('date')
                        <div class="alert ">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor" id="departement" class="custom-select">
                            <option selected>select Doctor</option>

                            @foreach ($doctors as $doctor)
                            <option value="{{$doctor->name}}">{{$doctor->name}} --spacial for--{{$doctor->specility}}</option>
                            @endforeach

                        </select>
                        @error('doctor')
                        <div class="alert ">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="phone" class="form-control" placeholder="Number..">
                        @error('phone')
                        <div class="alert ">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6"
                            placeholder="Enter message.."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
            </form>
        </div>
    </div> 