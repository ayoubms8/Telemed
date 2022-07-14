 <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

         @foreach ($doctor as $doctor)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="images/doctors/{{$doctor -> Photo}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body text-center">
              <p class="text-xl mb-0">{{$doctor -> Full_Name}} </p>
              <span class="text-sm text-grey">Speciality : {{$doctor -> Speciality}}</span>
              <h1 class="text-sm text-grey">{{$doctor -> Working_Hours}}</h1>

            </div>

          </div>
        </div>
    

                                    @endforeach  

      </div>
    </div>
  </div>