const formWrapper = document.querySelector(".form-wrapper");
const actualForm = document.querySelector(".actual-form");
const inputFields = document.querySelectorAll("input");
const numberField = document.querySelector("#ph-number");
const emailField = document.querySelector("#email-id");
const activedashBtn = document.querySelector(".card-button");
const closeBtn = document.querySelector(".closebody");
const cancelBtn = document.querySelector(".cancel");
const activateBtn = document.querySelector(".activate");
const numberError = document.querySelector(".number-error");
const emailError = document.querySelector(".email-error");
let inputNumber;
let inputEmail;
activedashBtn.addEventListener("click", (e) => {
  e.stopPropagation();

  formWrapper.classList.add("active");
  actualForm.classList.add("active");
});
closeBtn.addEventListener("click", (e) => {
  e.preventDefault();
  removeformSlide();
});
cancelBtn.addEventListener("click", (e) => {
  e.preventDefault();
  removeformSlide();
});
activateBtn.addEventListener("click", (e) => {
  e.preventDefault();
  removeformSlide();
});
numberField.addEventListener("input", updateNumberInput);
emailField.addEventListener("input", updateEmailInput);

// numberField.addEventListener("ends",()=>{
//if(inputNumber.function(0,3)=== "+91" && inputNumber.lenght === 13){
//  const numberCheckContainer=document.createElement("div");
// div.classList.add("number-check-box")
//numberCheckContainer.innerHTML=`<i class="fas-fa-tick ">`
// }
// emailField.addEventListener("ends",()=>{
//if(inputEmail.contains @ && followed by some words and.com ){
//  const emailCheckContainer=document.createElement("div");
// div.classList.add("email-check-box")
//emailCheckContainer.innerHTML=`<i class="fas-fa-tick ">`
// }

function updateNumberInput(e) {
  inputNumber = e.target.value;
  console.log(inputNumber);
  let phoneno = /^\+?^([0]|\+91)?[-. ]?([0-9]{5})[-. ]?([0-9]{5})$/;

  if (!inputNumber.match(phoneno)) {
    numberError.innerHTML = `<i class="fa-solid fa-thumbs-down red"></i>`;
  } else {
    numberError.innerHTML = `<i class="fa-solid fa-thumbs-up green"></i>`;
  }
}
function updateEmailInput(e) {
  inputEmail = e.target.value;
  console.log(inputEmail);
  let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!inputEmail.match(mailformat)) {
    emailError.innerHTML = `<i class="fa-solid fa-thumbs-down red"></i>`;
  } else {
    emailError.innerHTML = `<i class="fa-solid fa-thumbs-up green"></i>`;
  }
}
function removeformSlide() {
  setTimeout(() => {
    formWrapper.classList.remove("active");
  }, 500);
  inputFields.forEach((input) => {
    input.value = "";
  });
  emailError.innerHTML = "";
  numberError.innerHTML = "";
  actualForm.classList.remove("active");
}
