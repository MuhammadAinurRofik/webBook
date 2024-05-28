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
    <!-- halaman popular -->
    <div class="pagelihatlainnya">
      <a
        href="buku.php"
        ><button class="btn-back">X</button></a
      >
      <h3>POPULAR</h3>
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

      <!-- book11 -->

      <div class="containerbook">
        <img src="./image/book11.jpg" />
        <h5>Noe R Nugroho</h5>
        <h4>
          <strong
            >Petualangan <br />
            Hantu Gokil</strong
          >
        </h4>

        <button class="btn" onclick="openPopup('book11')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book11" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book11')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Petualangan Hantu Gokil"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>224</td>
                <td>King Kong</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>27 Mei 2015</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Toni: Cong… Pocong Tono, Gue mau nanya nih. Kriminal apa yang ada
              di Jogja? Tono: Jiah… elu aneh-aneh. Kriminal ada di mana-mana,
              bukan cuma di Jogja doang!
            </p>
            <p>
              Jika biasanya hantu dikaitkan dengan hal mistis mengerikan yang
              membuat bulu kuduk merinding, kali ini kamu akan ketemu
              hantu-hantu super kocak! Noe R Noegroho sukses menyulap hantu
              menjadi sesuatu yang lucu. Penasaran?
            </p>
            <p>
              Buku Petualangan Hantu Gokil akan mengocok perutmu dengan
              cerita-ceritanya yang humoris. Buku ini berisi 41 judul cerita
              humor segar yang dikemas cukup menarik dengan bahasa yang keren
              dan sangat menghibur. Dilengkapi dengan ilustrasi yang juga lucu
              membuatmu akan berpikir bahwa betapa lucunya hantu-hantu di dalam
              buku ini.
            </p>
            <p>
              Hantu-hantu di dalam buku ini memiliki cerita unik layaknya
              manusia hidup. Ternyata dunia hantu juga penuh lika-liku!
            </p>
            <p>
              Mau tau apa cita-cita tuyul? (Jiah… tuyul kok punya cita-cita)
              atau mau tau keseruan si tuyul membuat status facebook? Lho, kok
              kuntilanak jajan nasi goreng? Daripada jajan, gimana kalau hibur
              si hantu yang lagi galau?
            </p>
            <p>Temukan cerita humor lainnya di dalam buku ini!</p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book12 -->

      <div class="containerbook">
        <img src="./image/book12.jpg" />
        <h5>Hardanto Raditya</h5>
        <h4>
          <strong>Pengabdi Klien</strong>
        </h4>

        <button class="btn" onclick="openPopup('book12')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book12" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book12')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Pengabdi Klien"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>231</td>
                <td>Phoenix Publisher</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>23 Apr 2019</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Kusno merupakan seorang pekerja radio yang sangat memiliki visi
              dan misi yang jelas dalam kehidupannya, yaitu berkelahi dengan
              klien. Pekerjaannya sebagai orang kreatif di radio membuatnya
              harus bertemu dengan banyak klien dengan keunikan dan keajaiban
              masing-masing. “Klien adalah raja” Slogan ini sepertinya sudah
              melekat bagi para penyedia layanan maupun jasa. Menurut Kusno
              klien adalah pemasok rupiah utama ke perusahaan, melayaninya
              dengan sepenuh hati adalah kewajiban semua pekerja. 10 tahun
              bekerja di radio, 10 tahun pula ia berurusan dengan klien. Mulai
              dari klien yang sok tahu, gak mau terima masukan, merasa paling
              benar, gak berprikemanusiaan, kurang ajar, mata duitan, dan segala
              sifat dasar lain sudah pernah ia temui.
            </p>
            <p>
              Klien membuat Kusno mendapatkan pekerjaan dan posisi yang mumpuni
              di radio tempatnya bekerja, tetapi klien pula yang membuat Kusno
              sempat kehilangan pekerjaan. Perdebatan sengit sering ia alami
              atas dasar kecintaannya terhadap perusahaan. Seperti love hate
              relationship, di samping dirinya membutuhkan pundi-pundi uang dari
              klien, tetapi sikap klien pula yang menimbulkan kebencian. Namun,
              apa iya klein harus terus-menerus dibela? Dipuja? Disembah? Ingat,
              mereka bukan Tuhan.
            </p>
            <p>
              Maka dari itu, Pengabdi Klien hadir untuk menemani kamu untuk
              menyelami dunia radio yang lebih dari sekadar siaran. Dituntut
              untuk menjadi kreatif, mengejar rating dan revenue sales. Kemudian
              terselip kisah-kisah manis dalam perjalanan industri ini.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book13 -->

      <div class="containerbook">
        <img src="./image/book13.jpg" />
        <h5>Mamad Kasur</h5>
        <h4>
          <strong>Ngakak Dulu Biar Bahagia</strong>
        </h4>

        <button class="btn" onclick="openPopup('book13')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book13" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book13')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>
              Deskripsi buku "Ngakak Dulu <br />
              Biar Bahagia"...
            </p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>212</td>
                <td>Histeria</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>22 Nov 2018</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Kadang kesibukan dan rutinitas membuat kita susah dan akan ada
              waktu untuk tertawa. Buku ini ditujukan untuk menghibur kamu-kamu
              yang memang beneran sibuk atau yang sok sibuk.
            </p>
            <p>
              “Apakah kamu tahu sisi romantisnya dari hujan? Dia tetap kembali
              walaupun tahu bagaimana sakitnya jatuh berkali-kali.”
            </p>
            <p>
              Humor adalah teks lucu yang bersifat menghibur, hanya berisi
              hiburan, dan tidak ada pesan tersendiri untuk disampaikan kepada
              pembacanya. Humor memang bertujuan untuk menceritakan hal yang
              lucu untuk membuat pembaca atau pendengar cerita tertawa dan
              terhibur. Tertawa dapat meningkatkan asupan udara kaya oksigen,
              yang akan memicu kerja jantung, paru, dan otot. Hal tersebut juga
              dapat meningkatkan endorfin yang dilepaskan oleh otak.
            </p>
            <p>
              Ngakak Dulu Biar Bahagia merupakan judul dari sebuah buku yang
              ditulis oleh Mamad Kasur. Buku ini memiliki isi berbagai macam
              humor-humor lucu yang akan menghibur pembaca. Cerita yang
              disajikan sangat menarik. Selain itu, alur cerita pendek namun
              sangat kaya dengan humor yang diselipkan setiap cerita mampu
              membuat pembaca merasakan hiburan yang menyenangkan. Buku ini
              dapat dibaca oleh masyarakat umum atau siapapun bagi kalian yang
              sibuk dengan kesibukan maupun rutinitas di dunia ini. Buku ini
              akan membawa pembaca kebahagiaan dan waktu untuk tertawa setelah
              mengalami hari-hari yang padat. Dengan hadirnya buku ini
              diharapkan dapat memberikan pembaca sebuah obat untuk tertawa dan
              bersantai sejenak untuk kembali menghidupkan kehidupan.
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book14 -->

      <div class="containerbook">
        <img src="./image/book14.jpg" />
        <h5>Pionicon</h5>
        <h4><strong>Bacotan Bola si Juki</strong></h4>

        <button class="btn" onclick="openPopup('book14')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book14" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book14')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Bacotan Bola si Juki"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>152</td>
                <td>Agromedia Pustaka</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>25 Jun 2018</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Di dunia saat ini, sepak bola memang olahraga sejuta umat,
              penggemar dan pelakunya ada di mana-mana. Semua orang setidaknya
              pasti pernah sekali dalam hidupnya terlibat dalam sepak bola. Bisa
              sebagai anak kecil atau orang dewasa. Sebagai pemain, penonton,
              komentator, wasit, sampai pedagang asongan yang anehnya bisa masuk
              stadion, padahal nggak punya tiket. Dengan semua itu, nggak heran
              kalo di Indonesia organisasi bola malah diisi para politisi.
              Maklum, massa sepak bola gede, mereka cari simpati di situ.
              Persepakbolaan di Indonesia jadi rumit, yang diadu kemampuan,
              tetapi malah kepentingan pribadi. Ini sesuatu yang kita bahas
              nanti. Yang ruwet-ruwet kita bahas belakangan aja ya, Sob!
            </p>
            <p>
              Setelah lama cuit-cuit soal bola di Twitter dan membuat beberapa
              tulisan di blog, akhirnya gue dipercaya penerbit buat ngebikin
              buku sepak bola, Sob. Gue sudah macem komentator-komentator di TV!
              Akan tetapi, bukan komentator yang biasa-biasa aja dong, semua
              sisi bahasan gue pasti seru. Misal nih, Kenapa bola itu bundar?
              Cara menjelaskan offside dengan mudah, Bagaimana cara mendapatkan
              kartu merah yang baik dan benar? Cara membangun karier dari dari
              penonton bola hingga menjadi juara tarkam. Dijamin, kalian nggak
              bakal terlihat cupu lagi kalo nongkrong dan ngobrolin soal sepak
              bola!
            </p>
            <a href="https://www.gramedia.com/"
              ><button class="btn">TOKO BUKU >>></button></a
            >
          </div>
        </div>
        <!--  -->
      </div>

      <!-- book15 -->

      <div class="containerbook">
        <img src="./image/book15.jpg" />
        <h5>Boim Lebon</h5>
        <h4>
          <strong> Gue Bukan OB Lagi </strong>
        </h4>

        <button class="btn" onclick="openPopup('book15')">
          BACA DESKRIPSI
        </button>

        <!-- Tambahkan popup deskripsi buku -->
        <div id="notif-book15" class="notif">
          <div class="popup-content">
            <span class="close" onclick="closePopup('book15')">x</span>
            <h2>Deskripsi Buku</h2>
            <p>Deskripsi buku "Mata dan Nyala Api Purba"...</p>
            <table>
              <tr>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
              </tr>
              <tr>
                <td>188</td>
                <td>Indiva Media Kreasi</td>
              </tr>
              <tr>
                <th>Tanggal Terbit</th>
                <th>Bahasa</th>
              </tr>
              <tr>
                <td>13 Jan 2016</td>
                <td>Indonesia</td>
              </tr>
            </table>
            <p>
              Siapa sih yang tidak kenal dengan novel? Pasti hampir semua
              pembaca pernah membaca sebuah novel, atau paling tidak melihat
              buku-buku novel yang bertebaran di mana-mana. Berdasarkan genre
              cerita, novel dibagi atas novel romantis, novel horor, misteri,
              komedi, dan inspiratif.
            </p>
            <p>
              Novel komedi adalah novel yang memuat unsur-unsur humor sehingga
              membuat para pembaca terhibur. Berisikan tentang sebuah cerita
              yang mengandung unsur humoris atau kelucuan dan membuat si pembaca
              tertawa serta gaya pencitraannya lebih santai.
            </p>
            <p>
              Sesekali tentu saja kita merasa sedang badmood atau sedih. Dalam
              kasus ini, mereka yang gemar baca akan mulai membuka buku untuk
              menaikkan mood mereka. Biasanya genre buku yang dipilih pun
              cenderung lebih ringan atau mungkin yang bikin ketawa.
            </p>
            <p>
              Untuk kalian yang tak tahu harus baca buku apa. Di bawah ini
              adalah novel komedi yang akan bikin kamu susah berhenti ketawa dan
              mood kamu jadi baik lagi. Cerita ini berkisah tentang perjuangan
              seorang OB alias office boy yang pengen mengubah nasibnya!
            </p>
            <p>
              Tapi cerita OB bernama NAJIB ini luar biasa, karena sosok pemuda
              nanggung yang dikenal seduhan kopinya, mampu mengalami perubahan
              signifikan. Yang awalnya sebagai office boy, lalu mendirikan
              sebuah band, dan akhirnya menjadi seorang musisi sekaligus
              Production Assistant! Beneran, ini benar-benar harus dikasih dua
              jempol, kalau perlu ditambah lagi sama dua jempol kaki –jadi empat
              jempol sekaligus! Haha ….
            </p>
            <p>
              Nah, biar tidak penasaran lagi, buruan baca deh! Dijamin ngakak
              maksimal!
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
