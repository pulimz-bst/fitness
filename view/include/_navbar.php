<nav class="navbar navbar-dark bg-dark fixed-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php $config['base_url']?>"><?php echo $config['app-name'];?></a> 
  <ul class="navbar-nav px-3">
    <?php if(isset($_SESSION['user'])):  ?>
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo $config['base_url']?>/controller/logout.php">Sign out</a>
        </li>
    <?php endif;  ?>
  </ul>
</nav>