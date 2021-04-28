<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Car Rental Form </title>
    <link rel="stylesheet" href="carRent.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    
    <header class="nav">
        <div class="title">Make Your Trip!</div>
    </header>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box1">
            <span class="details">Pick-Up Location</span>
            <input type="text" placeholder="Enter a PlaceName" required>
          </div>
          <div class="input-box1">
            <span class="details">Drop-Off Location</span>
            <input type="text" placeholder="Enter a PlaceName" required>
          </div>
          <div class="input-box">
            <span class="details">Pick-Up Date</span>
            <input type="date" placeholder="Input Date" required>
          </div>
          <div class="input-box">
            <span class="details">Drop-Off Date</span>
            <input type="date" placeholder="Input Dates" required>
          </div>

          <div class="input-box2">
            <span class="details">Pick-Up Time</span>
            <input type="time" placeholder="Pick a Time" required="">
          </div>


        <div class="button">
          <input type="submit" value="Search">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
