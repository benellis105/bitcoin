var bid = document.getElementById('bid'),
ask = document.getElementById('ask'),
pusher = new Pusher('de504dc5763aeef9ff52'),
orderBookChannel = pusher.subscribe('order_book');
orderBookChannel.bind('data', function (data) {
    bid.innerHTML = "Bid " + parseFloat(data.bids[0][0]).toFixed(2);
    ask.innerHTML = "Ask " + parseFloat(data.asks[0][0]).toFixed(2);
});