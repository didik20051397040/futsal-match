<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Utama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
    <header>
        <a href="#" class="logo">Futsal Match<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
          <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
          <li><a href="#about" onclick="toggleMenu();">About</a></li>
          <li><a href="#field" onclick="toggleMenu();">Field</a></li>
          <li><a href="#team" onclick="toggleMenu();">Team</a></li>
          <li><a href="#testimonials" onclick="toggleMenu();">Testimonials</a></li>
          <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
      <div class="content">
          <h2>Get New Friends</h2>
          <p>Mencari lawan atau teman bermain futsal dengan fitur chat sehingga dapat berinteraksi langsung dengan teman baru</p>
          <a href="chat/index.php" class="btn">Daftar</a>
      </div>
    </section>


    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="tittleText"><span>A</span>bout Us</h2>
                <p>Mereka yang suka bermain futsal terkadang bingung untuk menyewa lapangan untuk bermain. Dan ketika sudah memilih lapangan untuk bermain tetapi cara pemesanan (booking) menggunakan cara yang konvesional. Selain itu, untuk mencari lawan atau teman bermain mereka merasa kesulitan. Website ini memungkinkan untuk membentuk tim dan menemukan teman baru untuk bermain di lapangan.

                    <br><br>Saya akan membuat website untuk memudahkan mereka untuk memilih dan menyewa lapangan futsal yang langsung terhubung oleh pihak penyedia lapangan. Dan mencari teman untuk bermain bersama
                </p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="img/2.jpg">
                </div>
            </div>
        </div>
    </section>


    <section class="field" id="field">
        <div class="title">
            <h2 class="tittleText">Choose <span>F</span>ield</h2>
        </div>
        <div class="container">
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>01</h2>
                        <h3>Kebraon Sport Center</h3>
                        <p>Jl Kebraon 2 no 31, Surabaya </p>
                        <p>Start From</p>
                        <p>100.000 / hour</p>
                        <p>110.000 / hour (weekend)</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>02</h2>
                        <h3>Ole Ole Futsal</h3>
                        <p>Jl Ngagel no. 109</p>
                        <p>Start From</p>
                        <p>100.000 / hour</p>
                        <p>200.000 / hour (weekend)</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>03</h2>
                        <h3>Primavera Futsal</h3>
                        <p>Jl Raya Wiyung</p>
                        <p>Start From</p>
                        <p>60.000 / hour</p>
                        <p>All days</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <div class="title">
            <h2 class="tittleText"> Our <span>T</span>eam</h2>
        </div>
        <div class="body">
            <div class="box1">
                <div class="imgBx">
                     <img src="img/didik.jpg">
                </div>
                <div class="content1">
                    <h2>Didik Wahyudi<br><span>Manajemen Informatika</span></h2>
                </div>
            </div>  
        </div>  
    </section>

    <section class="testimonials" id="testimonials">
        <div class="title white">
            <h2 class="tittleText">They <span>S</span>aid About us</h2>
            <p>Tanggapan selebgram mengenai fitur website futsal match</p>
        </div>
        <div class="content">
            <div class="hexagon">
                <div class="shape">
                    <img src="img/angie.jpg">
                    <div class="text">
                        <div>
                            <h3>Angie Marcheria</h3>
                            <p>Tampilanya aesthetic banget dan ada fitur get new friend jadi enak kalo mau sparing sama temen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hexagon">
                <div class="shape">
                    <img src="img/tia kartika.jpg">
                    <div class="text">
                        <div>
                            <h3>Tia Kartika</h3>
                            <p>Fitur booking lapanganya mudah banget gak pake ribet, pokoknya baguss dah 😅</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hexagon">
            <div class="shape">
                <img src="img/alice.jpg">
                <div class="text">
                    <div>
                        <h3>Maureen Gabriella</h3>
                        <p>Kerennn!! Jarang jarang lihat ada website yang bisa booking lapangan futsal, bisa update status dan fitur chat<br>KEREN PARAH😍</p>
                    </div>
                </div>
            </div>
        </div>         
    </section>





    
    <section class="contact" id="contact">
        <div class="titlea">
            <h2 class="tittleText"><span>C</span>ontact Us</h2>
            <p>Untuk masukan dan saran silahkan hubungi kami dibawah ini</p>
        </div>
        <div class="containerc">
            <h2>Hubungi Kami</h2>          
            <div class="row100">          
                <div class="col">          
                    <div class="inputBox">          
                       <input type="text" name="" required="required">          
                       <span class="text">Nama Depan</span>          
                       <span class="line"></span>          
                    </div>                
                </div>
                <div class="col">          
                    <div class="inputBox">          
                      <input type="text" name="" required="required">          
                      <span class="text">Nama Belakang</span>          
                      <span class="line"></span>          
                    </div>             
                </div>          
            </div>          
            <div class="row100">          
                <div class="col">          
                    <div class="inputBox">          
                      <input type="text" name="" required="required">          
                      <span class="text">Email</span>          
                      <span class="line"></span>          
                    </div>             
                </div>          
                <div class="col">          
                    <div class="inputBox">          
                      <input type="text" name="" required="required">          
                      <span class="text">Nomor HP</span>          
                      <span class="line"></span>          
                    </div>             
                </div>          
            </div>          
          
          
            <div class="row100">          
                <div class="col">          
                    <div class="inputBox textarea">          
                      <textarea required="required"></textarea>          
                      <span class="text">ketikkan pesanmu disini...</span>          
                      <span class="line"></span>          
                    </div>          
                </div>          
            </div>          
          
                  
            <div class="row100">          
                <div class="col">          
                  <input type="submit" value="kirim">          
                </div>          
            </div>
        </div>
    </section>

    
    <div class="copyrightText">
        <p>Copyright 2021 <a href="#"> FutsalMatch</a>. All Right Reserved</p>
    </div>


    <script type="text/javascript">
        window.addEventListener('scroll', function(){
         const header = document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0);
        });


        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
    <script>
        const popup = document.querySelector('.popup');
        const close = document.querySelector('.close');

        window.onload = function(){
            setTimeout(function(){
                popup.style.display = "block";

                // Add some time delay to show popup 
            }, 2000)
        }
        close.addEventListener('click', () => {
            popup.style.display = "none";
        })
    </script>
</body>
</html>