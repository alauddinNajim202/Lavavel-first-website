@extends('layout.app')
@section('title','Home')

@section('content4')
    <div class="container-fluid parralax m-0">
        <div class="row d-flex justify-content-center  ">

            <div class="col-md-6 text-center soft p-4">
                <h1>Softaware Engineer</h1>
                <h4>Web Design && Developer</h4>
                <button class="btn btn-danger mt-3">Learn More</button>
            </div>

        </div>

    </div>
    <div class="container mt-5 mb-5">
        <h1 class="text-center " >My Services</h1>
        <div class="row p-3">
            <div class="col-lg-4">
                <div class="card" style="width: 100%; height: 400px">
                    <img style="height: 200px" src="https://images.unsplash.com/photo-1531493657527-6d1af0c4c593?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web Design </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 100%;">
                    <img style="height: 200px" src="https://images.unsplash.com/photo-1497377825569-02ad2f9edb81?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Web Developer </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 100%;">
                   <img style="height: 200px" src="data:image/jpeg;base64,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" alt="" srcset="">
                    <div class="card-body">
                      <h5 class="card-title">App Developer </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>


        </div>
    </div>

    <div class="container mt-5 mb-5">
        <h1 class="text-center " >My Recent Projects</h1>
        <div class="row p-3">
            <div class="col-lg-4">
                <div class="card" style="width: 100%; height: 400px">
                    <img style="height: 220px" src="https://images.unsplash.com/photo-1631528754981-dcbce4d4d652?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ATM Simulation</h5>
                      <p class="card-text">Some quick example of the card's content.</p>
                      <a href="#" class="btn btn-primary mt-3">Go somewhere</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 100%;">
                    <img style="height: 225px" src="https://images.unsplash.com/photo-1549637642-90187f64f420?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGVtcGxveWVlcyUyMHdvcmtpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Employee Management </h5>
                      <p class="card-text">Some quick example of the card's content.</p>
                      <a href="#" class="btn btn-primary mt-3">Go somewhere</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 100%;">
                   <img style="height: 225px" src="https://media.istockphoto.com/id/1371886268/photo/pos-point-of-sale-grocery-or-retail-management-system-program-concept.webp?b=1&s=170667a&w=0&k=20&c=z3vO3sRdckVyw5AfEKGRO8tm5wq53MkGkcrYGluIQYs=" alt="" srcset="">
                    <div class="card-body">
                      <h5 class="card-title">Point of Sale</h5>
                      <p class="card-text">Some quick example of the card's content.</p>
                      <a href="#" class="btn btn-primary mt-3">Go somewhere</a>
                    </div>
                  </div>
            </div>


        </div>
    </div>

    <div class="container mt-4 mb-4 ">
        <div class="row p-3">
            <div class="col-lg-6">
                <h4 class="text-center">Contact Me ---</h4>
                <form>
                    <div class="mb-3">
                      <label  class="form-label">Your Name</label>
                      <input type="text" class="form-control" id="" >
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <p><label class="form-label">Your Message</label> </p>
                       <textarea name="" id="" rows="4" cols="auto"></textarea>
                      </div>


                    <button type="submit" class="btn btn-block btn-primary">Send Now</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center">Location --- </h3>
                <iframe class="rounded mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3192535759854!2d90.36408547163398!3d23.807243939388616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12cd2f41ad5%3A0xd4eb5975120eaff0!2sMirpur%2010%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1688551657790!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
