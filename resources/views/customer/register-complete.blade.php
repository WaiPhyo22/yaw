<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <style>
      body,
      html {
        background: #002F74;
      }
      .spin-container {
        text-align: center;
        margin-top: 100px;
      }
      .spin {
        border: 3px solid #0D4B9F;
        width: 200px;
        height: 200px;
        margin: 0 auto;
        border-radius: 50%;
        border-left-color: transparent;
        border-right-color: transparent;
        animation: rotate 2s cubic-bezier(0.26, 1.36, 0.74, -0.29) infinite;
      }
      #loader2 {
        border: 3px solid #E0EDFF;
        width: 220px;
        height: 220px;
        position: relative;
        top: -216px;
        border-left-color: transparent;
        border-right-color: transparent;
        animation: rotate2 2s cubic-bezier(0.26, 1.36, 0.74, -0.29) infinite;
      }
      #loader3 {
        border: 3px solid #005CDC;
        width: 240px;
        height: 240px;
        position: relative;
        top: -452px;
        border-left-color: transparent;
        border-right-color: transparent;
        animation: rotate 2s cubic-bezier(0.26, 1.36, 0.74, -0.29) infinite;
      }
      #loader4 {
        border: 3px solid #94B6E5;
        width: 260px;
        height: 260px;
        position: relative;
        top: -708px;
        border-left-color: transparent;
        border-right-color: transparent;
        animation: rotate2 2s cubic-bezier(0.26, 1.36, 0.74, -0.29) infinite;
      }
      @keyframes rotate {
        0% {
          transform: rotateZ(-360deg)
        }
        100% {
          transform: rotateZ(0deg)
        }
      }
      @keyframes rotate2 {
        0% {
          transform: rotateZ(360deg)
        }
        100% {
          transform: rotateZ(0deg)
        }
      }
      #text {
        color: #D6E3F6;
        font-family: Arial;
        font-size: 15px;
        position: relative;
        top: -857px;
      }
    </style>
  </head>
  <body>
    <div class="spin-container">
      <div class="spin" id="loader"></div>
      <div class="spin" id="loader2"></div>
      <div class="spin" id="loader3"></div>
      <div class="spin" id="loader4"></div>
      <span id="text">GOOD LUCK</span>
    </div>
  </body>
</html>