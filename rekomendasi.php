<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: buku.php");
	exit;
}

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
    <!-- halaman rekomendasi -->
    <div class="pagelihatlainnya">
      <a
        href="buku.php"
        ><button class="btn-back">X</button></a
      >
      <h3>REKOMENDASI</h3>
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

      <!-- book16 -->

      <div class="containerbook">
        <img src="./image/book16.jpg" />
        <h5>Paulo Coelho</h5>
        <h4><strong> Sang Alkemis </strong></h4>

        <button class="btn" onclick="openPopup('book16')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book16" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book16')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Sang Alkemis"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>224</td>
                <td>Gramedia Pustaka Utama</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>20 Agt 2021</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Novel Sang Alkemis menceritakan tentang mimpi, harapan, dan impian
              seorang anak bernama Santiago, yang mengembala untuk mencari harta
              karun. Ia melakukan pencarian harta karun setelah seorang peramal
              mengatakan bahwa Santiago akan menemukan dan mendapatkan harta
              karun yang tidak akan habis dipakai sampai tujuh turunan. Dalam
              perjalanannya, ia bertemu dengan Melchizedek yang memberikan
              nasihat bahwa saat seseorang menginginkan sesuatu, alam semesta
              akan membantu menolong agar seseorang itu dapat meraih impiannya.
              Mechizedek juga memberikan Santiago dua buah batu untuk membaca
              tanda dan meminta Santiago untuk tidak menyerah dengan mimpinya
              dan mengikuti pertanda yang ada. Santiago meneruskan menggembala
              sampai akhirnya ia bertemu dengan penunggang kuda, Sang Alkemis.
            </p>
            <p>Sinopsis buku</p>
            <p>
              Setiap beberapa puluh tahun, muncul sebuah buku yang mengubah
              hidup para pembacanya selamanya. Novel Paulo Coelho yang memikat
              ini telah memberikan inspirasi bagi jutaan orang di seluruh dunia.
              Kisah yang sangat sederhana, namun menyimpan kebijaksanaan penuh
              makna, tentang anak gembala bernama Santiago yang berkelana dari
              rumahnya di Spanyol ke padang pasir Mesir untuk mencari harta
              karun terpendam di Piramida-Piramida. Di perjalanan dia bertemu
              seorang perempuan Gipsi, seorang lelaki yang mengaku dirinya Raja,
              dan seorang alkemis––semuanya menunjukkan jalan kepada Santiago
              untuk menuju harta karunnya. Tak ada yang tahu isi harta karun
              itu, atau apakah Santiago akan berhasil mengatasi
              rintangan-rintangan sepanjang jalan. Namun perjalanan yang semula
              bertujuan untuk menemukan harta duniawi berubah menjadi penemuan
              harta di dalam diri. Kaya, menggugah, dan sangat manusiawi, kisah
              Santiago menunjukkan kekuatan mimpi-mimpi dan pentingnya
              mendengarkan suara hati kita.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->

      <!-- book17 -->

      <div class="containerbook">
        <img src="./image/book17.jpg" />
        <h5>Okky Madasary</h5>
        <h4><strong> Mata Dan Manusia Laut </strong></h4>

        <button class="btn" onclick="openPopup('book17')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book17" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book17')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Mata Dan Manusia Laut"...</p>
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
                <td>19 Mei 2019</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Buku yang ditulis oleh Okky Madasary ini bercerita tentang
              petualangan yang dilakukan oleh Matara dan ibunya ke kepulauan
              Sulawesi Tenggara. Di sanalah sebuah tempat yang menjadi rumah
              bagi para manusia laut. Di pulau itu, Matara bertemu dengan
              Bambulo, yang merupakan anak asli asal Suku Bajo yang sejak kecil
              sudah memulai hidupnya di air dan menyelam di lautan seperti
              seekor ikan.
            </p>
            <p>
              Kabar di media internasional tentang manusia-manusia yang bisa
              menyelam di laut tanpa alat membawa Matara dan ibunya ke kepulauan
              Sulawesi bagian tenggara. Di kepulauan yang menjadi rumah bagi
              manusia-manusia laut itu, Matara berjumpa dengan Bambulo, bocah
              Bajo yang sejak balita sudah berenang dan menyelam di laut,
              layaknya seekor ikan. Berawal dari rasa penasaran, dua bocah itu
              mengarungi lautan, hal yang sesungguhnya biasa dilakukan oleh
              orang Bajo. Namun lautan punya irama dan aturan yang harus selalu
              diikuti. Kelalaian Bambulo menghadirkan bencana sekaligus
              petualangan menakjubkan bagi mereka. Mata dan Manusia Laut
              merupakan buku ketiga dari kisah Mata menjelajahi Nusantara,
              setelah Mata di Tanah Melus, serta Mata dan Rahasia Pulau Gapi.
              Buku selanjutnya: Mata di Dunia Purba.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->

      <!-- book18 -->

      <div class="containerbook">
        <img src="./image/book18.jpg" />
        <h5>Henry Manampiring</h5>
        <h4><strong> The Alpha Girl`S Guide </strong></h4>

        <button class="btn" onclick="openPopup('book18')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book18" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book18')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "The Alpha Girl`S Guide"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>280</td>
                <td>GagasMedia</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>30 Jan 2020</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              The Alpha Girl’s Guide juga berisi wawancara inspiratif dengan dua
              Alpha Female Indonesia dari dua generasi: Najwa Shihab dan Alanda
              Kariza.
            </p>
            <p>Sinopsis buku</p>
            <p>
              Alpha Female adalah para perempuan yang menginspirasi, memimpin,
              menggerakkan orang sekitarnya, dan membawa perubahan. Mereka
              cerdas, percaya diri, dan independen. Bagaimana remaja dan
              perempuan muda bisa mengembangkan diri menjadi mereka? Buku ini
              adalah hasil pengamatan, riset artikel, wawancara langsung, dan
              diskusi dengan banyak perempuan di media sosial. Ditulis dengan
              ringan, penuh ilustrasi kocak, namun tetap blak-blakan dan
              menohok,The Alpha Girls Guide akan membuat kamu terinspirasi
              menjadi cewek smart, independen dan bebas galau!
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->

      <!-- book19 -->

      <div class="containerbook">
        <img src="./image/book19.jpg" />
        <h5>Enid Blyton</h5>
        <h4>
          <strong> Lima Sekawan: <br />Ke Bukit Billycock </strong>
        </h4>

        <button class="btn" onclick="openPopup('book19')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book19" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book19')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Lima Sekawan: Ke Bukit Billycock"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>192</td>
                <td>Gramedia Pustaka Utama</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>28 Jan 2018</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>Sinopsis buku</p>
            <p>
              "Lima Sekawan adalah Julian, Dick, George, Anne, dan—tentu
              saja—Timmy! Kemanapun mereka pergi pasti ada petualangan yang seru
              dan mengasyikkan!
            </p>
            <p>
              Lima Sekawan punya teman baru—seorang pilot. Tapi pilot itu
              tiba-tiba hilang dan dituduh telah membawa lari pesawat eksperimen
              rahasia. Betulkah pilot itu, Je, seorang pengkhianat? Lima Sekawan
              tak mungkin percaya begitu saja, tanpa menyelidiki segalanya lebih
              dalam."
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->

      <!-- book20 -->

      <div class="containerbook">
        <img src="./image/book20.jpg" />
        <h5>Jennie Liandra</h5>
        <h4><strong> Serba Salah </strong></h4>

        <button class="btn" onclick="openPopup('book20')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book20" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book20')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Serba Salah"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>36</td>
                <td>Bukune</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>19 Agt 2019</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Diambil dari serial Webtoon populer yang bercerita tentang
              karakter bernama Sipit yang selalu berada dalam situasi serba
              salah.
            </p>
            <p>
              Buku yang ceritanya diambil dari webtoon karya anak bangsa, Jennie
              Liandra, yang menceritakan kisah tokoh yang selalu serba salah.
              Sipit, cewek yang digambarkan memiliki rambut pendek potongan bob,
              selalu memakai kaos berwarna putih dengan list merah dan tidak
              pernah ganti serta tidak cantik ini selalu dianggap salah jika
              melakukan sesuatu. Bahkan jadi tokoh disana pun salah.
            </p>
            <p>
              Walau demikian, cerita si Sipit dan tokoh pendukung lainnya bisa
              membuat saya senyum-senyum, kadang-kadang juga nyeletuk. Buku
              dengan cerita yang ringan dan sederhana tapi dapat membuat jenaka
              ini, cocok dibaca oleh kamu di sela-sela waktu senggang dan ingin
              membaca sesuatu yang menghibur. Walaupun banyak kisah jenaka yang
              ada di dalam buku ini, tentu ada juga pesan-pesan yang ingin
              disampaikan oleh penulis, dan pesan-pesan tersebut mudah dipahami
              karena memang cerita dan genrenya yang ringan, serta cerita-cerita
              yang bervariasi tidak membuat kamu bosan untuk membacanya.
            </p>
            <p>
              Gambarnya yang simpel, menjadi salah satu ciri khas komik ini yang
              dapat ikut menunjukkan sisi lucu dari cerita-cerita yang terdapat
              di dalam buku ini. Untuk kamu yang kurang tertarik membaca
              webtoonnya, mungkin buku komik ini dapat menjadi pilihan
              alternatif kamu untuk membaca kisah-kisah jenaka Sipit.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>
      <!--  -->
      fsfffsfsdf
    </div>

    <div class="footer"><footer></footer></div>
    <script src="js.js"></script>
  </body>
</html>
