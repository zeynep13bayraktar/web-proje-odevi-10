<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap.js"></script>
    <title>Aloni</title>
</head>
<body> 
    <div class="ust-kisim-sayfalar">

        <nav class="navbar navbar-expand-lg nav-bg ">
            <!--style.css de ekli navbar-bg classımı buraya getirerek navbarımın arka planının rengini ayarladım-->
            <div class="container p-0">
                <!--"p-0", 992px ve altına inince ekran genişliği, navbarımın üstündeki seçeneklere mause götürdüğümde oluşan mavimtırak arka planın sağ ve sola olan boşluklarını sıfırlar  -->
                <a class="navbar-brand" href="#">
                    <img class="img-fluid logo" src="pictures/resimler/logo2.png" alt="">
                    <!--sitemin logosunun ismi-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item d-flex align-items-center p-2">
                            <!--p-2 ler burada ekran 992px ve daha küçükken aşağı doğru sıralanan navbar elemanlarımı bi tık sağa kaydırıp büyütmeme yarıyor-->
                            <a class="nav-link active" aria-current="page" href="hakkimizda.html">Hakkımda</a>
                            <span class="ayrac">|</span>
                            <!--navbar elemanlarım arasına ayraç ekleme-->
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="sehrim.html">Şehrim</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="ilgialanlarim.html">İlgi alanlarım</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="iletisim.html">İletişim</a>
                            <span class="ayrac">|</span>
                        </li>
                        <li class="nav-item d-flex align-items-center p-2">
                            <a class="nav-link" href="login.php">Log in</a>
                        </li>
                    </ul>
                </div>
        </nav>
 
          
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center header-yukseklik">
                    <img src="pictures/resimler/logo5.jpg" class="img-fluid " alt=""/> 
                    <div class="sayfa-basligi ms-4" >
                    <h3>GİRİŞ</h3>
                    </div>                 
                </div>
            </div>
        </div>
    </div> 


              
           <?php  
             
       $bilgi= array( 
                  array(
                 "username" => "g231210081",
                 "password" => "123456")
                  );


                 $username = isset($_POST['username']) ? $_POST['username']: "";
                 $password =isset($_POST['password'])? $_POST['password']: "";

                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 if ($username === $bilgi[0]['username'] && $password === $bilgi[0]['password']) 

                                  {                                    
                                     echo "işlem başarılı! Hoşgeldin". " ".$bilgi[0]['username'];
                                  } 
                                  else 
                                  {
                                          echo "Kullanıcı adı veya şifre yanlış!";
                                  }

                
                                }?>
                        
      


      <div class="container2 my-4"> 
        <div class="row">
            <div class="col-md-12">
                <div class="box form-box"> 
                   <header>Giriş</header>
                    <form action="" method="post">

                        <div class="field input">

                            <label for="username">Kullanıcı Adı: </label>
                            <input type="text" name="username" id="username" min="1" required>
                        </div>

                        <div class="field input">

                            <label for="password">Şifre: </label>
                            <input type="password" name="password" id="password"  min="1" required>
                        </div>

                        <div class="field">

                            <input type="submit" class="btn" name="submit" value="giriş" required>
                        </div> 
                          </form><!-- #region 
          
                        
                        
                        
                        
                        
                        
                        -->
                   

                </div>
            </div>
        </div>
      </div>

      
                
       
      
      <div class="container-fluid footer">
        <div class="row">
            <div class="col-md-12 sutun-footer d-flex flex-column justify-content-center align-items-center">
              <div class="class">
                    <i class="fa-brands fa-instagram fa-3x"></i>
                </div>
                <p>©copyright 2024 Tüm Hakları Saklıdır</p> 
                <p>Zeynep Bayraktar</p>
            </div>
        </div>
    </div>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
</body>
</html>