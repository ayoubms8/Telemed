

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
 @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->

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
                            <form method="POST" action="{{ url('sendemail',$data->id) }}" class="bg-dark" >
                                    {{csrf_field()}}
                                            <div class="mb-3">
                                            <div  >
                                         
                                            <label for="firstname" class="form-label">Greeting</label>
                                                <input type="text" class="form-control" name = "greeting" id="greeting"  required="" style="color:black">

                                                <label for="lastname" class="form-label">Body</label>
                                                <input type="text" class="form-control" name = "body" id="body" style="color:black"  required="">


                                                <label for="Adress" class="form-label">Action Text </label>
                                                <input type="text" class="form-control" id="actiontext" name = "actiontext" style="color:black"  required="">

                                                <label for="exampleInputEmail1" class="form-label">Action Url</label>
                                                <input type="tel" class="form-control" id="actionurl" name = "actionurl" style="color:black" required="">

                                                <label for="Social_Account" class="form-label">End Part  </label>
                                                <input type="text" class="form-control" id="endpart" name="endpart" style="color:black" required="" >

                                                
                                            
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" style="color:black" required="">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Doctor</button>
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
