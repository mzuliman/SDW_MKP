
  // Function to update the clock
  function updateTime() {
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
  
    
    // Format the time
    var ampm = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12;
    hour = hour ? hour : 12;
  
    var clock = document.getElementById('clock');
    clock.textContent = hour + ':' + addLeadingZero(minute) + ':' + addLeadingZero(second) + ' ' + ampm;
  
     // Get the date and month
    var days = ['Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu'];
    var months = [
      'Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'
    ];
  
    // Update the clock and date in the HTML
    var date = document.getElementById('date');
    date.textContent = days[now.getDay()] + ' ' + months[now.getMonth()] + ' ' + now.getDate();

  }
  
  function addLeadingZero(number) {
    return number < 10 ? '0' + number : number;
  }
   // Update the clock every second
  updateTime();
  setInterval(updateTime, 1000);
  