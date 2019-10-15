<!-- Article content -->

<?php include 'token.php'; ?>


	</div>

	<div id="post-comment" class="ar-box">

			<p>Tinggalkan komentar</p>
				<form action="../../include/process_comment.php" method="post" style="text-align: center">
				<input name="name" id="input-comment" class="input" type="text" placeholder="Nama" required><br>
				<input name="email" id="input-comment" class="input" type="email" placeholder="Email" required><br>
				<textarea name="content" placeholder="Komentarmu..." id="input-comment" class="input"></textarea required><br>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<input type="hidden" name="path" value="<?php echo $path ?>">
				<input type="hidden" name="token" value="<?php echo $token ?>">
				<button type="submit" class="button">Post!</button>
			</form>

	</div>

	<div class="ar-box daftar-komen">

		<?php
		if($comment->num_rows > 0) {
			while ($row = $comment->fetch_array(MYSQLI_ASSOC)) {
				echo "<div id='comment'>
					<p id='namadantanggal'>
						<span id='name'>" . $row['name'] . "</span> pada <span id='date'>". date_format(date_create($row['date']), 'j M Y'). "</span> mengatakan:
					</p>
					<p id='isi-komen'>\"" . $row['content'] . "\"</p></div>"
				;
			}
		}else{
			echo "<div id='comment'>
				<p id='namadantanggal'>
					<span id='no_comm'>Tidak ada komentar</span>
				</p></div>";
		}
		?>
			
		</div>
	</div>
	</div>
	</div>
	</div>


<!-- Sidebar -->
