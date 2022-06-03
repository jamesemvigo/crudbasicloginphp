const formWrapper = document.querySelector(".form-wrapper");
const actualForm = document.querySelector(".actual-form");
const inputFields = document.querySelectorAll("input");
const numberField = document.querySelector("#ph-number");
const emailField = document.querySelector("#ph-number");
const activedashBtn = document.querySelector(".card-button");
const closeBtn = document.querySelector(".closebody");
const cancelBtn = document.querySelector(".cancel");
const activateBtn = document.querySelector(".activate");
let inputNumber;
let inputEmail;
activedashBtn.addEventListener("click", (e) => {
  e.stopPropagation();

  formWrapper.classList.add("active");
  actualForm.classList.add("active");
});
closeBtn.addEventListener("click", (e) => {
  console.log(e);
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
}
function updateEmailInput(e) {
  inputEmail = e.target.value;
}
function removeformSlide() {
  setTimeout(() => {
    formWrapper.classList.remove("active");
  }, 500);
  inputFields.forEach((input) => {
    input.value = "";
  });
  actualForm.classList.remove("active");
}
