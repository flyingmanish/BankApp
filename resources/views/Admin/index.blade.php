@extends("layouts.app")

@section("content")
<h1>Admin Registration</h1>
<hr>
<div class="container">
	<div class="col-sm-5 col-sm-offset-2">
		<h5><b class="mandatory">*</b> <b>Field Mandatory</b></h5>
		<form action="/action_page.php">
		{{csrf_field()}}
		  <div class="form-group">
		    <label for="full_name"><b class="mandatory">*</b> Full Name:</label>
		    <input type="text" class="form-control" id="full_name" name="full_name">
		  </div>
		  <div class="form-group">
		    <label for="mobile_no"><b class="mandatory">*</b> Mobile No:</label>
		    <input type="number" class="form-control" id="mobile_no" name="mobile_no">
		  </div>
		  <div class="form-group">
		    <label for="alternate_no">Alternate mobile:</label>
		    <input type="number" class="form-control" id="alternate_no" name="alternate_no">
		  </div>
		  <div class="form-group">
		    <label for="email"><b class="mandatory">*</b> Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="alternate_email">Alternate Email address:</label>
		    <input type="email" class="form-control" id="alternate_email" name="alternate_email">
		  </div>
		  <div class="form-group">
		    <label for="addhar_card"><b class="mandatory">*</b> Addhar card number:</label>
		    <input type="number" class="form-control" id="addhar_card" name="addhar_card">
		  </div>
		  <div class="form-group">
		    <label for="pan_card"><b class="mandatory">*</b> Pan card number:</label>
		    <input type="text" class="form-control" id="pan_card" name="pan_card">
		  </div>
		  
		  <div class="form-group">
		  	<label for="gender"><b class="mandatory">*</b> Gender:</label>
		    <input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="other"> Other
		  </div>

		  <div class="dropdown">
		  	<label for="gender"><b class="mandatory">*</b> State:</label>
			<button class="btn" type="button" data-toggle="dropdown">Dropdown Example
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
			<li><a href="#">Maharashtra</a></li>
			<li><a href="#">Delhi</a></li>
			<li><a href="#">Aasam</a></li>
			<li><a href="#">Goa</a></li>
			<li><a href="#">Gujrat</a></li>
			<li><a href="#">Rajastan</a></li>
			<li><a href="#"></a></li>
			</ul>
		  </div><br>

			<div class="dropdown">
				<label for="gender"><b class="mandatory">*</b> City:</label>
				<button class="btn" type="button" data-toggle="dropdown">Dropdown Example
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
				<li><a href="#">Mumbai</a></li>
				<li><a href="#">Pune</a></li>
				<li><a href="#">nashik</a></li>
				<li><a href="#">Thane</a></li>
				<li><a href="#">Dombivali</a></li>
				<li><a href="#">kalyan</a></li>
				</ul>
			</div><br>
			<div class="form-group">
				<label for="pin_code"><b class="mandatory">*</b> Pin Code</label>
				<input type="number" name="pin_code">
			</div>
			<div class="form-group">
				<label for="correspondence_address"><b class="mandatory">*</b> Correspondence Address:</label>
				<textarea class="form-control" rows="5" id="correspondence_address"></textarea>
			</div>
			<div class="form-group">
				<label for="permanante_address"><b class="mandatory">*</b> Permanante Address:</label>
				<textarea class="form-control" rows="5" id="permanante_address"></textarea>
			</div>
			<div class="form-group">
				<label class="form-check-label">
				<input type="checkbox" id="C_address" class="" name="" value="">
				<label for="C_address">Same as correspondence:</label>
				</label>
			</div>
			<div>
		    <label for="photo"><b class="mandatory">*</b> Photos:</label>
    			<input type="file" id="myFile" name="image">
  
   			 <div class="mt-3">
     			 <button type="submit" class="btn btn-primary">Submit</button>
    		 </div>
    		</div><br>
			<div>
		    <label for="photo"><b class="mandatory">*</b> Sign:</label>
    			<input type="file" id="myFile" name="sing">
  
   			 <div class="mt-3">
     			 <button type="submit" class="btn btn-primary">Submit</button>
    		 </div>
    		</div><br>
		  <div class="form-group">
		    <label for="pwd"><b class="mandatory">*</b> Password:</label>
		    <input type="password" class="form-control" id="pwd">
		  </div>
		  <div class="form-group">
		    <label for="pwd"><b class="mandatory">*</b> Confirm Password:</label>
		    <input type="password" class="form-control" id="confirm_pwd">
		  </div>
		  
		  <button type="submit" class="btn btn-success">Submit</button>
	</form>
	</div>
</div>
@endsection