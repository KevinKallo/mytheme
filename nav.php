<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <h2 class="is-size-2"><?php bloginfo('name') ?></h2>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
        <?php foreach (get_nav_items() as $item): ?>
            <a class="navbar-item" href="<?=$item->url?>">
                    <?=$item->title?>
            </a>
            <?php endforeach;?>
      </div>
    </div>
</nav>