<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slide-in Container</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      position: fixed;
      top: 0;
      right: -300px; /* Initially off-screen */
      width: 300px;
      height: 100%;
      background-color: #f1f1f1;
      padding: 20px;
      transition: right 0.3s ease-in-out;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }

    .button {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .close-button {
      background-color: #f44336;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<button class="button" onclick="toggleContainer()">Toggle Container</button>

<div class="container">
  <p>This is the sliding container. You can put your content here.</p>
  <button class="close-button" onclick="toggleContainer()">Close</button>
</div>

<script>
  function toggleContainer() {
    var container = document.querySelector('.container');
    container.style.right = container.style.right === '0px' ? '-300px' : '0px';
  }
</script>

</body>
</html>
