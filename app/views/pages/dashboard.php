<div id="dashboard">
    hello
</div>

<?= var_dump($_SESSION) ?>

<a href="<?= $this->base_url() ?>/user/dashboard" onclick="route(event)">Home</a>
<a href="<?= $this->base_url() ?>/user/about" onclick="route(event)">About</a>

<a href="<?= $this->base_url() ?>/user/logout">Logout</a>