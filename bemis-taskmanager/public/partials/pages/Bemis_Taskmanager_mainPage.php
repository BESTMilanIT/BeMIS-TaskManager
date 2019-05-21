<?php
?>

<div class="bemis-tm-mainpage-main-container">
    <div class="bemis-tm-mainpage-sidebar"><?php include plugin_dir_path(__FILE__).'elements/Bemis_Taskmanager_sideBar.php' ?></div>
    <div class="bemis-tm-mainpage-content">
      <div class="bemis-tm-mainpage-calendar-container">
        <?php do_shortcode('[calendar id="54"]')?>
      </div>
      <div>
        <ul>
          <li class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons">add_circle</i><span>Crea una nuova task</span>
          </li>
          <li class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons">add_circle</i><span>Crea un nuovo progetto</span>
          </li>
          <li class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons">add_circle</i><span>Crea un nuovo evento a calendario</span>
          </li>
          <li class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons">add_circle</i><span>Mostra la situazione del gruppo</span>
          </li>
        </ul>
      </div>
    </div>
</div>

<?php
