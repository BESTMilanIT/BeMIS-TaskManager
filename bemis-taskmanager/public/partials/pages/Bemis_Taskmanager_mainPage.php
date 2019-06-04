<div class="bemis-tm-mainpage-main-container">
    <div class="bemis-tm-mainpage-sidebar"><?php include plugin_dir_path(__FILE__).'elements/Bemis_Taskmanager_sideBar.php' ?></div>
    <div class="bemis-tm-mainpage-content">
      <div class="bemis-tm-mainpage-calendar-container">

        <?php echo do_shortcode('[calendar id="54"]')?>
      </div>
      <div class="bemis-tm-mainpage-rightsidebar">
        <ul>
          <li style="padding-bottom: 2em;" class="bemis-tm-sidebar-main-menu-element">
            <i href="https://bemis.bestmilano.it/task-manager-2/newTask" class="material-icons bemis-tm-sidebar-main-menu-icon" >add_circle</i><span>Crea una nuova task <?php echo $_GET['newTask'] ?></span>
          </li>
          <li style="padding-bottom: 2em;" class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Crea un nuovo progetto</span>
          </li>
          <li style="padding-bottom: 2em;" class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Crea un nuovo evento a calendario</span>
          </li>
          <li class="bemis-tm-sidebar-main-menu-element">
            <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Mostra la situazione del gruppo</span>
          </li>
        </ul>
      </div>
    </div>
</div>
