

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
 @include('doctor.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->

@include('doctor.sidebar')
      <!-- partial -->
     
@include('doctor.navbar')

                 <div class="container-fluid page-body-wrapper">
                 	<div >
                 		
                 		<table class="table table-striped table-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Patient name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Phone</th>
				       <th scope="col">Doctor name</th>
				      <th scope="col">Date</th>
				      <th scope="col">Message</th>
				      <th scope="col">Status</th>
                       <th scope="col">Approved or Cancel </th>
                     <th scope="col">Send Mail </th>

				     
				    </tr>
				  </thead>
				  <tbody>

				  @foreach ($data1 as $appoint)

                      <tr>
                      
				      <th scope="row">1</th>
				      <td>{{$appoint -> name}}</td>
				      <td>{{$appoint -> email}}</td>
				      <td>{{$appoint -> phone}}</td>
				      <td>{{$appoint -> doctor}}</td>
				      <td>{{$appoint -> date}}</td>
				       <td>{{$appoint -> message}}</td>
				      <td>{{$appoint -> status}}</td>
				       <td> <a  class="btn btn-danger" onclick="return confirm('Do you want to approve this appointment ?')" href="{{url('approved1',$appoint -> id)}}">Approved</a> 
			            <a  class="btn btn-success" onclick="return confirm('Do you want to cancel this appointment ?')" href="{{url('canceled1',$appoint -> id)}}">Cancel</a> </td>
                        <td><a  class="btn btn-primary" onclick="return confirm('Do you want to send an email ?')" href="{{url('emailview1',$appoint -> id)}}">Send</a></td>
				    </tr>
                         
				    
				 @endforeach  
 

				  </tbody>
				</table>
                 	</div>

				 	
				 </div>
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
    <!-- End custom js for this page -->
  </body>
</html>
