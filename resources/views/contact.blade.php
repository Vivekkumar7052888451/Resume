<x-layout>
  <x-slot name="title">
    Contant
  </x-slot>
  <x-slot name="content">
  <div class="text-danger">
    <div class="container mt-5">
	 <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
	  <div class="row text-white mb-5">
	     <p class="mx-auto mb-5">
		     Do you have any question?Please do not hisitate to contact.
			 I will come back to you within a matter of hours to help you.
		 </p>
		    <div class="col-sm-9 mb-5">
			 <form>
			 <div class="form-group">
				<label for="exampleInputEmail1">Your Name</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
				
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Subject</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject">
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputPassword1">Message</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Message">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Send</button>
			</form>
		 
		    </div>
			<div class="text-center text-white">
			 <ul class="list unstyled">
			    <i class="fas fa-map-marker-alt fa-2x i-color"></i>
				<p text-info>Rachi ,jharkhand,india</p>
				<i class="fas fa-phone-alt fa-2x i-color"></i>
				<p text-info>91 7052888451</p>
			 </ul>
			</div>
	  </div>
	  <div class="text-center text-white">
	    <i class="fa fa-map-facebook-alt fa-2x i-color"></i>
	  </div>
	</div> 
  </div>
  
  </x-slot>
</x-layout>