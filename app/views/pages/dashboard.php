<div id="dashboard">
    hello
</div>

<?= var_dump($_SESSION) ?>

<a id="dashboardLink" href="<?= $this->base_url() ?>/user/dashboard" onclick="route(event,'main')">Home</a>
<a id="aboutLink" href="<?= $this->base_url() ?>/user/about" onclick="route(event,'main')">About</a>

<a href="<?= $this->base_url() ?>/user/logout">Logout</a>