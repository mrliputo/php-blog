<?php
include '../../include/connect.php';
$id=$mysqli->real_escape_string(2);
include '../../include/retrive_data.php';
include '../../include/header.php';
include '../../include/article-info.php';
?>

<div id="article-contain">

<p>Kabar gembira buat pengguna Ubuntu, akhirnya Unity 8 keluar juga!. Yah, walaupun masih versi preview sih, tapi bagi yang udah kebelet pengen nyobain unity 8, bisa langsung coba diinstal. Buat yang belum tau, unity adalah sebuah desktop environment (DE) default-nya ubuntu. Bagi yang belum tau apa itu desktop environment, desktop environment adalah software yang mengatur antarmuka sistem operasi. Saat artikel ini ditulis, unity versi stabil terbaru adalah versi 7.4. Untuk versi 8 sendiri masih dalam tahap pengembangan. Jadi bagi yang pengen nyoba instal unity 8, kemungkinan besar bakal nemuin banyak bug-bug. Jadi kalo ada masalah sama sistemnya, resiko ditanggung sendiri ya :).</p>
<p>Bagi yang penasaran, boleh liat videonya dulu</p>
<iframe class="youtube-video img-responsive" src="https://www.youtube.com/embed/ItFoz92zNm0" frameborder="0" allowfullscreen></iframe>
<p>Gimana? Keren kan? Sayangnya, Ubuntu yang akan dirilis bulan depan, ubuntu 16.10, masih menggunakan unity 7 sebagai default DE, dan unity 8 sebagai DE opsional <a href="http://www.omgubuntu.co.uk/2016/05/ubuntu-16-10-unity-8-default-desktop">(sumber)</a>. Untuk unity 8 kemungkinan akan menjadi default DE pada ubuntu 17.04. Bagi yang pengen instal unity 8, unity 7 kamu gak bakalan ketimpa dengan unity 8, kok, jadi jangan khawatir kalo unity 7 nya hilang atau bermasalah.</p>
<p>Oke, untuk menginstal unity 8 preview buka terminal dan ketikkan perintah berikut :</p>
<textarea class="codeShell	">
sudo apt-get install unity8-desktop-session-mir	</textarea>
<p>Kemudian tambahkan Stable Phone Overlay PPA ke software sources-mu</p>
<textarea class="codeShell">
sudo add-apt-repository ppa:ci-train-ppa-service/stable-phone-overlay
sudo apt update && sudo apt upgrade</textarea>
<p>Selanjutnya reboot, dan pilih Unity 8 session di Unity Greeter (login screen), dan login seperti biasa.<br>
Itu tadi cara instalasi unity 8 pada Ubuntu 16.04. Semoga bermanfaat.</p>
<p><strong>Source :</strong> <a href="http://www.omgubuntu.co.uk/2016/04/ubuntu-16-04-unity-8-desktop-progress-video">http://www.omgubuntu.co.uk/2016/04/ubuntu-16-04-unity-8-desktop-progress-video</a></p>

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