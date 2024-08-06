function login() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Perform login validation logic here
  // For this example, let's simply display the entered username and password in the console
  console.log("Username: " + username);
  console.log("Password: " + password);

  // You can redirect to another page after successful login using window.location.href = "url";
}
