<!doctype html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Undangan Pernikahan</title>

      <!-- Dependencies CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css" integrity="sha256-WAgYcAck1C1/zEl5sBl5cfyhxtLgKGdpI3oKyJffVRI=" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha256-MBffSnbbXwHCuZtgPYiwMQbfE7z+GOZ7fBPCNB06Z98=" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Playfair:opsz@5..1200&display=swap" rel="stylesheet">

      <!-- App -->
      <link rel="stylesheet" href="./css/app.css">
      <script src="./js/script.js" defer></script>

      <!-- Tambahkan stylesheet AOS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

</head>

<body class="bg-theme">
      <!-- welcome page -->
      <div id="welcome_page" class="position-relative d-flex justify-content-center" style="background-image: linear-gradient(#333452, #363864);">
            <div class="text-center d-flex flex-column justify-content-around" id="home" style="height: 100vh !important;">
                  <div class="pt-4 content" style="color: #DDB76C;">
                        <p class="font-standard" style="font-size: 1rem;">You're Invited To The Wedding Of</p>
                        <h1 class="font-standard fw-bold my-4" style="font-size: 2.5rem;">Mohammad Agung Rahmawan, S.Kom <br>&<br>
                              Nova Novia, S.M
                        </h1>
                        <a class="font-standard" style="text-decoration: none; color: #DDB76C; font-size: 1rem" target="_blank" href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=The%20Wedding%20of%20Maytizen%20Saputra%20and%20Mayunita%20Mawardi%20&details=The%20Wedding%20of%20Maytizen%20Saputra%20and%20Mayunita%20Mawardi%20%7C%2018%20Februrari%202024%20%7C%20RT%2009%20RW%2003,%20Desa%20Suak%20Rengas,%20Kec.%20Mempura,%20Kab.%20Siak,%2010.00%20-%20Selesai.%20&dates=20240218T100000/20240218T180000&location=https://maps.app.goo.gl/yVFbzz6b61JvMf9YA">
                              Save The Date
                        </a>
                        <p class="font-standard mt-2" style="font-size: 1rem">23 April 2024</p>
                  </div>
                  <div class="content" style="font-size: 1rem; color: #DDB76C;">
                        <p class="font-standard" style="margin-bottom: -1px;">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                        <p class="font-standard fw-bold">ditempat</p>
                        <button onclick="bukaUndangan()" style="background-color: #DDB76C; font-size: 1rem; color: #3E405D;" class="btn font-standard">Open
                              Invitation</button>
                  </div>
            </div>
            <img class="bunga1" src="./assets/image/bunga/5.svg" alt="" width="10%">
            <img class="bunga2" src="./assets/image/bunga/4.svg" alt="" width="10%">
      </div>

      <main id="content" style="display: none;">
            <!-- audio -->
            <div class="position-relative">
                  <div class="audio-player">
                        <button id="musicButton" class="btn btn-light rounded-circle music-animate" onclick="playMusic()"><i class="ri-pause-circle-fill" style="color: #B17C20; font-size: 1.5rem;"></i></button>
                        <audio id="myAudio" controls style="display: none;">
                              <source src="./music/cinta_terakhir.mp3" type="audio/mpeg">
                              Your browser does not support the audio element.
                        </audio>
                  </div>
            </div>
            <div class=" d-flex flex-column justify-content-center position-relative" style="height: 100vh !important; background-color: #FEFEF6;">
                  <div class="card card-shadow m-3 p-4 font-standard" style="border-radius: 10px 120px 10px 10px; height: 55vh;">
                        <div style="color: #B17C20;">
                              <h1 style="font-size: 2.5rem;">Agung</h1>
                              <h6 style="font-size: 2rem;"><i>&</i></h6>
                              <h1 style="font-size: 2.5rem;">Nova</h1>
                              <hr>
                        </div>
                        <h6 class="fw-bold mb-3">Assalamualaikum Wr. Wb</h6>
                        <p style="font-size: 1rem;">Segala puji bagi Allah SWT yang telah menjadikan hambanya hidup
                              berpasang-pasangan. Dengan
                              memohon Ridho, Rahmat, dan Berkah Allah SWT, kami bermaksud untuk mengundang Saudara/i
                              dalam acara pernikahan yang kami selenggarakan.
                        </p>
                  </div>
                  <img class="bunga_content1" src="./assets/image/bunga2/1.svg" alt="bunga">
            </div>
            <div class="d-flex flex-column justify-content-center position-relative" style="height: 100vh !important;background-color: #FEFEF6;">
                  <div class="card m-3 p-4 card-shadow font-standard text-center" style="height: 38vh;">
                        <p style="font-size: 1rem;">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan
                              untukmu pasangan-pasangan dari
                              jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di
                              antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                              tanda-tanda bagi kaum yang berpikir.
                        </p>
                        <h4 class="mt-3" style="font-size: 1rem;">AR-RUM Ayat : 21</h4>
                  </div>
                  <img class="bunga_content7" src="./assets/image/bunga2/8.png" alt=bunga>
                  <img class="bunga_content2" src="./assets/image/bunga2/2.png" alt="bunga">
            </div>
            <div class="d-flex flex-column justify-content-center position-relative" style="height: 100vh !important;background-color: #FEFEF6;">
                  <div class="card m-3 card-shadow p-4 text-end font-standard" style="border-radius: 120px 10px 10px 10px; height: 60vh;">
                        <h1 style="font-size: 2rem; color: #B17C20;">Bridge and Groom</h1>
                        <di class="mt-5">
                              <h4 style="color: #B17C20; font-size: 1.5rem;">Nova Novia, S.M</h4>
                              <p style="font-size: 1rem;">Putri dari Bapak Bari Setiawan & Ibu Supriyatun</p>
                              <p style="font-size: 2rem;">&</p>
                              <h4 style="color: #B17C20; font-size: 1.5rem;">Mohammad Agung Rahmawan, S.Kom</h4>
                              <p style="font-size: 1rem;">Putra dari Bapak Abdul Rochim & Ibu Murnifah
                              </p>
                  </div>
                  <img class="bunga_content2" src="./assets/image/bunga2/2.png" alt="bunga">
                  <img class="bunga_content5" src="./assets/image/bunga2/5.png" alt="bunga">
            </div>
            </div>
            <div class="d-flex flex-column justify-content-center position-relative" style="height: 100vh !important; background-color: #FEFEF6;">
                  <div class="card m-3 card-shadow p-5 text-center font-standard rounded-top-pill" style="height: 100vh;">
                        <h1 class="fw-bold" style="font-size: 1.5rem; color:#B17C20">Save the Date</h1>
                        <!-- <div class="line"></div> -->
                        <h6 class="mt-3 fw-bold" style="color: #B17C20;">AKAD NIKAH</h6>
                        <div style="font-size: 0.9rem;">
                              <p>Selasa, 23 April 2024</p>
                              <p>13.00 WIB - SELESAI</p>
                              <p>Kediaman Mempelai Wanita</p>
                              <p>Hadipolo, Rt.06 / Rw.02 Kec.Jekulo, Kab.Kudus</p>
                        </div>
                        <br>
                        <h6 class="fw-bold" style="color: #B17C20;">RESEPSI NIKAH</h6>
                        <div style="font-size: 0.9rem;">
                        <p>Selasa, 23 April 2024</p>
                              <p>13.00 WIB - SELESAI</p>
                              <p>Kediaman Mempelai Wanita</p>
                              <p>Hadipolo, Rt.06 / Rw.02 Kec.Jekulo, Kab.Kudus</p>
                              </div>
                              <h6 class="fw-bold" style="color: #B17C20;">TASYAKURAN</h6>
                        <div style="font-size: 0.9rem;">
                        <p>Rabu, 24 April 2024</p>
                              <p>11.00 WIB - 14.00 WIB</p>
                              <p>Kediaman Mempelai Pria</p>
                              <p>Karangmalang, Rt.03 / Rw.05 Kec.Gebog, Kab.Kudus</p>
                        </div>
                        <a style="font-size: 1rem; width: 60%;" class="btn btn-outline-secondary mx-auto" href="https://maps.app.goo.gl/4BXoSQCjyHpJWbe49">Lokasi</a>
                        <!-- <a style="font-size: 1rem; width: 60%;" class="btn btn-outline-secondary mx-auto" href="https://maps.app.goo.gl/AVqs6h2Ah3FshQ3j6">Lokasi</a> -->
                  </div>
                  <img class="bunga_content2" src="./assets/image/bunga2/2.png" alt="bunga">
            </div>
            <div id="rsvpContainer" class="d-flex flex-column justify-content-center" style="height: 150vh !important; background-color: #FEFEF6;">
                  <div class="card m-3 card-shadow p-3 text-start font-standard rounded-4" style="height: 130vh;">
                        <h1 style="color: #B17C20;">RSVP & Wishes</h1>
                        <p>Bagi tamu undangan yang akan hadir di acara pernikahan kami silahkan kirimkan konfirmasi
                              kehadiran dengan mengisi form berikut : </p>
                        <div>
                              <h6 class="fw-bold text-center">jumlah comment</h6>
                              <!-- mengirim data belum -->
                              <form id="invitationForm" action='processForm.php' method="POST">
                                    <input type="text" placeholder="Nama" name="name" class="form-control rounded-2 mb-3" id="name">
                                    <textarea type="text" placeholder="Ucapan" id="wishes" class="form-control rounded-2 mb-3" name="wishes"></textarea>
                                    <select class="form-select mb-3" name="absen" id="absen">
                                          <option selected disabled>Konfirmasi Kehadiran</option>
                                          <option value="hadir">Hadir</option>
                                          <option value="tidak">Tidak Hadir</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-secondary">Kirim</button>
                              </form>
                        </div>
                        <h2 class="mt-4" style="color: #B17C20;">Pesan</h2>
                        <div id="messagesContainer" class="mt-3" style="overflow-y: scroll;">
                              <?php include './displayMessage.php' ?>
                        </div>
                  </div>
            </div>
            <div class="d-flex flex-column justify-content-start font-standard" style="height: 100vh !important; background-color: #FEFEF6;">
                  <div class="card m-3 card-shadow p-4  text-start" style="height: 30vh;">
                        <h1 class="fw-bold" style="font-size: 2rem; color: #B17C20;"><u>L</u>ove Gift</h1>
                        <p class="mt-3" style="font-size: 1rem;">Bagi tamu yang akan mengirimkan hadiah kepada kedua
                              mempelai silahkan
                              mengirimkan melalui
                              tombol berikut :
                        </p>
                        <button onclick="openGift()" class="btn btn-outline-secondary w-50">Klik di sini</button>
                  </div>
                  <div id="gift-card" class="card m-3 card-shadow p-4 text-center " style="height: 55vh; display: none;">
                        <div class="mb-3">
                              <img class="mb-2" src="./assets/image/mandiri.png" alt="mandiri" width="60%">
                              <div style="font-size: 1rem;">
                                    <p>BRI - xxx-xxx-xx-xx</p>
                                    <p>Nova Novia</p>
                              </div>
                              <button onclick="salin(this)" class="btn btn-outline-info" data-nomer="108-00-1536952-4">Salin</button>
                        </div>
                        <div>
                              <img src="./assets/image/bni.png" alt="bni" width="50%">
                              <div style="font-size: 1rem;">
                                    <p>BCA - xxx-xxx-xxx</p>
                                    <p>M Agung Rahmawan</p>
                              </div>
                              <button onclick="salin(this)" class="btn btn-outline-info" data-nomer="0843764525">Salin</button>
                        </div>
                  </div>
            </div>
            <div class="d-flex flex-column justify-content-center font-standard position-relative" style="height: 100vh !important; background-color: #FEFEF6;">
                  <div class="card m-3 card-shadow p-5 text-center rounded-top-pill" style="height: 50vh;">
                        <h1 class="fw-bold" style="font-size: 2rem; color: #B17C20;">Agung & Nova</h1>
                        <div style="font-size: 1rem;">
                              <h5 class="mt-4 fw-bold" style="color:#B17C20">23 April 2024</h5>
                              <h3 class="mt-3 fw-bold" style="color:#B17C20">Terima Kasih</h3>
                              <p class="mt-3">Merupakan sebuah kehormatan dan kebahagiaan bagi kami jika
                                    Bapak/Ibu/Saudara/i berkenan
                                    hadir
                                    dan memberikan doa restu bagi kami. Terima kasih.
                              </p>
                        </div>
                        <h6>Wassalamualaikum Wr.Wb</h6>
                  </div>
                  <img class="bunga_content6" src="./assets/image/bunga2/2.png" alt="bunga">
                  <img class="bunga_content3" src="./assets/image/bunga2/3.png" alt="bunga">
                  <img class="bunga_content4" src="./assets/image/bunga2/3.png" alt="bunga">
            </div>

      </main>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script>
            $(document).ready(function() {
                  // Submit form using AJAX
                  $("#invitationForm").submit(function(event) {
                        event.preventDefault(); // Prevent default form submission

                        // Serialize form data
                        var formData = $(this).serialize();

                        // Send AJAX request
                        $.ajax({
                              url: 'processForm.php',
                              type: 'POST',
                              data: formData,
                              success: function(response) {
                                    // Clear form fields
                                    $("#name").val('');
                                    $("#wishes").val('');
                                    $("#absen").val('');

                                    // Update message display without reloading
                                    $("#messagesContainer").load('./displayMessage.php');
                              },
                              error: function(error) {
                                    console.log("Error:", error);
                              }
                        });
                  });
            });
      </script>
</body>

</html>