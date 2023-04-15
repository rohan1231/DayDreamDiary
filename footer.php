<!-- jQuery Cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>	
<!-- bootstrap cdn -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<script type="text/javascript">
		
		$("#text").on("change paste keyup", function() {

 			  $.ajax({
				  method: "POST",
				  url: "updateText.php",
				  data: { content: $("#text").val() }
				});

		});

	</script>
</body>
</html>

