const route = (event) => {
  event.preventDefault();
  window.history.pushState({}, "", event.target.href);
  handleLocation();
};

const routes = {
  "/mvc/public/about": "/mvc/app/views/about.html",
  "/mvc/public/user/dashboard": "/mvc/public/user/dashboard",
  "/mvc/public/user/logout": "/mvc/public/user/logout",
};

const handleLocation = async () => {
  const path = window.location.pathname;
  const routePath = routes[path];
  if (routePath) {
    const html = await fetch(routePath).then((data) => data.text());
    const main = document.getElementById("main");
    main.innerHTML = html;
  } else {
    console.error("Route not found:", path);
  }
};

window.onpopstate = handleLocation;
window.route = route;

handleLocation();
