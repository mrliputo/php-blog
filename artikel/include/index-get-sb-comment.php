<?php

			if($comment_sb->num_rows > 0) {
				while($row = $comment_sb->fetch_assoc()) {
					echo "
					<p class='sb-rec-comment-info'>".$row['name']." <span class='sb-rec-comment-on'>memberikan komentar pada </span><a href='post/".$row['path']."'>".$row['title']."</a> : </p>
					<p class='sb-rec-comment-content'>\"".$row['content']."\"";
				}
			}

?>