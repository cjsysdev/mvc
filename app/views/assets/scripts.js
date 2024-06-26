if (document.getElementById("loginLink")) {
  document.getElementById("loginLink").addEventListener("click", (e) => {
    route(e, "content");
  });
}

if (document.getElementById("registerLink")) {
  document.getElementById("registerLink").addEventListener("click", (e) => {
    route(e, "content");
  });
}

function formdatas(elementId) {
  const formData = new FormData(elementId);
  const dataObj = {};

  formData.forEach((value, key) => {
    dataObj[key] = value;
  });

  return dataObj;
}

function login(event) {
  event.preventDefault();
  const logData = formdatas(document.getElementById("loginForm") ?? "");

  if (logData["password"] == "") {
    alert("Password Empty");
  } else {
    sendDataToServer(logData, "./user/login");
  }
}

function register(event) {
  event.preventDefault();
  const regData = formdatas(document.getElementById("registerForm"));

  if (regData["password"] == "") {
    alert("Password Empty");
  } else {
    if (regData["password"] !== regData["confirm_password"]) {
      alert("Password doesn't match!");
    } else {
      sendDataToServer(regData, "./user/register");
    }
  }
}

function sendDataToServer(data, url) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      const res = xhr.responseText;
      if (res === "success") {
        window.location.assign("./user/dashboard");
      } else {
        alert(res);
      }
    }
  };

  xhr.send(new URLSearchParams(data));
}
