<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What We Offer</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #f8f9fa;
    }

    h2 {
      margin-top: 40px;
      font-size: 32px;
    }

    .offer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 40px auto;
      max-width: 1000px;
      gap: 20px;
    }

    .offer-box {
      flex: 1 1 200px;
      max-width: 220px;
      padding: 30px 20px;
      border-radius: 10px;
      color: white;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .offer-box:hover {
      transform: scale(1.05);
    }

    .blue { background-color: #1b1464; }
    .yellow { background-color: #fbc02d; color: #000; }
    .green { background-color: #388e3c; }
    .red { background-color: #c62828; }

    .offer-box img {
      width: 50px;
      height: 50px;
      margin-bottom: 15px;
    }

    .offer-box p {
      font-size: 18px;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h2>What We Offer refridgeration Services  To:</h2>
  <div class="offer-container">
    <div class="offer-box blue">
      <img src="https://img.icons8.com/ios-filled/50/ffffff/car.png" alt="Exhibition Icon"/>
      <p>Car AC</p>
    </div>
    <div class="offer-box yellow">
      <img src="https://img.icons8.com/ios-filled/50/000000/office.png" alt="Conference Icon"/>
      <p>Office</p>
    </div>
    <div class="offer-box green">
      <img src="https://img.icons8.com/ios-filled/50/ffffff/home.png" alt="Info Icon"/>
      <p>Home</p>
    </div>
    <div class="offer-box red">
      <img src="https://img.icons8.com/ios-filled/50/ffffff/fridge.png" alt="Partnership Icon"/>
      <p>Butcher Shops</p>
    </div>
  </div>

</body>
</html>
