@extends('layout.app')
@section('title','About')


@section('content')

        <div class="container p-3">
            <div class=" py-3 bg-light " >
                <div class="position-relative d-flex justify-content-center align-items-center">
                    <h1 class=" display-1 text-uppercase text-white " style="-webkit-text-stroke: 1px rgb(232, 207, 207) ;">About </h1>
                    <h1 class="position-absolute text-uppercase text-danger">About Me </h1>
                </div>

                <div class="row align-items-center" >

                    <div class=" pb-4 pb-lg-0">
                        <img class="img-fluid rounded w-100" src="photo/work4.jpg" alt="">
                    </div>

                    <div class="text-center">
                        <h3 class="mb-4">UI/UX Designer & Web Designer </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi cum minima quam aut nemo est.</p>

                        <div class="row mb-3">
                            <div class="col-sm-6 py-2">
                                <h6>Name: <span class="text-secondary">Alauddin Najim </span></h6>
                            </div>
                            <div class="col-sm-6 py-2">
                                <h6>Birth Day: <span class="text-secondary" >4 June 1998</span></h6>
                            </div>

                            <div class="col-sm-6 py-2">
                                <h6>Degree: <span class="text-secondary" >BSC in CSE</span></h6>
                            </div>

                            <div class="col-sm-6 py-2">
                                <h6>Experience : <span class="text-secondary" >4 years</span></h6>
                            </div>

                            <div class="col-sm-6 py-2">
                                <h6>Phone : <span class="text-secondary" >+8801784124202</span></h6>
                            </div>

                            <div class="col-sm-6 py-2">
                                <h6>Email : <span class="text-secondary" >alauddinnajim202@gmail.com</span></h6>
                            </div>

                            <div class="col-sm-6 py-2">
                                <h6>Address: <span class="text-secondary" >434 street, dhaka, BD</span></h6>
                            </div>

                            <div class="col-sm-6 py-2">
                                <h6>Gender: <span class="text-secondary" >Male</span></h6>
                            </div>


                        </div>
                        <!-- button  -->
                        <a href="" class="btn btn-outline-primary blue mx-4">Hire Me </a>
                        <a href="" class="btn btn-outline-primary blue ">Learn More </a>


                    </div>
                </div>


            </div>
        </div>

@endsection
