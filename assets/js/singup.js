const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container-form");
signUpButton.addEventListener("click", () => {
  console.log("Sign Up button clicked");
  container.classList.add("right-panel-active");
  console.log("Added right-panel-active class to container");
});
signInButton.addEventListener("click", () => {
  console.log("Sign In button clicked");
  container.classList.remove("right-panel-active");
  console.log("Removed right-panel-active class from container");
});
