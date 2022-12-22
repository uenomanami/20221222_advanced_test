<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .contact__close {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align:center;
  }

  .contact__close p {
    margin-bottom:30px;
  }
  
  .contact__close button {
    width: 120px;
    height: 35px;
    background-color: black;
    color: white;
    border: 1px solid black;
    border-radius: 3px;
  }


</style>
<body>
  <div class="container">
    <div class="contact__close">
      <p>ご意見いただきありがとうございました。</p>
      <button>トップページへ</button>    
    </div>
  </div>
</body>
</html>