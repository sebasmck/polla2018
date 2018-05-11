

// Set the date we're counting down to
var countDownDate = new Date("Jun 14, 2018 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = 
  "<ul style='list-style-type: none;margin: 5px;padding: 0;overflow: hidden; font-size:0.8em;'>"+ 
    "<li style='float: left;'><p style='margin-top: 2px;'>" + days + "</p><p style='margin-bottom: 1px;'> Days</p></li>"+
    "<li style='float: left; margin-right: 10px; margin-left: 4px;'> : </li>"+
    "<li style='float: left; '><p style='margin-top: 2px;'>" + hours + "</p><p style='margin-bottom: 1px;'> Hours</p></li>"+
      "<li style='float: left; margin-right: 10px; margin-left: 4px;'> : </li>"+
    "<li style='float: left; '><p style='margin-top: 2px;'>" + minutes + "</p><p style='margin-bottom: 1px;'>Mins</p></li>"+
      "<li style='float: left; margin-right: 10px; margin-left: 4px;'> : </li>"+
    "<li style='float: left; '><p style='margin-top: 2px;'>" + seconds + "</p><p style='margin-bottom: 1px;'>secs</p></li>"+
  "</ul>";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);