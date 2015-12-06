<html>
<body>
	<script type="text/javascript" src="../../include/jquery/jquery-1.6.2.min.js"></script>
	<script type="text/javascript">
		<?php
			print("var folder = \"" . $_GET['folder'] . "\";\n");
			print("var msgno = \"" . $_GET['msgno'] . "\";\n");
		?>
		$.post("../../index.php", 
		    {
			module: "MailManager",
			action: "MailManagerAjax",
			file: "index",
			mode: "ajax",
			_operation: "mail",
			_operationarg: "open",
			_folder: folder,
			_msgno: msgno
		    }, function(data) {
			var content = JSON.parse(data);
			$("#content").html(content.result.ui);
			$("#mail_fldrname").remove();
			$(".mailSubHeader").remove();
			$("button").remove();
			$("#open_email_con tr").first().remove();
		    }
		);
	</script>
	<div id="content">
	
	</div>
</body>
</html>
