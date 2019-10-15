<?php

function anti_hacker($gak_safe) {
	$udah_safe = stripslashes(strip_tags(htmlspecialchars($gak_safe, ENT_QUOTES)));
	return $udah_safe;
}

if(isset($_POST['search'])){
	$kata_kunci = $mysqli->real_escape_string(anti_hacker(trim($_POST['s'])));

	if(strlen($kata_kunci)<3){
		echo '<p>Kata kunci terlalu pendek.</p>';
	}else{
		$where = "";
		$kata_kunci_split = preg_split('/[\s]+/', $kata_kunci);
		$total_kata_kunci = count($kata_kunci_split);

		foreach($kata_kunci_split as $key=>$kunci){
			$where .= "tags LIKE '%$kunci%'";
			if($key != ($total_kata_kunci - 1)){
				$where .= " OR ";
			}
		}

		$results = $mysqli->query("SELECT * FROM post WHERE $where");

		$num = $results->num_rows;
		
		if($num == 0){
			echo 'Pencarian <b>'.$kata_kunci.'</b> tidak ditemukan';
		}else{
			echo '<p>Pencarian <b>'.$kata_kunci.'</b> mendapat '.$num.' hasil:</p>';
			while($row = $results->fetch_assoc()){
				echo '
					<p id="search-title"><a href="post/'.$row['path'].'">'.$row['title'].'</a></p>
					<p id="search-desc">'.$row['description'].'</p>
				';
			}
		}
	}
}else{
	echo "Ketikkan keyboard diatas!";
}

?>