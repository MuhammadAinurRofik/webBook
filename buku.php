<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <header>
      <h1><span style="color: #53c73f">ON</span>BOOK.</h1>
      <nav>
        <ul>
          <a href="#beranda"><button>Beranda</button></a>
          <a href="#rekomendasi"><button>Rekomendasi</button></a>
          <a href="#popular"><button>Popular</button></a>
          <a href="logout.php"><button>Logout</button></a>
        </ul>
      </nav>
    </header>

    <div class="home" id="beranda">
      <h2>Selamat Datang di Websitus Buku Kami!</h2>
      <h3>
        Kami mengundang Anda untuk menemukan keindahan dan kekuatan kata-kata
        bersama kami.
      </h3>
      <h3>
        Dunia Baru Menanti di Setiap Lembar, Inilah ONBOOK Tempat Anda Akan
        Menemukan Keindahan di Setiap Kata.
      </h3>
    </div>

    <!--  -->
    <!-- halaman rekomendasi -->
    <div class="judulhalaman" id="rekomendasi">
      <h3>REKOMENDASI</h3>
      <h3>
        <a
          href="rekomendasi.php"
          >Lihat Lainnya</a
        >
      </h3>
    </div>
    <div class="halamanbuku">
      <!-- book1 -->

      <div class="containerbook">
        <img src="./image/book1.jpg" />
        <h5>J.S. Khairen</h5>
        <h4><strong>Melangkah </strong></h4>
        <button class="btn" onclick="openPopup('book1')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book1" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book1')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Melangkah"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>368</td>
                <td>Gramedia Widiasarana Indonesia</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>22 Mar 2020</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Novel karya J. S Khairen yang berjudul Melangkah bertemakan
              tentang petualangan di Indonesia. Tidak hanya itu, cerita dalam
              novel ini juga mengutamakan kisah pahlawan. Berbeda dari
              karya-karya yang sebelumnya, di novel ini Khairen memberi sedikit
              imajinasi yang ia tanamkan. Terdapat 36 episode dan 5 babak.
            </p>
            <p>Sinopsis buku</p>
            <p>
              Listrik padam di seluruh Jawa dan Bali secara misterius. Ancaman
              nyata kekuatan baru yang hendak menaklukkan Nusantara.
            </p>
            <p>
              Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk
              mendapati nasib ratusan juta manusia ada di tangan mereka! Empat
              mahasiswa ekonomi ini, harus bertarung melawan pasukan berkuda
              yang bisa melontarkan listrik! Semua dipersulit oleh seorang
              buronan tingkat tinggi bertopeng pahlawan yang punya rencana
              mengerikan.
            </p>
            <p>
              Ternyata pesan arwah nenek moyang itu benar-benar terwujud. “Akan
              datang kegelapan yang berderap, bersama ribuan kuda raksasa di
              kala malam. Mereka bangun setelah sekian lama, untuk menghancurkan
              Nusantara. Seorang lelaki dan seorang perempuan ditakdirkan
              membaurkan air di lautan dan api di pegunungan. Menyatukan tanah
              yang menghujam, dan udara yang terhampar.”
            </p>
            <p>
              Kisah tentang persahabatan, tentang jurang ego anak dan orangtua,
              tentang menyeimbangkan logika dan perasaan. Juga tentang melangkah
              menuju masa depan. Bahwa, apa pun yang menjadi luka masa lalu,
              biarlah mengering bersama waktu.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book2 -->

      <div class="containerbook">
        <img src="./image/book2.jpg" />
        <h5>Leila S. Chudori</h5>
        <h4><strong> Laut Bercerita </strong></h4>
        <button class="btn" onclick="openPopup('book2')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book2" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book2')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Laut Bercerita"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>394</td>
                <td>Kepustakaan Populer Gramedia</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>25 Okt 2017</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Buku ini terdiri atas dua bagian. Bagian pertama mengambil sudut
              pandang seorang mahasiswa aktivis bernama Laut, menceritakan
              bagaimana Laut dan kawan-kawannya menyusun rencana,
              berpindah-pindah dalam pelarian, hingga tertangkap oleh pasukan
              rahasia. Sedangkan bagian kedua dikisahkan oleh Asmara, adik Laut.
              Bagian kedua mewakili perasaan keluarga korban penghilangan paksa,
              bagaimana pencarian mereka terhadap kerabat mereka yang tak pernah
              kembali. Buku ini ditulis sebagai bentuk tribute bagi para aktivis
              yang diculik, yang kembali, dan yang tak kembali dan keluarga yang
              terus menerus sampai sekarang mencari-cari jawaban.
            </p>
            <p>
              Novel ini merupakan perwujudan dalam bentuk fiksi bahwa kita
              sebagai bangsa Indonesia tidak boleh melupakan sejarah yang telah
              membentuk sekaligus menjadi tumpuan bangsa Ini. Novel ini juga
              mengajak pembaca menguak misteri-misteri bangsa ini yang mana
              tidak diajarkan di sekolah. Walaupun novel ini adalah fiksi, laut
              bercerita menunjukkan kepada pembaca bahwa negeri ini pernah
              memasuki masa pemerintahan yang kelam.
            </p>
            <p>Sinopsis buku</p>
            <p>
              Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang
              kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan
              kekosongan di dada, sekelompok orang yang gemar menyiksa dan
              lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam
              anaknya, dan tentang cinta yang tak akan luntur.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book3 -->

      <div class="containerbook">
        <img src="./image/book3.jpg" />
        <h5>Oh Su Hyang</h5>
        <h4><strong> Bicara Itu Ada Seninya </strong></h4>

        <button class="btn" onclick="openPopup('book3')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book3" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book3')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Bicara Itu Ada Seninya"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>256</td>
                <td>Bhuana Ilmu Populer</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>11 Mei 2021</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Ketika komunikasi menjadi hal yang penting untuk bersaing, pakar
              komunikasi Oh Su Hyang mengeluarkan buku yang sangat berarti.
              Selain berisi tentang pengalaman peningkatan diri, buku ini juga
              memuat berbagai konten mengenai teknik komunikasi, persuasi, dan
              negosiasi.
            </p>
            <p>
              Lalu bagaimana cara berbicara yang baik? Apakah berbicara dengan
              artikulasi yang jelas? Atau berbicara tanpa mengambil tarikan
              napas? Tidak! Sebuah ucapan yang bisa disebut baik adalah yang
              bisa menggetarkan hati. Ucapan seorang juara memiliki daya tarik
              tersendiri. Ucapan pemandu acara memiliki kemampuan menghidupkan
              suasana dan kekuatan kalimatnya yang terus terang. Anda harus
              pandai berbicara untuk menunjukkan diri Anda kepada lawan bicara
              dalam kehidupan sosial. Orang yang berbicara dengan mahir akan
              menjadi lebih maju daripada yang lainnya.
            </p>
            <p>
              Untuk mencapai tujuan komunikasi, persuasi, dan negosiasi, Anda
              harus mengetahui metode komunikasi yang efisien. Buku ini
              dijabarkan agar dapat dimengerti oleh siapa saja. Terdapat banyak
              episode menarik dari orang-orang terkenal dan juga rahasia inti
              dari komunikasi. Jika Anda membacanya dengan runut, saya yakin
              rasa percaya diri Anda untuk berbicara pun akan tumbuh dengan
              sendirinya."
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book4 -->

      <div class="containerbook">
        <img src="./image/book4.jpg" />
        <h5>Almira Bastari</h5>
        <h4><strong> Home Sweet Loan </strong></h4>

        <button class="btn" onclick="openPopup('book4')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book4" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book4')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Home Sweet Loan"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>312</td>
                <td>Gramedia Pustaka Utama</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>15 Feb 2022</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Novel Home Sweet Loan ditulis oleh Almira Bastari, seorang penulis
              muda yang namanya sudah populer di Indonesia. Novel Home Sweet
              Loan baru saja diterbitkan oleh Gramedia Pustaka Utama pada tahun
              2022.
            </p>
            <p>
              Novel Home Sweet Loan mengangkat genre yang sama dengan karya
              Almira sebelumnya yang berjudul “Ganjil Genap”, yaitu metropop.
              Namun, novel Home Sweet Loan ini akan menyajikan cerita yang
              ditulis menjadi lebih serius.
            </p>
            <p>Sinopsis buku</p>

            <p>
              Empat orang yang berteman sejak SMA bekerja di perusahaan yang
              sama meski beda nasib. Di usia 31 tahun, mereka berburu rumah
              idaman yang minimal nyerempet Jakarta. Kaluna, pegawai Bagian
              Umum, yang gajinya tak pernah menyentuh dua digit. Gadis ini
              bekerja sampingan sebagai model bibir, bermimpi membeli rumah demi
              keluar dari situasi tiga kepala keluarga yang bertumpuk di bawah
              satu atap. Di tengah perjuangannya menabung, Kaluna dirongrong
              oleh kekasihnya untuk pesta pernikahan mewah.
            </p>
            <p>
              Selain itu, ada juga masalah hutang keluarganya. Masalah-masalah
              ini menjadikan Kaluna merasa menjadi rakyat jelata saja tidak
              cukup membuat kepalanya mumet luar biasa. Tanisha, ibu satu anak
              yang menjalani Long Distance Marriage, mencari rumah murah dekat
              MRT yang juga bisa menampung mertuanya.
            </p>
            <p>
              Kamamiya, yang berambisi menjadi selebgram, mencari apartemen
              cantik untuk diunggah ke media sosial demi memenuhi gengsinya agar
              bisa menikah dengan pria kaya. Danan, anak tunggal tanpa beban
              yang akhirnya berpikir untuk berhenti hura-hura, dan membeli aset
              agar bisa pensiun dengan tenang. Apakah keempat sahabat ini
              berhasil menemukan rumah yang mampu mereka cicil? Dan apakah
              Kaluna bisa membentuk keluarga yang ia impikan?
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book5 -->

      <div class="containerbook">
        <img src="./image/book5.jpg" />
        <h5>Meira Anastasia</h5>
        <h4><strong> Imperfect </strong></h4>

        <button class="btn" onclick="openPopup('book5')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book5" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book5')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Imperfect"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>220</td>
                <td>Gramedia Pustaka Utama</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>1 Des 2019</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Buku Imperfect karya Meira Anastasia kembali hadir dengan tampilan
              sampul yang baru. Sampul yang baru ini diambil dari film
              Imperfect, yang merupakan film adaptasi, yang ceritanya diambil
              dari buku tersebut. Dalam buku Imperfect yang baru ini, terdapat
              beberapa kelebihan dibandingkan dengan buku sebelumnya.
            </p>
            <p>
              Salah satunya adalah dengan adanya tambahan isi buku. Tambahan
              tersebut berupa surat-surat dari beberapa pemain film Imperfect.
              Isi suratnya sendiri tentang pengalaman para pemain tentang
              hal-hal yang membuat mereka menghadapi rasa insecure. Selain itu,
              terdapat ilustrasi tambahan karya Puty Puar dengan cetakan yang
              lebih komikal. Yang terpenting dari buku Imperfect sampul film
              ini, yakni harganya yang tentu lebih terjangkau. Sebagai seorang
              penulis, Meira berusaha membuat harga lebih bersahabat agar lebih
              banyak yang bisa membaca buku Imperfect ini.
            </p>
            <p>Sinopsis buku</p>
            <p>
              “TERNYATA, ORANG CAKEP BELUM TENTU ISTRINYA CANTIK!” JLEB!
              Komentar di Instagram suamiku (@ernestprakasa) di atas adalah
              kalimat yang akan kuingat seumur hidup. Ternyata menjadi istri
              seorang public figure berat ya, karena sepertinya aku harus
              memenuhi ekspektasi netizen. #nangisdipojokan
            </p>
            <p>
              Menulis buku ini membuatku harus membuka kembali banyak luka.
              Tetapi dengan mengakui luka, aku jadi bisa belajar bagaimana
              mengatasinya. Juga belajar menjadi lebih kuat lagi.
            </p>
            <p>
              BUKU INI BUKANLAH BUKU MOTIVASI, melainkan kumpulan cerita seorang
              perempuan, istri, sekaligus ibu yang sedang berjuang agar bisa
              mengatakan kepada diri sendiri: Aku tidak sempurna, tapi tidak
              apa-apa. Karena aku bahagia.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->
    </div>

    <!-- halaman popular -->
    <div class="judulhalaman" id="popular">
      <h3>POPULAR</h3>
      <h3>
        <a
          href="popular.php"
          >Lihat Lainnya</a
        >
      </h3>
    </div>
    <div class="halamanbuku">
      <!-- book6 -->

      <div class="containerbook">
        <img src="./image/book6.jpg" />
        <h5>Mark Manson</h5>
        <h4>
          <strong>Sebuah Seni untuk <br />Bersikap Bodo Amat</strong>
        </h4>

        <button class="btn" onclick="openPopup('book6')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book6" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book6')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Sebuah Seni untuk Bersikap Bodo Amat"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>256</td>
                <td>Gramedia Widiasarana Indonesia</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>15 Mar 2022</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Buku Sebuah Seni untuk Bersikap Bodo Amat mengajarkan tiga seni
              yang dapat diterapkan pada kehidupan. Seni pertama adalah bersikap
              masa bodoh (bodo amat, tidak peduli) pada semua halangan dan
              perjuangan dalam mencapai sesuai yang diinginkan. Seni kedua
              adalah mencari hal penting yang menjadi prioritas agar seni
              pertama, masa bodoh (bodo amat, tidak peduli), dapat lebih mudah
              dilakukan pada hal sepele. Terakhir, seni ketiga, mulai menentukan
              hal yang lebih penting atau lebih diprioritaskan saat menuju
              dewasa.
            </p>
            <p>Sinopsis buku</p>
            <p>
              Mark Manson adalah satu dari sedikit pengarang yang bukunya setia
              menemani para pembaca di Indonesia dan seluruh dunia. Telah
              terjual lebih dari 400.000 eksemplar di Indonesia, Anda pasti
              tidak asing dengan Sebuah Seni untuk Bersikap Bodo Amat dan
              Segala-galanya Ambyar.
            </p>
            <p>
              Sebuah Seni untuk Bersikap Bodo Amat adalah buku fenomenal yang
              menjadi panduan pengembangan diri saat ini. Isinya sangat relevan
              dan konteksual dengan fenomena-fenomena sosial zaman ini, ketika
              banyak orang mudah terseret arus konsumerisme, gemar mencari
              validasi semu, dan mudah kesepian di tengah hingar bingar dunia.
              Sebuah Seni untuk Bersikap Bodo Amat (Subtle Art of Not Giving A
              F*ck) menuntun ke jalan self-healing tanpa ada sedikit pun kesan
              menggurui.
            </p>
            <p>
              Edisi handy ini hadir dengan sampul yang ringan dan kemasan yang
              lebih dinamis, serta enak digenggam. Ini akan memudahkan Anda
              untuk membawa-bawanya dalam perjalanan. Anda bisa leluasa untuk
              membacanya di taman, café, stasiun, atau di tempat umum lainnya.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book7 -->

      <div class="containerbook">
        <img src="./image/book7.jpg" />
        <h5>Reinhard Damopolii</h5>
        <h4>
          <strong> Tuhan, Aku Ingin <br />Tetap Hidup </strong>
        </h4>

        <button class="btn" onclick="openPopup('book7')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book7" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book7')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>
              Deskripsi buku "Tuhan, Aku Ingin Tetap Hidup: Spinal Cord Injury
              Melumpuhkan Kakiku"...
            </p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>172</td>
                <td>Bhuana Ilmu Populer</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>7 Mei 2023</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Tuhan, Aku Ingin Tetap Hidup: Spinal Cord Injury Melumpuhkan
              Kakiku merupakan buku yang akan menggugah kesadaran dan keimanan
              kita. Ini tentang bagaimana kedamaian hati membuat kita bisa
              bangkit dari keterpurukan dan mampu bertahan dengan menerima
              kondisi yang ada.
            </p>
            <p>Sinopsis buku</p>
            <p>
              Tanpa tanda-tanda, tanpa sebab apa pun, dan dalam waktu yang
              begitu singkat, hidupku berubah drastis. Kebahagiaan dan
              kesempurnaan hidupku, tiba-tiba saja berubah menjadi jurang
              kesedihan hingga menggoda imanku untuk mengakhiri hidup. Musibah
              itu membuat hidupku kacau. Aku cacat! Keajaiban yang kutunggu
              ternyata tak datang menghampiri. Aku pun pasrah. Hingga akhirnya,
              kedamaian itu mendatangiku dengan penuh kasih. Kedamaian itu
              mengubahku. Ia mengangkatku dari keterpurukan, menyadarkanku
              kembali, membantuku menerima keadaanku, hingga akhirnya aku
              berhasil bangkit kembali. Bagaimanakah aku bisa bertemu dengan
              kedamaian? Apa yang membuatnya mampu mengubahku untuk bertahan
              hidup dengan kondisiku? Ikutlah denganku, akan kuceritakan
              semuanya.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book8 -->

      <div class="containerbook">
        <img src="./image/book8.jpg" />
        <h5>MORGAN HOUSEL</h5>
        <h4>
          <strong> The Psychology <br />of Money </strong>
        </h4>

        <button class="btn" onclick="openPopup('book8')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book8" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book8')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "The Psychology of Money"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>268</td>
                <td>PENERBIT BACA</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>28 Des 2021</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Kesuksesan dalam mengelola uang tidak selalu tentang apa yang Anda
              ketahui. Ini tentang bagaimana Anda berperilaku. Dan perilaku
              sulit untuk diajarkan, bahkan kepada orang yang sangat pintar
              sekalipun. Seorang genius yang kehilangan kendali atas emosinya
              bisa mengalami bencana keuangan. Sebaliknya, orang biasa tanpa
              pendidikan finansial bisa kaya jika mereka punya sejumlah keahlian
              terkait perilaku yang tidak berhubungan dengan ukuran kecerdasan
              formal.
            </p>
            <p>
              Uang, investasi, keuangan pribadi, dan keputusan bisnis biasanya
              diajarkan sebagai bidang berbasis matematika dengan data dan rumus
              memberi tahu kita apa yang harus dilakukan. Namun, di dunia nyata
              orang tidak membuat keputusan finansial di spreadsheet. Mereka
              membuatnya di meja makan, atau di ruang rapat, di mana sejarah
              pribadi, pandangan unik Anda tentang dunia, ego, kebanggaan,
              pemasaran, dan berbagai insentif bercampur. Dalam The Psychology
              of Money, penulis pemenang penghargaan, Morgan Housel membagikan
              19 cerita pendek yang mengeksplorasi cara-cara aneh orang berpikir
              tentang uang dan mengajari Anda cara memahami salah satu topik
              terpenting dalam hidup dengan lebih baik. Morgan membuat cerita
              pendek tersebut dengan menggunakan sudut pandang perilaku manusia
              sehingga setelah selesai membaca buku ini, pembaca akan menemukan
              sudut pandang baru dalam menyikapi duit yang dimiliki. Nah, supaya
              kamu mengetahui cara-cara untuk mengelola keuangan dengan baik,
              yuk baca buku The Psychology of Money.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book9 -->

      <div class="containerbook">
        <img src="./image/book9.jpg" />
        <h5>Leila S. Chudori</h5>
        <h4><strong> Namaku Alam </strong></h4>

        <button class="btn" onclick="openPopup('book9')">BACA DESKRIPSI</button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book9" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book9')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Namaku Alam"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>448</td>
                <td>Kepustakaan Populer Gramedia</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>19 Sep 2023</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Inilah yang kubayangkan detik-detik terakhir Bapak: 18 Mei 1970.
              Hari gelap. Langit berwarna hitam dengan garis ungu. Bulan
              bersembunyi di balik ranting pohon randu. Sekumpulan burung nasar
              bertengger di pagar kawat. Mereka mencium aroma manusia yang
              nyaris jadi mayat bercampur bau mesiu. Terdengar lolongan anjing
              berkepanjangan. Empat orang berbaris rapi, masing-masing berdiri
              dengan senapan yang diarahkan kepada Bapak. Hanya satu senapan
              berisi peluru mematikan. Selebihnya, peluru karet. Tak satu pun di
              antara keempat lelaki itu tahu siapa yang kelak menghentikan hidup
              Bapak. Pada usianya yang ke-33 tahun, Segara Alam menjenguk
              kembali masa kecilnya hingga dewasa. Semua peristiwa tertanam
              dengan kuat. Karena memiliki photographic memory, Alam ingat
              pertama kali dia ditodong senapan oleh seorang lelaki dewasa
              ketika masih berusia tiga tahun; pertama kali sepupunya
              mencercanya sebagai anak pengkhianat negara; pertama kali Alam
              berkelahi dengan seorang anak pengusaha besar yang menguasai
              sekolah; dan pertama kali dia jatuh cinta. Profil Penulis: LEILA
              S. CHUDORI adalah purnakarya jurnalis Tempo dan penulis Indonesia
              yang menghasilkan berbagai karya cerita pendek, novel, dan
              skenario drama televisi. Buku Bukunya yang telah diterbitkan oleh
              Kepustakaan Populer Gramedia adalah Malam Terakhir, Pulang,
              Nadira, Laut Bercerita dalam versi softcover dan hardcover, serta
              yang akan terbit Namaku Alam. Novel berjudul Pulang menceritakan
              empat wartawan Indonesia yang tak bisa kembali ke tanah air
              setelah peristiwa tragedi 1965. Ini merupakan seri pertama dari
              semestanya yang kemudian dilanjutkan dengan Namaku Alam yang
              terbit tahun ini. Pulang memenangkan Khatulistiwa Award untuk
              Prosa Terbaik 2013 dan sudah diterjemahkan ke dalam bahasa Inggris
              menjadi “Home” (terjemahan John H.McGlynn, diterbitkan oleh
              Yayasan Lontar dan oleh Deep Vellum, AS). Tahun 2015 World
              Literature memasukkan “Home” sebagai satu dari 75 Novel Terjemahan
              yang Diperhatikan (75 Notable Translations of 2015). Novel ini
              sudah diterjemahkan ke dalam bahasa Inggris, Prancis, Belanda,
              Jerman dan Italia. Lima tahun kemudian, Leila meluncurkan novel
              berjudul Laut Bercerita yang berkisah tentang para aktivis yang
              diculik tahun 1998 dan belum kembali hingga kini. Peluncuran novel
              ini disertai penayangan film pendek “Laut Bercerita” yang
              disutradarai Pritagita Arianegara, produksi Yayasan Dian
              Sastrowardoyo dan Cineria Films. Pada 2020, Laut Bercerita
              diterjemahkan ke dalam bahasa Inggris oleh John H.McGlynn menjadi
              “The Sea Speaks His Name” dan diterbitkan oleh Penguin Random
              House South-east Asian (S.E.A). Novel Laut Bercerita memperoleh
              Penghargaaan S.E.A. Writers Award 2020 dan IKAPI Award sebagai
              Book of the Year tahun 2022.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book10 -->

      <div class="containerbook">
        <img src="./image/book10.jpg" />
        <h5>Okky Madasari</h5>
        <h4>
          <strong>
            Mata dan Nyala <br />
            Api Purba
          </strong>
        </h4>

        <button class="btn" onclick="openPopup('book10')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book10" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book10')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Mata dan Nyala Api Purba"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>232</td>
                <td>Gramedia Pustaka Utama</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>25 Jun 2021</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Ini adalah kisah dari masa depan, sekaligus kisah dari masa jutaan
              tahun yang lalu. Kali ini, Matara mengajakmu menjelajahi
              kemungkinan-kemungkinan tanpa batas, sebuah dunia yang dibangun
              oleh teknologi dan imajinasi. Mata dan Nyala Api Purba merupakan
              kisah penutup dari petualangan Mata, setelah Mata membawamu ke
              dunia para Melus, mengajakmu mengurai rahasia Pulau Gapi, dan
              mengarungi lautan luas bersama Bambulo, si manusia laut.
              Petualangan Mata berakhir. Sudah waktunya ia tumbuh dan memulai
              kisah. Jadi tunggu apalagi? Simak kelanjutan ceritanya hanya di
              buku Mata dan Nyala Api Purba ini! Jangan lupa untuk lengkapi
              seri-seri lainya ya, Teman-teman! Selamat membaca!
            </p>
            <p>
              Buku Mata dan Nyala Api Purba merupakan buku cerita untuk
              anak-anak karya Okky Madasari. Buku ini ditulis dengan menggunakan
              bahasa Indonesia sehari-hari yang dapat dipahami dengan mudah oleh
              anak-anak. Buku ini sangat cocok dibaca oleh anak-anak sekolah
              dasar, karena cerita yang disajikan mengandung pesan-pesan yang
              sangat menarik. Dilengkapi pula dengan ilustrasi yang menarik
              perhatian anak-anak, sehingga anak-anak tidak merasa bosan saat
              membaca buku ini.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->
    </div>

    <div class="footer"><footer></footer></div>
    <script src="js.js"></script>
  </body>
</html>
