<?php
include 'header.php';
?>
<!---->
<?php include 'ud-f-nav-bar.php'; ?>
	<div class="ud-wde1">
		<span class="ud-wde-p1">Please Fill Complete Form</span>
		<span class="ud-wde-p1">It creates clear vision and better understanding towards your project and all necessary requirements.</span>
		<label id="tnopr_L"><span>*</span>Total Number of Pages required</label>
		<input type="text" name="" id="tnopr" class="ud-wde-i-1" placeholder="">
		<label>Nature of the business</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label id="potws_L"><span>*</span>Purpose of the web site</label>
		<textarea class="ud-wde-ta-1" rows="10" cols="50" id="potws"></textarea>
		<label>Competitor web sites</label>
		<textarea class="ud-wde-ta-1" rows="10" cols="50"></textarea>
		<label>Websites that you Like</label>
		<textarea class="ud-wde-ta-1" rows="10" cols="50"></textarea>
		<label>Websites that you don't Like</label>
		<textarea class="ud-wde-ta-1" rows="10" cols="50"></textarea>
		<label>Colors that you like</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label>Colors that you don't like</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label>List your products and services</label>
		<textarea class="ud-wde-ta-1" rows="10" cols="50"></textarea>
		<label>Estimated Date of Completion</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label>Have you registered a domain name?</label>
			<div class="ud-wde2">
				<input type="radio" name="web_domain" value="registered">Yes
				<input type="radio" name="web_domain" value="Not registered">No
			</div>
		<label>Do you have Web hosting?</label>
			<div class="ud-wde2">
				<input type="radio" name="web_hosting" value="registered">Yes
				<input type="radio" name="web_hosting" value="Not registered">No
			</div>
		<label>Banner Type</label>
			<div class="ud-wde2">
				<input type="radio" name="banner_type" value="Image Banner">Image Banner
				<input type="radio" name="banner_type" value="jQuery Banner">jQuery Banner
			</div>
		<label>Admin / Dynamic Features</label>
			<div class="ud-wde3">
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Enquiry Form </div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Job Openings</div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Google Location Map </div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Google Direction</div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Google Translator</div>
			</div>
			<div class="ud-wde4">
				<div class="ud-wde5"><input type="checkbox" name="features" value="">News & Events</div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">User login/ registration</div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Payment Gateway Integration</div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Gallery</div>
				<div class="ud-wde5"><input type="checkbox" name="features" value="">Search Required</div>
			</div>
		<label>Your Budget for project</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<button id="evaluvate">evaluvate</button>
	</div>
	<div class="ud-wde7" id="ud-wde7">
		<span class="ud-wde-p2">Final Step</span>
		<label><span>*</span>Total Number of Pages required</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label>Colors that you don't like</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label><span>*</span>Total Number of Pages required</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label><span>*</span>Total Number of Pages required</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label>Colors that you don't like</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label><span>*</span>Total Number of Pages required</label>
		<input type="text" name="" class="ud-wde-i-1" placeholder="">
		<label>List your products and services</label>
		<textarea class="ud-wde-ta-1" rows="10" cols="50"></textarea>	
		<ol class="ud-wde-ol1">
			<span class="ud-wde-p3">Terms & Conditions : </span>
			<li>Requirement once defined cannot be modified under agreed time frame.</li>
			<li>Any new modification/enhancement (not mentioned in this document) will be treated in next Phase and will be charged at actual.</li>
			<li>50% of the Total Project Cost should be paid in advance, and for that Balance 50% should be paid in Post-Date.</li>
			<li>Only bug/error removals and spelling corrections will be performed in warranty period.</li>
			<li>The data like images, contents etc.,provided in your website is true to maximum extent, but your are responsible for any discomfort arising on contact information, pages information, quality of your site and other related things.</li>
			<li>Every additional major correction will be charged after fulfilling requirements in any point of time.</li>
			<span class="ud-wde-p4"> By clicking on the submit you are agreeing to the Terms of Conditions above. </span>
		</ol>
		<input type="submit" name="submit" value="Submit" id="submit_wde">
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#evaluvate").click(function(){
			formValidate();
		});

		function formValidate(){
			var tnopr = $("#tnopr").val();
			var potws = $("#potws").val();
 		
 			$('.ud-wde-error').hide();

			if(tnopr == ""){
				$("#tnopr_L").before("<span class='ud-wde-error'>Please Enter Number of Pages Required</span>");
				$("#evaluvate").after("<span class='ud-wde-error'>Form Incomplete! Look Up for error</span>");
			}else if(potws == ""){
				$("#potws_L").before("<span class='ud-wde-error'>Please Enter Purpose of Website</span>");
				$("#evaluvate").after("<span class='ud-wde-error'>Form Incomplete! Look Up for error</span>");
			}else{
				$("#evaluvate").hide();
				$(".ud-wde7").css("display","block");
				$(".ud-wde7").animate({height:'800px',opacity:'1'},"slow")
			}

		}
	});
</script>
<?php
include 'footer.php';
?>