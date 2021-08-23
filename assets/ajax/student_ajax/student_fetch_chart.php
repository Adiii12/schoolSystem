<?php
include '../../conn/conn.php';
if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT gender, COUNT(student_id) AS Total 
		FROM student 
		GROUP BY gender
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'language'		=>	$row["gender"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
?>