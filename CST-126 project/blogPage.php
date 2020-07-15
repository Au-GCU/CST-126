<head>

</head>
<body>
<h1>My Blog </h1>
<input name="new" type="button" value="Home" onclick="window.location='index.html'" class="Redirect" />
	<table>
		<thead>
			<tr>
				<th>Date</th>
				<th>Title</th>
				<th>Post</th>
			</tr>
		</thead>
		
		<tbody>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "Database/blogService.php";


        $p = new blogService();
        $blogs = $p->returnAll();
        for ($x = 0; $x < count($blogs); $x++) {
            $da = $blogs[$x]['Date'];
            $ti = $blogs[$x]['Title'];
            $po = $blogs[$x]['Post'];
            echo "<tr>";
            echo    "<td>" . $da . "</td>";
            echo    "<td>" . $ti . "</td>";
            echo    "<td>" . $po . "</td>";
            echo "</tr>";
        }
?>
		</tbody>
	</table>
<input name="new" type="button" value="Add New Blog" onclick="window.location='addNewBlog.html'" class="Redirect" />
</body>