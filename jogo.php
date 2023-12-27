<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <title>No - Body</title>
  <style>
    * {
      margin:0;
      padding:0;
      box-sizing:border-box;
    }
    body {
      height:100vh;
      overflow:hidden;
    }
    .game-board {
      background-color:#21304f;
      height:100%;
      width:100%;
      overflow:hidden;
    }
    .player {
      background-color:#faff44;
      border-radius:30px;
      height:60px;
      width:60px;
      position:absolute;
      bottom:200px;
      left:130px;
    }
    .enemy {
      background-color:gray;
      border-radius:30px;
      height:60px;
      width:60px;
      animation:position 2s infinite ease;
    }
    @keyframes position {
      0%{top:-500px;}
      50%{top:100px;}
      100%{top:800px;}
    }
    #enemy-01 {
      position:absolute;
      top:0px;
      left:130px;
    }
    #enemy-02 {
      position:absolute;
      top:0px;
      left:250px;
    }
    #enemy-03 {
      position:absolute;
      top:0px;
      left:15px;
    }
    .botoes {
      margin-right:15px;
      margin-bottom:15px;
      background-color:gray;
      border-radius:12px;
      height:100px;
      width:100px;
      position:relative;
      top:100%;
      left:100%;
      transform:translate(-100%,-100%);
    }
    .botao {
      background-color:#4487ff;
      border-radius:8px;
      color:white;
      height:15px;
      width:15px;
      padding:4px;
      text-align:center;
      position:absolute;
    }
    #left {
      top:50%;
      left:0px;
      transform:translateY(-50%);
    }
    #right {
      top:50%;
      right:0px;
      transform:translateY(-50%);
    }
    #bottom {
      left:50%;
      transform:translateX(-50%);
      bottom:0px;
    }
    #top {
      left:50%;
      transform:translateX(-50%);
      top:0px;
    }
  </style>
</head>
<body>
  <div class="game-board">
    <div class="player"></div>
    <div class="enemy" id="enemy-01"></div>
  <div class="botoes">
   <div class="botao" id="left" onclick="movetoLeft()"></div>
   <div class="botao" id="right" onclick="movetoRight()"><i class="fi fi-rr-angle-right"></i></div>
   <div class="botao" id="bottom" onclick="movetoBottom()"></div>
   <div class="botao" id="top" onclick="movetoTop()"></div>
  </div>
  </div>
</body>
<script>
  const gameBoard = document.querySelector(".game-board");
  const player = document.querySelector(".player");
  const enemy01 = document.querySelector("#enemy-01");

  function verificar() {
    const pPlayer = player.getBoundingClientRect();
    const pEnemy01 = enemy01.getBoundingClientRect();
    const pGameBoard = gameBoard.getBoundingClientRect();
     if(!(pPlayer.right < pEnemy01.left + pGameBoard.left || pPlayer.left > pEnemy01.right + pGameBoard.left || pPlayer.bottom < pEnemy01.top + pGameBoard.top || pPlayer.top > pEnemy01.bottom + pGameBoard.top)) {
      player.style.background = "red";
     }else {
       player.style.background = "blue";
     }
  }
  function movetoLeft() {
  let pPlayer = player.getBoundingClientRect();
    player.style.left = pPlayer.left + -100 + "px";
  }
  function movetoRight() {
  let pPlayer = player.getBoundingClientRect();
    
    player.style.left = pPlayer.left + 100 + "px";
  }
  function movetoTop() {
  let pPlayer = player.getBoundingClientRect();
  player.style.top = pPlayer.top + -100 + "px";
  }
  function movetoBottom() {
  let pPlayer = player.getBoundingClientRect();
    player.style.top = pPlayer.top + 100 + "px";
  }
  setInterval(verificar,100);
</script>
</html>