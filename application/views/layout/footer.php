
	

</div>
<div style ='height:30px'>
</div>
<footer>
<div class = "aquatheme">
	<div class="icerik"></div>
	<div>
		<img src="<?php echo base_url();?>image/aqua3.jpg" width="100%" height="100%">
	</div>
	<div>
		<img src="<?php echo base_url();?>image/aqua4.jpg" width="100%" height="auto">
	</div>
	
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4368273981227!2d106.65378131428747!3d10.854342260719964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292b2aa0997d%3A0x6e3edc037662afe5!2sTh%E1%BB%A7y+Sinh+AZ+-+ThuysinhAZ.com!5e0!3m2!1svi!2s!4v1554296968016!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</footer>
<script>
	(function() {
		var saat = document.querySelector('.icerik');
  // 2:12:4 => 02:12:04 oluyor.
		var ekstraSifir = function(x) {
		return x < 10 ? '0' + x : x;
		};
	
		var tiktak = function() {
			var d = new Date();
			var h = ekstraSifir( d.getHours() );
			var m = ekstraSifir( d.getMinutes() );
			var s = ekstraSifir( d.getSeconds() );
			var current_time = [h,m,s].join(':');
			saat.innerHTML = current_time;
		};
	
		tiktak();
	
	// Calling ticktock() every 1 second
		setInterval(tiktak, 1000);
		}());
	</script>
</body>

</html>