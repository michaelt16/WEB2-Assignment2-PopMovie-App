
document.addEventListener('DOMContentLoaded', () =>{

  const firstnameEl = document.querySelector('#firstname');
  const lastnameEl = document.querySelector('#lastname');
  const cityEl = document.querySelector('#city');
  const countryEl = document.querySelector('#country');
  const emailEl = document.querySelector('#email');
  const passwordEl = document.querySelector('#password');
  const confirmPasswordEl = document.querySelector('#confirm-password');
  
  const form = document.querySelector('#signup');
  
  function checkFirstName(){
      let valid = false;
      const username = firstnameEl.value.trim();
      if(username == ''){
          showError(firstnameEl, 'First Name cannot be blank.');
      }else{
          showSuccess(firstnameEl);
          valid = true;
      }

      return valid; 
  
  }
  
  function  checkLastName(){
      let valid = false;
      const lastname = lastnameEl.value.trim(); 
      
      if(lastname == ''){
          showError(lastnameEl, 'Last Name cannot be blank.');
      }else{
          showSuccess(lastnameEl);
          valid = true;
      }
      
      return valid; 
  }
  
  function  checkCity(){
      let valid = false;
      const city = cityEl.value.trim(); 
      
      if(city == ''){
          showError(cityEl, 'City cannot be blank.');
      }else{
          showSuccess(cityEl);
          valid = true;
      }

      return valid;
  }
  function  checkCountry(){
      let valid = false;
      const country =  countryEl.value.trim(); 
      
      if(country == ''){
          showError( countryEl, 'Country cannot be blank.');
      }else{
          showSuccess(countryEl);
          valid = true;
      }

      return valid; 
  }
  
  function  checkEmail(){
      let valid = false;
      const email = emailEl .value.trim(); 
      
      if(email == ''){
          showError(emailEl , 'Email cannot be blank.');

      }else if (!isEmailValid(email)){
          showError(emailEl , 'Incorrect email format, you can use letters, numbers & periods');
      }else{
          showSuccess(emailEl);
          valid = true;
      }
      return valid; 
  }

  const isEmailValid = (email) => {
      const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  };

  function  checkPassword(){
      let valid = false;
      const password = passwordEl.value.trim(); 
      if(password == ''){
          showError(passwordEl, 'Password cannot be blank.');
      }
      else if (password.length < 8 ){
          showError(passwordEl, 'Use 8 or more characters');
      }else{
          showSuccess(passwordEl);
          valid = true; 
      }
      return valid; 
  }
  
  function  checkRetypePassword(){
      let valid = false;
      const confirmPassword = confirmPasswordEl.value.trim();
      const password = passwordEl.value.trim();

      
      if(confirmPassword == ''){
          showError(confirmPasswordEl, '');
      }else if(password != confirmPassword){
          showError(confirmPasswordEl, 'Password does not match');
      }else{
          showSuccess(confirmPasswordEl);
          valid = true; 
      }

      return valid; 
  }
  
  const showError = (input, message) => {
      // get the form-field element
      const formField = input.parentElement;
      // add the error class
      formField.classList.remove('success');
      formField.classList.add('error');
  
      // show the error message
      const error = formField.querySelector('small');
      error.textContent = message;
  };
  
  const showSuccess = (input) => {
      // get the form-field element
      const formField = input.parentElement;
  
      // remove the error class
      formField.classList.remove('error');
      formField.classList.add('success');
  
      // hide the error message
      const error = formField.querySelector('small');
      error.textContent = '';
  }
  
  
  form.addEventListener('submit', function (e) {
      // prevent the form from submitting
  
      // validate fields
       let isFirstnameValid = checkFirstName(),
       isLastnameValid =  checkLastName(),
       isCity = checkCity(),
       isCountry = checkCountry(),
       isEmail = checkEmail(),
       isPassword = checkPassword(),
       isRetypedPassword = checkRetypePassword();
       return (isFirstnameValid && isLastnameValid && isCity && isCountry && isEmail && isPassword && isRetypedPassword ? successfulLoginIn() : unSuccessfulLoginIn());
  });
   

  function successfulLoginIn(){
    console.log('Account has been made successful');
    return true; 
  }
  
  function unSuccessfulLoginIn(){
    console.log('Missing requirements!!!');
    return false; 
  }


  const debounce = (fn, delay = 500) => {
      let timeoutId;
      return (...args) => {
          // cancel the previous timer
          if (timeoutId) {
              clearTimeout(timeoutId);
          }
          // setup a new timer
          timeoutId = setTimeout(() => {
              fn.apply(null, args)
          }, delay);
      };
  };

  form.addEventListener('input', debounce(function (e) {
      switch (e.target.id) {
          case 'firstname':
              checkFirstName(); 
              break;
          case 'lastname':
              checkLastName();
              break;
          case 'email': 
              checkEmail(); 
              break;           
          case 'password':
              checkPassword();
              break;
          case 'confirm-password':
              checkRetypePassword();
              break;
          case 'country': 
              checkCountry(); 
              break; 
          case 'city': 
              checkCity(); 
              break;            
      }
  }));
  
  
  
  });
  
  