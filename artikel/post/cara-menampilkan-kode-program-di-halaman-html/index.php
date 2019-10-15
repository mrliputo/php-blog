<?php
include '../../include/connect.php';
$id=$mysqli->real_escape_string(1);
include '../../include/retrive_data.php';
include '../../include/header.php';
include '../../include/article-info.php';
?>

<div id="article-contain">
	<p>Mungkin bagi yang sudah biasa bergelut di dunia per-web-design-an pasti tau kalau pada file html kita tidak bisa menulis kode pemrograman di halaman html kita dan menampilkannya sebagai plain text, bahkan jika kode itu adalah kode html sendiri. Jika kita nekad menulisnya, maka tag-tag html seperti <em>&lt;html&gt;, &lt;head&gt;, &lt;body&gt;</em> tidak akan ikut tercetak. Hal ini disebabkan karena tag-tag tersebut dikenal sebagai tag html asli, bukan plain text. Sebenarnya ada sih cara untuk menulis kode di halaman html, yaitu dengan membungkusnya diantara tag <em>&lt;xmp&gt;</em> dan <em>&lt;/xmp&gt;</em>.</p>
	<!--code-->
<textarea class="codePhp">
<xmp>
	<html>
		<body>
			<!-- Kode akan muncul presis seperti yang dituliskan -->
		</body>
	</html>
</xmp></textarea>
	<p>Maka hasilnya akan seperti ini :</p>
	<img class="article-img" src="xmp-tag.jpg">
	<p>Meskipun begitu, cara ini tidak disarankan lagi, karena tag <em>&lt;xmp&gt;</em> sudah ditandai sebagai obsolete. Tapi jangan khawatir, ada banyak kok cara lain untuk menampilkan kode program di halaman html, salah satunya adalah dengan menggunakan library Javascript yang bernama CodeMirror. CodeMirror ini selain berfungsi untuk menampilkan kode program, juga bisa berfungsi sebagai text editor pada browser, ya mirip-mirip dengan notepad++ atau tryit-nya w3school gitu lah. CodeMirror juga lebih dinamis dari pada tag <em>&lt;xmp&gt;</em>. Soalnya dengan CodeMirror kita bisa dengan bebas mengubah tampilan editor, karena ada banyak pilihan tema yang disediakan. Selain itu ada banyak fitur-fitur lainnya, seperti menampilkan line number, highlight syntax dari banyak bahasa pemrograman yang berbeda, dan masih banyak lagi.</p>
	<p>Oke langsung saja, untuk memasang CodeMirror, kita perlu mendownload file nya di <a href="http://codemirror.net">codemirror.net</a>. Setelah didownload, kita extract filenya dan rename foldernya menjadi <strong>codemirror</strong> supaya mudah diakses nantinya. Kemudian kita buat lagi file html baru, namanya terserah, misalnya <strong>tescodemirror.html</strong>.</p>
	<img class="article-img" src="codemirror-dir.jpg">
	<p>Isi file <strong>tescodemirror.html</strong> dengan kode berikut:
<!--Code-->
<textarea class="codePhp">
<!DOCTYPE html>
<html>
<head>
	<title>Tes CodeMirror</title>
	<link rel="stylesheet" href="codemirror/lib/codemirror.css">
  <script src="codemirror/lib/codemirror.js"></script>
  <script type="text/javascript" src="codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <script type="text/javascript" src="codemirror/mode/xml/xml.js"></script>
  <script type="text/javascript" src="codemirror/mode/css/css.js"></script>
  <script type="text/javascript" src="codemirror/mode/clike/clike.js"></script>
  <script src="codemirror/mode/javascript/javascript.js"></script>
  <script src="codemirror/mode/php/php.js"></script>
</head>
<body>

<textarea id="code">
<!--Kode mulai ditulis dari sini-->
<html>
	<body>
		<p>Code ini ditulis menggunakan CodeMirror</p>
	</body>
</html>
<!--Kode selesai ditulis-->
&lt;/textarea&gt;

<script type="text/javascript">
	
	CodeMirror.fromTextArea(code, {
 		mode: "application/x-httpd-php",
    lineNumbers: true,
   });

  </script>
</body>
</html></textarea>
<!--Code-->
	<p>Jika file <strong>tescodemirror.html</strong> dijalankan, maka hasilnya akan menjadi seperti ini: </p>
	<img class="article-img" src="codemirror-result.jpg">
	<p>Gimana? Lebih keren kan? :) Kalau dilihat pada baris ke-29, disitu ada opsi mode. Mode ini adalah bahasa pemrograman yang digunakan, karena setiap bahasa pemrograman, memiliki warna sintaks yang berbeda-beda. Untuk daftar modenya bisa dilihat di <a href="http://codemirror.net/mode/">codemirror.net/mode</a>.
	<p>Itu tadi penjelasan mengenai cara menampilkan kode program di html menggunakan CodeMirror. Semoga bermanfaat. Terimakasih.
	</p>
</div>
	
<?php
include '../../include/comment.php';
include '../../include/sidebar.php';
echo "<div id='blog-footer'>";
include '../../assets/footer.php';
echo "</div>";
?>

</div>
<script type="text/javascript" src="../../include/script.js"></script>
</body>
</html>