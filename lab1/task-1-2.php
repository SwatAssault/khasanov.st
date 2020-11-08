<!DOCTYPE html>
<html>
	<head>
		<title>Хасанов Р.М. ИВТ-417</title>
	</head>
	<body>
		<TABLE border=1>
			<?php
				$a = 1;
				for ($i=1; $i<=10; $i++) {
					echo ("<tr>");
					for ($k=1; $k<=10; $k++) {
						if ($a % 2 == 0) {
							echo ("<td align=center style=color:red>");	
						} else {
							echo ("<td align=center style=color:black>");	
						}
						echo ($a++);
						echo ("</td>");
					}
					echo ("</tr>"); 
				}
			?>
		</TABLE>
	</body>
</html>
