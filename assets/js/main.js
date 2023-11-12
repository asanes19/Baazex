/*=============== scroll reveal fade in ===============*/
const sr = ScrollReveal({
    origin: "bottom",
    distance: "50px",
    duration: 1500,
    delay: 500,
    // reset: true,
});


// DOM Elements
const circles = document.querySelectorAll('.circle');
const progressBar = document.querySelector('.indicator');
const buttons = document.querySelectorAll('button');
const step1 = document.querySelector('.step.step1');
const step2 = document.querySelector('.step.step2');
const submitButton = document.getElementById('submit'); // Get the submit button

let currentStep = 1;

// Function to update the steps and the DOM
const updateSteps = () => {
  if (currentStep === 1) {
    // Hide Step 1
    step1.style.display = 'flex';
    // Show Step 2
    step2.style.display = 'none';
    // Enable the prev button in Step 2
    buttons[0].disabled = true;
    // Disable the next button in Step 2
    buttons[1].disabled = false;
    // Hide the Submit button in Step 1
    submitButton.style.display = 'none';
  } else if (currentStep === 2) {
    // Hide Step 2
    step2.style.display = 'flex';
    // Show Step 1
    step1.style.display = 'none';
    // Disable the prev button in Step 1
    buttons[0].disabled = false;
    // Enable the next button in Step 1
    buttons[1].disabled = true;
    // Hide the Next button in Step 2
    buttons[1].style.display = 'none';
    // Show the Submit button in Step 1
    submitButton.style.display = 'inline-block';
  }

  // Update the circles' "active" class based on the current step
  circles.forEach((circle, index) => {
    circle.classList.toggle('active', index < currentStep);
  });

  // Update the progress bar width based on the current step
  progressBar.style.width = `${((currentStep - 1) / 1) * 100}%`;
};

// Add click event listeners to the buttons
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    if (button.id === 'next' && currentStep < 2) {
      currentStep++;
      updateSteps();
    } else if (button.id === 'prev' && currentStep > 1) {
      currentStep--;
      updateSteps();
      if (currentStep === 1) {
        // Show the Next button again when returning to Step 1
        buttons[1].style.display = 'inline-block';
      }
    }
  });
});

// Initial update to set up the default state
updateSteps();


document.getElementById("submit").addEventListener("click", function(event) {
    var confirmation = confirm("هل أنت متأكد من تسليم البيانات؟");
    if (!confirmation) {
        event.preventDefault(); // Prevent the form submission if the user clicks "Cancel"
    }
});


function validateEnglishInput(input) {
  var englishLetters = /^[A-Za-z\s]+$/;
  
  if (!englishLetters.test(input.value)) {
      // Non-English characters detected, disable the input and show the error message
      input.value = input.value.replace(/[^A-Za-z\s]+$/, '');
      input.blur();
      document.getElementById('error-message').style.display = 'block';
  } else {
      // No non-English characters, enable the input and hide the error message
      document.getElementById('error-message').style.display = 'none';
  }
}