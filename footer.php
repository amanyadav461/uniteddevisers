		<?php 
		if($_SERVER['PHP_SELF'] != "/uniteddevisers/index.php"){
			echo "
				<div id='contact' class='ud-dallp'>
					<div class='ud-d10'>
						<div class='ud-d12'>Contact Us</div>
						<div class='ud-d13'>WE'D REALLY LOVE TO HEAR FROM YOU SO WHY NOT DROP US AN EMAIL AND WE'LL GET BACK TO YOU AS SOON AS WE CAN.</div>
						<div class='ud-d49'>
							<input type='text' name='name' placeholder='Name (required)'>
							<input type='text' name='name' placeholder='Email (required)'>
							<input type='text' name='name' placeholder='Subject'>						
						</div>
						<div class='ud-d50'>
							<textarea name='msgs' placeholder='Your Message'></textarea>
							<input type='submit' name='submit' value='' class='comment-submit'>
						</div>
					</div>					
				</div>			
			";
		}

		?>
<footer>
	<div class="ud-d55">
		<div class="ud-d56">UnitedDevisers</div>
		<div class="ud-d57">
			<ul>
				<li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				<li><a href=""></a><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
				<li><a href=""></a><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
				<li><a href=""></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
				<li><a href=""></a><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
			</ul>
		</div>
		<div class="ud-d58"><i class="fa fa-copyright" aria-hidden="true"></i> 2017-2018 All Right Reserved. Made With <i class="fa fa-heart" aria-hidden="true"></i> in India by UnitedDevisers.</div>
	</div>
</footer>
	<script type="text/javascript">
		$(document).ready(function(){
			if($(window).height()>410){
				$("#home").css("height", $(window).height());
			}else{
				$("#home").css("height", "410px");
			}
			 
			setInterval(anim_home_txt,3000);
			function anim_home_txt(){
				if($("#ud-d5 ul").css("top")=="0px"){
					$("#ud-d5 ul").css({"top":"-115px","transform":"translateY(-5px)","transition-duration":"2s"});
				}else if($("#ud-d5 ul").css("top")=="-115px"){
					$("#ud-d5 ul").css({"top":"-240px","transform":"none","transition-duration":"2s"});
				}else if($("#ud-d5 ul").css("top")=="-240px"){
					$("#ud-d5 ul").css({"top":"0px","transform":"none"});
				}
				
			}

//animate resize button
setInterval(res_sp,500);
function res_sp(){
	if($(".ud-d59 span").css("width") < "300px"){
		$(".ud-d59 span").css("width","300px");
		$(".ud-d59 span").css("color","black");
	}else{
		$(".ud-d59 span").css("width", "255px");
		$(".ud-d59 span").css("color","white");
	}
}			
//lock nav on scroll
			$(window).scroll(function () {
			    var scroll = $(window).scrollTop();
			    if(scroll > $(window).height()){
			    	$("#mfav").addClass("nav-lock");
			    }else{
			    	$("#mfav").removeClass("nav-lock");
			    	$("#mfav").addClass("nav");
			    }
			});



//smooth scroll

// Add smooth scrolling to all links
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    } // End if
  });
		});
		
	</script>
</body>
</html>