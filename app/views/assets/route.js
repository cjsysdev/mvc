const route = (event, id) => {
  event.preventDefault();
  const path = event.target.href.replace(window.location.origin, "");
  window.history.pushState({}, "", path);
  handleLocation(id);
};

const routes = [
  "/mvc/public/user/login_page",
  "/mvc/public/user/register_page",
  "/mvc/public/user/about",
  "/mvc/public/user/dashboard",
  "/mvc/public/user/logout",
];

async function handleLocation(id) {
  const path = window.location.pathname;
  if (routes.includes(path)) {
    const html = await fetch(path).then((data) => data.text());
    const main = document.getElementById(id);
    main.innerHTML = html;
  } else {
    console.error("Route not found:", path);
  }
}

window.onpopstate = handleLocation;
window.route = route;

handleLocation();
