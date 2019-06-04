<div class="bemis-tm-mainpage-main-container">
    <div class="bemis-tm-mainpage-sidebar"><?php include plugin_dir_path(__FILE__).'elements/Bemis_Taskmanager_sideBar.php' ?></div>
    <div class="bemis-tm-mainpage-content">
      <div class="bemis-tm-mainpage-calendar-container">

        <?php echo do_shortcode('[calendar id="54"]')?>
      </div>
      <div class="bemis-tm-mainpage-rightsidebar">
        <ul>
          <li style="padding-bottom: 2em;" class="bemis-tm-sidebar-main-menu-element">
            <a href="/task-manager-2?action=newTask">
              <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Crea una nuova task</span>
            </a>
          </li>
          <li style="padding-bottom: 2em;" class="bemis-tm-sidebar-main-menu-element">
            <a href="/task-manager-2?action=newProject">
              <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Crea un nuovo progetto</span>
            </a>
          </li>
          <a href="/task-manager-2?action=newEvent">
            <li style="padding-bottom: 2em;" class="bemis-tm-sidebar-main-menu-element">
          </a>
            <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Crea un nuovo evento a calendario</span>
          </li>
          <li class="bemis-tm-sidebar-main-menu-element">
            <a href="/task-manager-2?action=lbgStatus">
              <i class="material-icons bemis-tm-sidebar-main-menu-icon">add_circle</i><span>Mostra la situazione del gruppo</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
</div>
