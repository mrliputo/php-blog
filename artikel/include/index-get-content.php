<?php
	if(isset($_GET['programming'])) {
		echo "
			<div class='ar-box' id='category'>
				Kategori : <strong>Pemrograman</strong>
			</div>
		";
	}else if(isset($_GET['application'])) {
		echo "
			<div class='ar-box' id='category'>
				Kategori : <strong>Aplikasi</strong>
			</div>
		";
	}else if(isset($_GET['networking'])) {
		echo "
			<div class='ar-box' id='category'>
				Kategori : <strong>Jaringan Komputer</strong>
			</div>
		";
	}else if(isset($_GET['mobile'])) {
		echo "
			<div class='ar-box' id='category'>
				Kategori : <strong>Teknologi Mobile</strong>
			</div>
		";
	}else if(isset($_GET['os'])) {
		echo "
			<div class='ar-box' id='category'>
				Kategori : <strong>Sistem Operasi</strong>
			</div>
		";
	}else if(isset($_GET['database'])) {
		echo "
			<div class='ar-box' id='category'>
				Kategori : <strong>Basis Data</strong>
			</div>
		";
	}

		if($post->num_rows > 0) {
			while($row = $post->fetch_assoc()) {
				echo "<div class='ar-box'>
								<div class='ar-content'>
									<img class='center-block' src='post/".$row['path']."/pic.jpg'>
									<p class='ar-title'><a href='post/".$row['path']."' class='ar-title'>".$row['title']."</a></p>
									<p class='ar-isi'>" . $row['description']."</p>
								</div>
								<div class='ar-info'>
									<a href='post/".$row['path']."'><button id='ar-button' class='button'>SELENGKAPNYA</button></a>
									<p class='ar-post-info'>Diposting oleh <strong>NORMAN SYARIF</strong> pada <strong>".date_format(date_create($row['date']), 'j M Y')."</strong></p>
									<p class='ar-cat'>Kategori : <strong>".$row['category']."</strong></p>
								</div>
							</div>

							";
			}
		}else{
			echo "<div class='ar-box' id='category'>
				Tidak ada artikel untuk kategori ini
			</div>	
			";
		}
		?>