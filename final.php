<?php 
$arra = $_GET["names"];
$name = json_decode($arra);
$name0 = $name[0];
$name1 = $name[1];
$name2 = $name[2];
$name3 = $name[3];
$name4 = $name[4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucess</title>
    <link rel="stylesheet" href="style.css">
    
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="main">
        <div class="card">
            <img src="https://gmritchapter.acm.org/public/img/logos/acm.png" alt="ACM" class="logo">
            <span>

           
            <h1 style="font-size:2rem;">QR HUNT</h1>
            <h1 style="font-size:1.5rem;">ACM Student chapter</h1>
             </span>

            <p> <span class="high">Team:</span> <?php echo $name0; ?></p>
    <p>Player 1 : <?php echo $name1; ?></p>
    <p>Player 2 :<?php echo $name2; ?></p>
    <p>Player 3 :<?php echo $name3; ?></p>
    <p>Player 4 :<?php echo $name4; ?></p>
        </div>
    </div>
<div id="confetti-wrapper">
  </div>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.main{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
   height: 100vh;
background: #f2709c;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff9472, #f2709c);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff9472, #f2709c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.logo{
    height: 10rem;
    
}
.high{
     font-size: 1.5rem;

}
.card{
    
    display: inherit;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: solid rgba(35, 35, 35, 0.2);
    padding: 1.5rem;
    border-radius: 15px;
    width: 20rem;
    max-width:28rem;
    animation: 'loadmove' 2s;
    background: #ddd6f3;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #faaca8, #ddd6f3);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #faaca8, #ddd6f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
h1{
 font-family: 'Josefin Sans', sans-serif;
    font-size:2rem;
}
.card p{
    font-family: 'Josefin Sans', sans-serif;
   
    text-align:center;
    /* padding: 5px;
    line-height: 1.5; */
}
@keyframes loadmove {
    0%{
         transform: scale(0.2); 
    }
    50%{
                transform: scale(0.5); 
    }
    100%{
                 transform: scale(1); 

    }
}
    </style>

    <style>
        :root {
  --border-color: #D7DBE3;
  font-family: -apple-system, BlinkMacSystemFont, "Roboto", "Open Sans", "Helvetica Neue", sans-serif;
  --green: #0CD977;
  --red: #FF1C1C;
  --pink: #FF93DE;
  --purple: #5767ED;
  --yellow: #FFC61C;
  --rotation: 0deg;
}

body {
  overflow: hidden;
  width: 100%;
  height: 100%;
}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.modal {
  width: 300px;
  margin: 0 auto;
  border: 1px solid var(--border-color);
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.16);
  background-color: #fff;
  border-radius: 0.25rem;
  padding: 2rem;
  z-index: 1;
}

.emoji {
  display: block;
  text-align: center;
  font-size: 5rem;
  line-height: 5rem;
  transform: scale(0.5);
  animation: scaleCup 2s infinite alternate;
}

@keyframes scaleCup {
  0% {
    transform: scale(0.6);
  }
  100% {
    transform: scale(1);
  }
}
h1 {
  text-align: center;
  font-size: 1em;

}

.modal-btn {
  display: block;
  margin: 0 -2rem -2rem -2rem;
  padding: 1rem 2rem;
  font-size: 0.75rem;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  font-weight: 600;
  border-radius: 0 0 0.25rem 0.25rem;
  background-color: var(--green);
  text-decoration: none;
}

@keyframes confettiRain {
  0% {
    opacity: 1;
    margin-top: -100vh;
    margin-left: -200px;
  }
  100% {
    opacity: 1;
    margin-top: 100vh;
    margin-left: 200px;
  }
}
.confetti {
  opacity: 0;
  position: absolute;
  width: 1rem;
  height: 1.5rem;
  transition: 500ms ease;
  animation: confettiRain 5s infinite;
}

#confetti-wrapper {
  overflow: hidden !important;
}
    </style>
    <script>
        for(i=0; i<100; i++) {
  // Random rotation
  var randomRotation = Math.floor(Math.random() * 360);
    // Random Scale
  var randomScale = Math.random() * 1;
  // Random width & height between 0 and viewport
  var randomWidth = Math.floor(Math.random() * Math.max(document.documentElement.clientWidth, window.innerWidth || 0));
  var randomHeight =  Math.floor(Math.random() * Math.max(document.documentElement.clientHeight, window.innerHeight || 500));
  
  // Random animation-delay
  var randomAnimationDelay = Math.floor(Math.random() * 15);
  console.log(randomAnimationDelay);

  // Random colors
  var colors = ['#0CD977', '#FF1C1C', '#FF93DE', '#5767ED', '#FFC61C', '#8497B0']
  var randomColor = colors[Math.floor(Math.random() * colors.length)];

  // Create confetti piece
  var confetti = document.createElement('div');
  confetti.className = 'confetti';
  confetti.style.top=randomHeight + 'px';
  confetti.style.right=randomWidth + 'px';
  confetti.style.backgroundColor=randomColor;
  // confetti.style.transform='scale(' + randomScale + ')';
  confetti.style.obacity=randomScale;
  confetti.style.transform='skew(15deg) rotate(' + randomRotation + 'deg)';
  confetti.style.animationDelay=randomAnimationDelay + 's';
  document.getElementById("confetti-wrapper").appendChild(confetti);
}
    </script>
</body>
</html>