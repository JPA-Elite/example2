<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cloudinary Images</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			var cloudName = "duwyfmk8t"; // Replace with your Cloudinary cloud name
			var apiKey = "282451578226125"; // Replace with your Cloudinary API key
			var apiSecret = "HhpQFL9p94cgTmjsJg1RDzW0Bkw"; // Replace with your Cloudinary API secret
         
			var proxyUrl = ""; // Replace with your own proxy server URL
			

			var url = proxyUrl+"https://api.cloudinary.com/v1_1/" + cloudName + "/resources/image";
			var headers = {
				"Authorization": "Basic " + btoa(apiKey + ":" + apiSecret),
                "Access-Control-Allow-Origin":"*"
			};

			$.ajax({
				url: url,
				type: "GET",
				dataType: "json",
				headers: headers,
				success: function(result) {
					$.each(result.resources, function(i, item) {
						var img = $("<img>").attr("src", item.url);
						$("body").append(img);
					});
				}
			});
		});
	</script>
</head>
<body>
	<h1>Cloudinary Images</h1>
</body>
</html>
