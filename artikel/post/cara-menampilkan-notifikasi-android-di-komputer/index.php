<?php
include '../../include/connect.php';
$id=$mysqli->real_escape_string(3);
include '../../include/retrive_data.php';
include '../../include/header.php';
include '../../include/article-info.php';
?>

<div id="article-contain">
<p>Smartphone adalah barang wajib ketika kita berada dimanapun. Tapi ada saatnya kita meninggalkannya di suatu tempat. Misalnya, ketika kita sedang bekerja di depan komputer, ternyata hp kita ada di kamar tidur. Saat hp berbunyi, kita akan langsung mencari dan mengecek hp tersebut. Apakah ada cara untuk mengecek notifikasi langsung dari komputer? Tentu ada, namanya PushBullet. Aplikasi ini akan memberikan notifikasi Android langsung dari komputer, jadi kita gak perlu repot-repot lagi mencari-cari hp saat berbunyi.</p>
<img class="article-img" src="pushbullet.jpg">
<p>PushBullet selain untuk mengecek notifikasi, juga bisa digunakan untuk membalas email, transfer gambar dan file, kontak, dan masih banyak lagi. Untuk mengaktifkan fitur ini, kita harus mengaktifkan layanan Notification Mirroring. Jika sudah, maka pemberitahuan di Android akan langsung terkirim di komputer kita. Contohnya, saat kita lagi chatting, maka setiap pesan yang masuk akan langsung ditampilkan ke komputer. Kita juga dapat memilih aplikasi apa yang ingin ditampilkan notifikasinya di komputer.</p>
<p>Untuk cara instalasinya sendiri ada 2 cara, yaitu dengan mendownload aplikasi executable untuk Windows atau Linux atau extension browser seperti Firfox atau Chrome. Dengan aplikasi ini kita tidak khawatir lagi jika perangkat Android Anda berbunyi, karena semua notifikasi Android yang kita inginkan telah ditampilkan di depan komputer kita</p>
<p><strong>Download PushBullet : </strong><a href="#">http://pushbullet.com</a></p>
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