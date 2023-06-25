/*!
* Start Bootstrap - Simple Sidebar v6.0.6 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
// 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// Open the popup
function openPopup() {
    // Fetch data from the database (dummy data for example)
    var data = "This is the data from the database.";
  
    // Set the data in the popup content
    document.getElementById("popupContent").textContent = data;
  
    // Display the popup and overlay
    document.getElementById("popup").style.display = "block";
    document.getElementById("overlay").style.display = "block";
  }
  
  // Close the popup
  function closePopup() {
    // Hide the popup and overlay
    document.getElementById("popup").style.display = "none";
    document.getElementById("overlay").style.display = "none";
  }
  
// Show the submission notification
function showNotification() {
    // Display the notification
    document.getElementById("notification").style.display = "block";

    // Hide the notification after 3 seconds
    setTimeout(function() {
      document.getElementById("notification").style.display = "none";
      redirectToAnotherPage(); // Redirect to another page
    }, 3000);
  }

  // Redirect to another page
  function redirectToAnotherPage() {
    // Replace "destination.html" with the actual destination URL
    window.location.href = "<?= BASEURL ?>/PreCourse/PreCourseView";
  }

  // Handle form submission
  function handleSubmit(event) {
    event.preventDefault(); // Prevent the default form submission

    // Perform form submission logic here (e.g., sending data to the server)

    showNotification(); // Show the submission notification
  }
  

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
