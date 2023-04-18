<!DOCTYPE html>
<html>
<head>
	<title>LAFOR FAK FIRZA AZZ</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		/* Style untuk navbar */
		nav {
            border-radius: 8%;
			background-color: #333;
			height: 100vh;
			width: 20%;
			position: fixed;
			top: 0;
			left: 0;
			overflow-x: hidden;
			padding-top: 60px;
            margin-left: -110px;

		}

		nav ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}

		nav li {
			padding: 10px 20px;
			border-bottom: 1px solid #444;
			color: #fff;
			cursor: pointer;
		}

		nav li:hover {
			background-color: #444;
		}

		/* Style untuk konten halaman */
		.container {
			margin: 0 auto;
            margin-top: 300px;
			width: 60%;
			padding: 50px ;
            margin-left: 300px;

		}
        .kontoler {
            position: absolute;
			right: 0;
			top: 20px;
			width: 30%;
			height: 700px;
			background-color: #333;
			color: #fff;
			padding: 10px;
            margin-top: 100px;
            border-radius: 5%;
		}

        .serch {
            position: absolute;
			right: 0;
			top: 20px;
			width: 30%;
			height: 730px;
			padding: 10px;
            border-radius: 10%;
		}

		/* Style untuk judul halaman */
		h1 {
			font-size: 36px;
			margin-bottom: 30px;
		}

		/* Style untuk deskripsi halaman */
		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 50px;
		}

        img{
            margin-left: 100px;
        }

        textarea{
            width: 260px;
            height: 60px;
        }

        input{
            width: 260px;
            height: 60px;
        }

        .ditengah {
			position: absolute;
			top: 50%;
			left: 50%;
            margin-top: 4px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #000;
			width: 400px;
			height: 760px;
            transform: translate(-50%, -50%);
		}
        .message {
        display: flex;
        margin-bottom: 10px;
        height: -10;
      }

      .message .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        margin-left: -1px;
      }

      .message .bubble {
        background-color: #f1f0f0;
        padding: 10px;
        border-radius: 10px;
        max-width: 300px;
        height: -10;
        align-self: flex-start;
      }

      .message .bubble.outgoing {
        background-color: #dcf8c6;
        align-self: flex-end;
      }

      .message .bubble.incoming {
        background-color: #fff;
      }

      .message .bubble.outgoing::after {
        content: "";
        display: block;
        position: absolute;
        width: 0;
        height: -10;
        border-top: -10px solid #dcf8c6;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        bottom: -10px;
        right: 10px;
      }

      .message .bubble.incoming::after {
        content: "";
        display: block;
        position: absolute;
        width: 0;
        height: -10;
        border-top: -10px solid #fff;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        bottom: -10px;
        left: -10px;
      }

      /* Add this style to make avatar 2 on the right */
      .message.outgoing {
        flex-direction: row-reverse;
      }

      /* Add this style to make avatar 1 on the left */
      .message.incoming {
        flex-direction: row;
      }
	</style>
</head>
<body style="background-color: grey;">

	<!-- Navbar -->

	<nav>
        <img style="border-radius: 50%;margin: 40px; width: 200px;margin-top: -40px;margin-left: 130px;" src="asset/laporfuck.jpg" alt="Deskripsi Gambar">
		<ul style="margin-left: 130px">
			<li>HOME</li>
			<li>LAPOR</li>
            <li>RUMAH SAKIT </li>
			<li>POLISI</li>
            <img style="border-radius: 50%;margin: 20px; width: 90px;margin-top: 460px;" src="asset/poto.jpg" alt="Deskripsi Gambar">
            <p style="margin-top: -90px;margin-left: 130px;color: aliceblue;">FIRZA AZZHARA</p>

		</ul>
	</nav>

	<!-- Konten halaman -->
	<div class="container">
		<form action="#" method="post">
            <label for="nama">Isi data diri untuk verivikasi:</label> <br>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required> <br>

            <label for="email">:</label><br>
            <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda" required><br>

            <label for="Kota">:</label><br>
            <input type="Kota" id="Kota" name="Kota" placeholder="Kota" required><br>

            <label for="Keluhan">:</label><br>
            <textarea id="Keluhan" name="Keluhan" placeholder="Keluhan"></textarea><br>

            <input style="width: 260px;height: 60px;" type="submit" value="Pangil POLISI TERDEKAT">
        </form>
	</div>


    <div class="ditengah">
		<h1>Chat aspirasi</h1>
        <div class="message incoming">
            <img src="asset/poto.jpg" alt="Avatar" class="avatar">
            <div class="bubble">
                <p style="font-size: small;">Selamat pagi, saya ingin mengajukan aspirasi tentang kondisi jalan </p>
            </div>
          </div>
          <div class="message outgoing">
            <img src="asset/Fashion-Korea-Gaya-admin gg2.jpg" alt="Avatar" class="avatar">
            <div class="bubble">
                <p style="font-size: small;">Tentu, silakan ceritakan aspirasimu.</p>
            </div>
          </div>
          <div class="message incoming">
            <img src="asset/poto.jpg" alt="Avatar" class="avatar">
            <div class="bubble">
                <p style="font-size: small;">Saya ingin mengajukan permintaan untuk perbaikan jalan yang rusak di lingkungan kami. Kondisi jalan yang buruk menyebabkan bahaya bagi pengendara dan pejalan kaki, serta merusak kendaraan.</p>
            </div>
          </div>
          <div class="message outgoing">
            <img src="asset/Fashion-Korea-Gaya-admin gg2.jpg" alt="Avatar" class="avatar">
            <div class="bubble">
              <p style="font-size: small;">Terima kasih atas aspirasimu. Saya akan segera mengajukan permintaanmu kepada pihak terkait untuk ditindaklanjuti.</p>
            </div>
          </div>
          <label style="margin-top: -90px; padding-top: -10px;justify-content: right;" for="chat">:</label><br>
            <input id="chat" name="chat" placeholder="isi chat"></input>
            <input style="width: 60px;height: 60px;border-radius: 20%;" type="submit" value="kirim">
	</div>



   <div class="serch">
    <label for="email"></label><br>
    <input style="width: 540px;background-color: #333;;" type="email" id="email" name="email" placeholder="apa tujuan Anda" required><br>
   </div>

    <div class="kontoler">
        <img style="margin-left: -1px;width: 560px;border-radius: 10%;" src="asset/maps.png" alt=""><br>
        <br>
        <input style="width: 260px;height: 60px;margin-left: 20px;" type="submit" value=" POLISI TERDEKAT">
        <input style="width: 260px;height: 60px;" type="submit" value=" RUMAH SAKIT  TERDEKAT">
    </div>
</body>
</html>
<?php /**PATH C:\Users\RAYZEN\Music\S4\WEBLAB\lara\laporpak\resources\views/home.blade.php ENDPATH**/ ?>