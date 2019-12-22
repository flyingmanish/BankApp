@extends("layouts.app")
<style type="text/css">
  .already_exists_error {
    display: none;
  }
</style>

@section("content")
<h1>Admin Registration</h1>
<ul class="errors" style="list-style-type: none;">
</ul>
<div>
  <span class="alert alert-danger already_exists_error">
    This user already exists!
  </span>
</div>
<hr>
<div class="container">
	<div class="col-sm-5 col-sm-offset-2">
		<h5><b class="mandatory">*</b> <b>Field Mandatory</b></h5>
		<form id="donationform">
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
		    <label for="aadhar_card"><b class="mandatory">*</b> Aadhar card number:</label>
		    <input type="number" class="form-control" id="aadhar_card" name="aadhar_card">
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
<script type="text/javascript">
  $(function() {
    $("#donationform").on("submit", function(e) {
      alert('ok')
      e.preventDefault()
      $.ajax({
        url: '{{url('/admin_data_stored')}}',
        method: 'POST',
        data: new FormData(this),
              headers:{
                 'X-CSRF-TOKEN': "{{ csrf_token() }}"
               },   
        processData: false,
        contentType: false,
        success: function(obj) {
          // alert("success")
          // console.log("response ala server varun")
          console.log(obj)
          console.log($.type(obj))

          if ($.type(obj)=="object") {
            ngo_id = obj["ngo_id"]
            console.log("ngo id")
            console.log(ngo_id)
            window.setTimeout(function() {
                window.location.href = '{{url('/')}}/'+ngo_id;
            }, 1000);

          }




          if (obj=='This User already exists!') {
              $(".already_exists_error").show()
            // $(".errrors").append("<li class='alert alert-danger'>"+obj+"</li>")
          }
          // $(".alert-danger").remove()

          $(".success_msg").html("<li class='alert alert-success'>Submitted successfully!</li>")
          // alert('Submitted Successfully.')
        },
        error: function(obj) {
          // alert("error")
          console.log(obj.responseJSON.errors)
          // $(".alert-danger").remove()
          $.each(obj.responseJSON.errors, function(key, val) {
            // alert(val)
            $(".errors").append("<li class='alert alert-danger'>"+val+"</li>")
            // console.log(val)
          })
          // alert("Server Error occured! PLease contact supprt team.")
        }
      })
    })
  })
</script>
@endsection