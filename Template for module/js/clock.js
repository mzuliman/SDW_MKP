// Function to update the clock
function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
  
    // Format the time
    var timeString =
      hours.toString().padStart(2, '0') +
      ':' +
      minutes.toString().padStart(2, '0') +
      ':' +
      seconds.toString().padStart(2, '0');
  
    // Get the date
    var date = now.toDateString();
  
    // Update the clock and date in the HTML
    document.getElementById('clock').textContent = timeString;
    document.getElementById('date').textContent = date;
  }
  
  // Update the clock every second
  setInterval(updateClock, 1000);
  