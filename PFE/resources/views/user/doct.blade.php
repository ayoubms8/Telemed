  <div class="container">
                <div class="row">
                              

                                <div class="col-sm-8">
                                @foreach ($doctors as $doctor)


                                <div class="card">
                                                        <div class="card-header">
                                                        Doctor : {{$doctor -> Full_Name}} 
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{$doctor -> Speciality}}</h5>
                                                            <img  style="width:50% !imortant" src="images/doctors/{{$doctor -> Photo}}">
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                            <a href="{{url('/home')}}" class="btn btn-primary">Make an Appointment
</a>
                                                        </div>
                                                        <hr>

                                                        </div>

                                            
                              
                              
                                @endforeach  

                                </div>
                                

                    <div class="col-sm-4 bg-white">
                        
                  <div class="col">

                  <div class="jumbotron jumbotron-fluid  bg-white">
                        <div class="container">
                            <h1 class="display-4">Registration Form </h1>
                            <p class="lead">Please fill out the New Doctor Registration Form below ONLY IF you are a doctor </p>
                        </div>
                        </div>                                  

                               <form method="POST" action="{{ url('uploaddoct')}}" enctype="multipart/form-data"  class="bg-white" >
                                    {{csrf_field()}}
                                            <div class="mb-3">
                                            <div  >

                                           <label for="photo" class="form-label"> Doctor Photo </label> 
                                                <input type="file" class="form-control" name = "photo" id="photo"  required="" style="color:black">
                                            <label for="firstname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name = "Full_Name" id="Full_Name"  required="" style="color:black" value="{{Auth::user()->name}}" readonly="readonly">

                                               

                                                <label for="Gender" class="form-label">Gender</label>
                                                 <select name="Gender" id="Gender" class="form-control" style="color:black" >
                                                  <option value="volvo">Female</option>
                                                  <option value="saab">Male</option>
                                               
                                                </select>

                                            

                                                <label for="date_of_birth" class="form-label">Date Of Birthday </label>
                                                <input type="date" class="form-control" name = "date_of_birth"  id="date_of_birth" tyle="color:white" required="">

                                                <label for="Adress" class="form-label">Adress </label>
                                                <input type="text" class="form-control" id="Adress" name = "Adress" style="color:black"  required=""  value="{{Auth::user()->address}}" readonly="readonly">

                                                <label for="exampleInputEmail1" class="form-label">Phone Number </label>
                                                <input type="tel" class="form-control" id="Phone_number" name = "Phone_number" style="color:black" required="" value="{{Auth::user()->phone}}" readonly="readonly">

                                                <label for="Social_Account" class="form-label">Social Account </label>
                                                <input type="text" class="form-control" id="Social_Account" name="Social_Account" style="color:black" required="" >

                                                <label for="Speciality" class="form-label">Choose a speciality </label>
                                                <select name="Speciality" id="Speciality" class="form-control" style="color:black" >
                                                  <option value="Allergy and immunology">Allergy and immunology</option>
                                                  <option value="Anesthesiology">Anesthesiology</option>
                                                  <option value="Dermatology">Dermatology</option>
                                                  <option value="Diagnostic radiology">Diagnostic radiology</option>
                                                  <option value="Emergency medicine">Emergency medicine</option>
                                                  <option value="Family medicine">Family medicine</option>
                                                   <option value="Internal medicine">Internal medicine</option>
                                                  <option value="Medical genetics">Medical genetics</option>
                                                  <option value="Neurology">Neurology</option>
                                                   <option value="Nuclear medicine">Nuclear medicine</option>
                                                  <option value="Obstetrics and gynecology">Obstetrics and gynecology</option>
                                                  <option value="Ophthalmology">Ophthalmology</option>
                                                    <option value="Pathology">Pathology</option>
                                                   <option value="Pediatrics">Pediatrics</option>
                                                  <option value="Physical medicine and rehabilitation">Physical medicine and rehabilitation</option>
                                                  <option value="Preventive medicine">Preventive medicine</option>
                                                   <option value="Psychiatry">Psychiatry</option>
                                                    <option value="Radiation oncology">Radiation oncology</option>
                                                   <option value="Surgery">Surgery</option>
                                                  <option value="Urology">Urology</option>




                                                </select>



                                                <label for="Email_Adress" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="Email_Adress" name="Email_Adress" aria-describedby="emailHelp" style="color:black" required="" value="{{Auth::user()->email}}" readonly="readonly">
                                                
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="color:black" required="">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                             <input type="hidden" name="userid" value="{{Auth::user()->id}} ">
                                            <button type="submit" class="btn btn-primary text-white bg-danger">Add Doctor</button>
                                    </form>

                                      






                              

                                </div>
                    
                    
                    </div>
                </div> 
                </div>
                    