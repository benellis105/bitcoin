<?php include 'price.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,700" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Bitcoin Ticker</title>
  </head>
    <body>
        <div class="priceBar">
            <div class="priceBox1">
                <div id="bid">Bid</div>
            </div>
            <div class="priceBox2">
                <div id="ask">Ask</div>
            </div>
            <script src="https://d3dy5gmtp8yhk7.cloudfront.net/2.1/pusher.min.js" type="text/javascript"></script>
            <script src="pusher.js" type="text/javascript"></script>
            <div class="priceBox3">
                <div class="high">High <?php echo("$high"); ?></div>
            </div>
            <div class="priceBox4">
                <div class="low">Low <?php echo($low); ?></div>
            </div>
        </div>
        <div class="description">
            <p>
                Bitcoin is a popular cryptocurrency. This project displays the current prices associated with bitcoin by utilizing a combination of bitstamp.net's REST API and the Pusher library to retrieve the financial data.
                Once retrieved, the information is displayed in the boxes above. In the first two boxes, the buying (bid) and selling (ask) prices of a single bitcoin are shown.
                The last two boxes show the highest and lowest prices seen for a single bitcoin in a 24-hour period.
            </p>
            <p>
                The bid and ask prices are retrieved through the use of the Pusher library (https://www.pusher.com). Javascript is used to connect to the Pusher server where it then listens for financial data regarding bitcoin.
                The high and low prices are retrieved using bitstamp.net's REST API. The cURL library is utilized by PHP to connect to bitstamp.net where a GET request is submitted to retrieve the JSON formatted financial data.
            </p>
        </div>
        <div class="download"><a href="https://github.com/benellis105/bitcoin">Download Source</a></div>
        <div class="tinted-box"></div>
    </body>
</html>