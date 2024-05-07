const logLinkId = document.getElementById("loginLink");
const regLinkId = document.getElementById("registerLink");

const logFormId = document.getElementById("loginForm");
const regFormId = document.getElementById("registerForm");

function toggleForms(showLoginForm) {
  if (showLoginForm) {
    logFormId.hidden = false;
    regFormId.hidden = true;
    logLinkId.style.color = "aqua";
    regLinkId.style.color = "aliceblue";
  } else {
    logFormId.hidden = true;
    regFormId.hidden = false;
    logLinkId.style.color = "aliceblue";
    regLinkId.style.color = "aqua";
  }
}
if (logLinkId) {
  logLinkId.addEventListener("click", (e) => {
    e.preventDefault();
    toggleForms(true);
  });
}

if (regFormId) {
  regLinkId.addEventListener("click", (e) => {
    e.preventDefault();
    toggleForms(false);
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
if (logFormId) {
  logFormId.addEventListener("submit", (event) => {
    event.preventDefault();
    const logData = formdatas(logFormId);

    if (logData["password"] == "") {
      alert("Password Empty");
    } else {
      sendDataToServer(logData, "./user/login");
    }
  });
}

if (regFormId) {
  regFormId.addEventListener("submit", (event) => {
    event.preventDefault();
    const regData = formdatas(regFormId);

    if (regData["password"] == "") {
      alert("Password Empty");
    } else {
      if (regData["password"] !== regData["confirm_password"]) {
        alert("Password doesn't match!");
      } else {
        sendDataToServer(regData, "./user/register");
      }
    }
  });
}

function sendDataToServer(data, url) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      const res = xhr.responseText;
      if (res === "success") {
        window.location = "./user/dashboard";
      }
    }
  };

  xhr.send(new URLSearchParams(data));
}
