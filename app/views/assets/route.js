const route = (event, id) => {
  event.preventDefault();
  const path = event.target.href.replace(window.location.origin, "");
  window.history.pushState({}, "", path);
  handleLocation(id);
};

const routes = [
  {
    url: "/mvc/public/login",
    path: "/mvc/app/views/pages/login.php",
  },
  {
    url: "/mvc/public/register",
    path: "/mvc/app/views/pages/register.php",
  },
  {
    url: "/mvc/public/user/dashboard",
    path: "/mvc/public/user/dashboard",
  },
  {
    url: "/mvc/public/user/about",
    path: "/mvc/public/user/about",
  },
];

async function handleLocation(id) {
  const path = window.location.pathname;
  const route = routes.find((route) => route.url === path);

  if (route) {
    const html = await fetch(route.path).then((data) => data.text());
    const main = document.getElementById(id);
    main.innerHTML = html;
  } else {
    console.error("Route not found:", path);
  }
}

window.onpopstate = handleLocation;
window.route = route;

handleLocation();
