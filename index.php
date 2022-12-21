<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">    
    <meta name="apple-mobile-web-app-title" content="CodePen" />

    <title>Welcome to Eightyythree</title>

    <style>
        /*improt cairo font*/
        @font-face {
            font-family: 'cairo';
            src: url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap');
        }
      html {
        width: 100%;
        height: 100%;
      }
      body {
        text-align: center;
        margin: 0px;
        padding: 0px;
        height: 100%;
        color: #fff;
        font-family: 'cairo', sans-serif;
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        -webkit-animation: Gradient 15s ease infinite;
        -moz-animation: Gradient 15s ease infinite;
        animation: Gradient 15s ease infinite;
      }
      .vh {
        height: 100%;
        align-items: center;
        display: flex;
      }
      .vh > div {
        width: 100%;
        text-align: center;
        vertical-align: middle;
      }
      img {
        max-width: 100%;
      }
      .wrap {
        text-align: center;
      }
      .wrap h1 {
        font-size: 30px;
        font-weight: 700;
        margin: 0 0 90px;
      }
      .wrap h2 {
        font-size: 24px;
        font-weight: 400;
        line-height: 1.6;        
      }
      @-webkit-keyframes Gradient {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }
      @-moz-keyframes Gradient {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }
      @keyframes Gradient {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }
    </style>

    <script>
      window.console = window.console || function (t) {};
    </script>

    <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
    </script>
  </head>

  <body translate="no">
    <div class="vh">
      <div>
        <div class="wrap">
          <h1>Eightyythree</h1>
          <h2>
            <p>
                The key of creative ! 🔑
            </p>
          </h2>
          <p>We 'll be back soon.</p>
        </div>
      </div>
    </div>
  </body>
</html>
