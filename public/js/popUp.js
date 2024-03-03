    // Get modal and forms by IDs
    var modalOverlay = document.getElementById('modal-overlay');
  
    var signUpForm = document.getElementById('signUpForm');
    var signInForm = document.getElementById('signInForm');
    var closeModalBtn = document.getElementById('closeModal');
    var switchToSignUpBtn = document.getElementById('switchToSignUp');
    var switchToSignInBtn = document.getElementById('switchToSignIn');

    // Open the modal
    document.getElementById('openModalBtn').addEventListener('click', function () {
        signUpForm.classList.remove('hidden');
        signInForm.classList.add('hidden');
        modalOverlay.style.display = 'flex';
    });

    // Close the modal
    closeModalBtn.addEventListener('click', function () {
        modalOverlay.style.display = 'none';
        
    });

 
    switchToSignUpBtn.addEventListener('click', function () {
        signUpForm.classList.remove('hidden');
        signInForm.classList.add('hidden');
        switchToSignUpBtn.classList.add('active');
        switchToSignInBtn.classList.remove('active');
        
    });

  
    switchToSignInBtn.addEventListener('click', function () {
        signUpForm.classList.add('hidden');
        signInForm.classList.remove('hidden');
        switchToSignUpBtn.classList.remove('active');
        switchToSignInBtn.classList.add('active');
    });

// login


