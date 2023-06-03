
  // Get a reference to the verify button
  const verifyButton = document.getElementById('verifyButton');

  // Add a click event listener to the button
  verifyButton.addEventListener('click', function() {
    // Perform eligibility verification logic here
    const isAsalPahang = true; 
    const maleIncome = 5500.00; 
    const isPoligami = false; 
    const isNikahTanpaKebenaran = false; 

    // Display a pop-up message based on eligibility
    if (isAsalPahang && maleIncome <= 5000.00 && !isPoligami && !isNikahTanpaKebenaran) {
      alert("Congratulations! You are eligible for the incentive.");
    } else {
      alert("Sorry, you are not eligible for the incentive.");
    }
  });

