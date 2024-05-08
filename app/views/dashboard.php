<div id="dashboard">
    hello
</div>

<?= var_dump($_SESSION) ?>

<a href="/mvc/public/user/dashboard" onclick="route(event)">Home</a>
<a href="/mvc/public/about" onclick="route(event)">About</a>

<a href="/mvc/public/user/logout">Logout</a>

<script>
    fetch('./sample_json')
        .then(response => response.json)
        .then(data => {
            console.log(data);
        })
</script>