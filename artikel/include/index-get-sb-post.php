<?php

			if($post_sb->num_rows > 0) {
				while($row=$post_sb->fetch_assoc()) {
					echo "
					
					<img class='sb-rec-img' src='post/".$row['path']."/pic.jpg'>
					<p><a href='post/".$row['path']."' class='sb-rec-title'>".substr($row['title'],0, 60)."</a></p>
					<div class='clear'></div>
					<p class='sb-rec-text'>".substr($row['description'],0, 120)."...</p>

					";
				}
			}

?>