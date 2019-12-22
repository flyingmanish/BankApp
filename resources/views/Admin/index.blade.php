@extends("layouts.app")

@section("content")
<h1>Admin Registration</h1>
<hr>
<div class="container">
	<div class="col-sm-5 col-sm-offset-2">
		<h5><b class="mandatory">*</b> <b>Field Mandatory</b></h5>
		<form action="/admin_data_stored" method="POST">
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
		  	<label><b class="mandatory">*</b> State:</label>
			<select id="my-dropdown" name="state">
				<option value="0">Please Select</option>
				<option value="Delhi">Delhi</option>
				<option value="Aasam">Aasam</option>
				<option value="Goa">Goa</option>
				<option value="Gujrat">Gujrat</option>
				<option value="Rajastan">Rajastan</option>
			</select>
		</div>
		<div class="dropdown">
			<label><b class="mandatory">*</b> City:</label>
			<select id="my-dropdown" name="city">
				<option value="0">Please Select</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Pune">Pune</option>
				<option value="nashik">nashik</option>
				<option value="Thane">Thane</option>
				<option value="Dombivali">Dombivali</option>
			</select>
		</div>
			<div class="form-group">
				<label for="pin_code"><b class="mandatory">*</b> Pin Code</label>
				<input type="number" name="pin_code">
			</div>
			<div class="form-group">
				<label for="correspondence_address"><b class="mandatory">*</b> Correspondence Address:</label>
				<textarea class="form-control" rows="5" id="correspondence_address" name="correspondence_address"></textarea>
			</div>
			<div class="form-group">
				<label for="permanante_address"><b class="mandatory">*</b> Permanante Address:</label>
				<textarea class="form-control" rows="5" id="permanante_address" name="permanante_address"></textarea>
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
		    <input type="password" class="form-control" id="pwd" name="password">
		  </div>
		  <div class="form-group">
		    <label for="pwd"><b class="mandatory">*</b> Confirm Password:</label>
		    <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd">
		  </div>
		  
		  <button type="submit" class="btn btn-success">Submit</button>
	</form>
	</div>
</div>
@endsection