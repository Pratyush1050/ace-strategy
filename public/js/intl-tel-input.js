var countryData = window.intlTelInputGlobals.getCountryData(),
  input = document.querySelector("#contact-number"),
  addressDropdown = document.querySelector("#country"),
  errorMsg = document.querySelector("#error-msg");

var iti =intlTelInput(input, {
  hiddenInput: "full_phone",
  initialCountry: 'np'
});


for (var i = 0; i < countryData.length; i++) {
    var country = countryData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.iso2;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown.appendChild(optionNode);
}

addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
    addressDropdown.value = iti.getSelectedCountryData().iso2;
});
  
// listen to the address dropdown for changes
addressDropdown.addEventListener('change', function() {
    iti.setCountry(this.value);
});
// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (!iti.isValidNumber()) {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
      document.getElementById('buyer-submit').disabled = true;
    }else{
      document.getElementById('buyer-submit').disabled = false;
    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
