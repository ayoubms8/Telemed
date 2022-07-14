<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
 @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    <!--  <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
       partial:partials/_sidebar.html -->

@include('admin.sidebar')
      <!-- partial -->
     
@include('admin.navbar')

 <div class="container-fluid page-body-wrapper">

                
                       

                    <div class="container col-md-12">
                        @if(session()->has('message'))
                          <div class="alerrt alert-success">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{session()->get('message')}}
                          </div>
                          @endif
                            <form method="POST" action="{{ url('editdoctor',$data->id)}}" enctype="multipart/form-data"  class="bg-dark" >
                                    {{csrf_field()}}
                                            <div class="mb-3">
                                          
                                                 <div class="container">
                                                          <div class="row">
                                                    <div class="col-sm">
                                              <label for="photo" class="form-label">New Photo </label> 
                                                <input type="file" class="form-control" name = "photo" id="photo"   style="color:black" value="{{$data -> Photo}}" >

                                          <label for="firstname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name = "firstname" id="firstname"  required="" style="color:black" value="{{$data -> First_Name}}">

                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name = "lastname" id="lastname" style="color:black"  required="" value="{{$data -> Last_Name}}">

                                                <label for="Gender" class="form-label">Gender</label>
                                                 <select name="Gender" id="Gender" class="form-control" style="color:black" value="{{$data -> Gender}}">
                                                  <option value="volvo">Female</option>
                                                  <option value="saab">Male</option>
                                               
                                                </select>

                                                <label for="date_of_birth" class="form-label">Date Of Birthday </label>
                                                <input type="date" style="color:black"  class="form-control" name = "date_of_birth"  id="date_of_birth" tyle="color:white" required="" value="{{$data -> Date_Of_Birth}}">


                                                
                                                <label for="Adress" class="form-label">Adress </label>
                                                <input type="text" class="form-control" id="Adress" name = "Adress" style="color:black"  required="" value="{{$data -> Adress}}">
                                              <label for="exampleInputEmail1" class="form-label">Phone Number </label>
                                                <input type="tel" class="form-control" id="Phone_Number" name = "Phone_Number" style="color:black" required="" value="{{$data -> Phone_Number}}">

                                                      </div>
                                                            <div class="col-sm">
                                                 <label for="photo" class="form-label"> Old Photo </label> 
                                                             <img src="images/doctors/{{$data -> Photo}}">                                                          </div>
                                                 
                                                          
                                                    </div>
                                                </div>

                                               

                                                <label for="Social_Account" class="form-label">Social Account </label>
                                                <input type="text" class="form-control" id="Social_Account" name="Social_Account" style="color:black" required="" value="{{$data -> Social_Account}}" >

                                                <label for="Speciality" class="form-label">Choose a speciality </label>
                                                <select name="Speciality" id="Speciality" class="form-control" style="color:black" value="{{$data -> Speciality}}" >
                                                  <option value="volvo">Volvo</option>
                                                  <option value="saab">Saab</option>
                                                  <option value="mercedes">Mercedes</option>
                                                  <option value="audi">Audi</option>
                                                </select>


                                                <label for="Email_Adress" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="Email_Adress" name="Email_Adress" aria-describedby="emailHelp" style="color:black" required="" value="{{$data -> Email_Adress}}">
                                                
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="color:black" required="">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Doctor</button>
                                    </form>
                            
                    </div>

                </div>
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
