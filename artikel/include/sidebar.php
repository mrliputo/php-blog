<?php 
$post_sb = $mysqli->query("SELECT * FROM post ORDER BY date DESC LIMIT 3"); 
$comment_sb = $mysqli->query("SELECT * FROM post INNER JOIN comment ON post.id=comment.post_id ORDER BY comment.date DESC LIMIT 3");
?>


<!-- Comment section -->

<div class="container col-md-3 col-xs-10 col-xs-offset-1">
<div class="row">
		
		<form action="../../search.php" id="searchbox" method="post" class="side-box">
			<h4 class="side-title">Pencarian</h4>
			<div class="foo" style="text-align: center">
			<input style="margin-right: 10px" class="input" name="s" placeholder="Apa yang kamu cari?" type="text">
			<button type="submit" id="search-btn" class="button" type="submit" name="search">Go</button>
			</div>
		</form>

		<div id="cat" class="side-box">
			<h4 class="side-title">Kategori</h4>
			<a href="../../index.php?programming"><button class="button center-block">Pemrograman</button></a>
			<a href="../../index.php?application"><button class="button center-block">Aplikasi</button></a>
			<a href="../../index.php?networking"><button class="button center-block">Jaringan Komputer</button></a>
			<a href="../../index.php?mobile"><button class="button center-block">Teknologi Mobile</button></a>
			<a href="../../index.php?os"><button class="button center-block">Sistem Operasi</button></a>
			<a href="../../index.php?database"><button class="button center-block">Basis Data</button></a>
		</div>

		<div id="side-rec-post" class="side-box">
			<h4 class="side-title">Postingan terbaru</h4>

			<?php

			if($post_sb->num_rows > 0) {
				while($row=$post_sb->fetch_assoc()) {
					echo "
					
					<img class='sb-rec-img' src='../".$row['path']."/pic.jpg'>
					<a href='../../post/".$row['path']."' class='sb-rec-title'>".substr($row['title'],0, 60)."</a>
					<div class='clear'></div>
					<p class='sb-rec-text'>".substr($row['description'],0, 120)."...</p>


					";
				}
			}

			?>
		
		</div>

		<div id="side-rec-comment" class="side-box">
			<h4 class="side-title">Komentar terbaru</h4>

			<?php

			if($comment_sb->num_rows > 0) {
				while($row = $comment_sb->fetch_assoc()) {
					echo "
					<p class='sb-rec-comment-info'>".$row['name']." <span class='sb-rec-comment-on'>memberikan komentar pada </span><a href='../".$row['path']."'>".$row['title']."</a> : </p>
					<p class='sb-rec-comment-content'>\"".$row['content']."\"";
				}
			}

			?>

		</div>

	</div>
	</div>

</div>

</div>

<!-- Footer -->