<div id="nav-menu" class="default-margin">
    <nav>
        <ul>
            <li>
                <a id="dashboardLink" href="<?= $this->base_url() ?>/user/dashboard" onclick="route(event,'main')">Home</a>
            </li>
            <li>
                <a id="aboutLink" href="<?= $this->base_url() ?>/about" onclick="route(event,'dashboard')">About</a>
            </li>
            <li>
                <a href="<?= $this->base_url() ?>/user/logout">Logout</a>
            </li>
        </ul>
    </nav>
</div>