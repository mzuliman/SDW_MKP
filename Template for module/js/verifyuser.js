
  // Get a reference to the verify button
  const verifyButton = document.getElementById('verifyButton');

  // Add a click event listener to the button
  verifyButton.addEventListener('click', function() {
    // Perform eligibility verification logic here
    const isAsalPahang = true; // Replace with your logic to check if both partners are from Pahang
    const maleIncome = 5500.00; // Replace with the actual income value for the male partner

    // Additional conditions
    const isPoligami = false; // Replace with your logic to check if the person is involved in polygamy
    const isNikahTanpaKebenaran = false; // Replace with your logic to check if the person has married without permission

    // Display a pop-up message based on eligibility
    if (isAsalPahang && maleIncome <= 5000.00 && !isPoligami && !isNikahTanpaKebenaran) {
      alert("Congratulations! You are eligible for the incentive.");
    } else {
      alert("Sorry, you are not eligible for the incentive.");
    }
  });

