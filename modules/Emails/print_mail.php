<html>
<body>
	<script type="text/javascript" src="../../include/jquery/jquery-1.6.2.min.js"></script>
	<script type="text/javascript">
		<?php
			print("var msgno = \"" . $_GET['msgno'] . "\";\n");
		?>
		$.post("../../index.php", 
		    {
			module: "Emails",
			action: "EmailsAjax",
			file: "DetailView",
			mode: "ajax",
			record: msgno
		    }, function(data) {
			//var content = JSON.parse(data);
                        $("#content").html(data);
			$(".hdrNameBg").remove();
			//$(".mailSubHeader").remove();
			//$("button").remove();
			//$("#open_email_con tr").first().remove();
		    }
		);
	</script>
	<div id="content">
	
	</div>
</body>
</html>
