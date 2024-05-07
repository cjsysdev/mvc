<div id="dashboard">
    hello
</div>

<?= var_dump($_SESSION) ?>

<a id="logout" href="./logout">Logout</a>

<script>
    fetch('./sample_json')
        .then(response => response.json)
        .then(data => {
            console.log(data);
        })
</script>