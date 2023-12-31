<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>button</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html {
  box-sizing: border-box;
  font-size: 62.5%;
}

* {
  padding: 0;
  margin: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  box-sizing: inherit;
}
*::after, *::before {
  box-sizing: inherit;
}

body .send-button {
  position: absolute;
  top: 50px;
  left: 50%;
  transform: translate(-50%, -50%);
  top:375px;
left:800px
}

@keyframes icon-animation {
  0% {
    transform: rotate(0deg) scale(1);
  }
  33% {
    transform: rotate(-120deg) scale(4);
  }
  66% {
    transform: rotate(-240deg) scale(4);
  }
  100% {
    transform: rotate(-360deg) scale(1);
  }
}
@keyframes input-shadow {
  0% {
    box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
  }
  40% {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  }
  50% {
    box-shadow: none;
  }
  70% {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  }
  100% {
    box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
  }
}
.icon-wrapper-animation {
  animation: icon-animation 1.5s linear;
  transition: color 0.6s ease;
  color: #66bb6a;
}

.clicked {
  transform: translate(-50%, calc(-50% + 1px)) !important;
  transition: transform 0.15s ease;
  animation: input-shadow 0.15s ease;
  box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
}
.clicked > .text {
  transform: translateY(1px);
  transition: transform 0.15s ease-out;
}

body {
  background-color: #ffffff00;
}
body .send-button {
  background-color: rgba(231, 238, 38, 0.29);
  width: 250px;
  height: 45px;
  border-radius: 2px;
  box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  user-select: none;
  transition: transform 0.15s;
  text-shadow: 1px 2px 1px rgba(77, 9, 36, 0.6);
}
body .send-button .text {
  position: absolute;
  left: 10px;
  font-size: 22px;
  font-size: 2.2rem;
  letter-spacing: 1px;
  line-height: 45px;
  font-family: "Roboto";
  font-weight: 700;
  color: #f8bbd0;
  text-transform: uppercase;
}
body .send-button .icon-wrapper {
  position: absolute;
  right: -65px;
  bottom: -10px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  line-height: 45px;
  color: #f8bbd0;
}
body .send-button .icon-wrapper [class*="icon-"] {
  position: absolute;
  left: 100px;
  bottom: 10px;
  transition: color 0.6s ease;
}
body .send-button .icon-wrapper .icon-1 {
  transform: rotate(15deg);
  font-size: 23px;
  font-size: 2.3rem;
  opacity: 1;
}
body .send-button .icon-wrapper .icon-2 {
  opacity: 0;
  font-size: 25px;
  font-size: 2.5rem;
}

    </style>

  <script src="js/prefixfree.min.js"></script>

</head>

<body>
  <div class="send-button" >
 <span class="text" >LET'S GO！</span>
  <span class="icon-wrapper">
  	<span class="icon-1 ion-paper-airplane"></span>
		<span class="icon-2 ion-checkmark"></span>
  </span>
</div>

  <script src='js/jquery-2.2.4.min.js'></script>

    <script src="js/indexbutton.js"></script>
</body>
</html>
