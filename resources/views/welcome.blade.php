<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Hololive</title>
    <link rel="stylesheet" href="css/demo.css">
</head>
<body>
  <section class="showcase">
    <header>
      <h2 class="logo"><img src="{{ asset("images\home\Hololive_Production_logo.png") }}" width="150"></h2>
      <div class="toggle"></div>
    </header>
    <video src="video\hololive 5th fes. Capture the MomenPV.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Hololive</h2> 
      <h3>Production</h3>
      <p>
        Hololive Production (ホロライブプロダクション hororaibu purodakushon, stylized in lowercase), 
        or simply known as hololive (ホロライブ), is a Virtual Talent agency consisting of Virtual 
        YouTubers owned by Japanese tech entertainment company COVER Corporation.
      </p>
      <a href="{{ url('/home') }}">Explore</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="{{ url('/views') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/views') }}">Talents</a></li>
      <li><a href="{{ url('/blogmusic') }}">Music</a></li>
      <li><a href="{{ url('/members') }}">Contact</a></li>
    </ul>
  </div>

  <script> 
  const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      showcase.classList.toggle('active');
    })
    </script>

</body>
</html>