<div class="bemis-tm-mainpage-main-container">
  <!--sidebar needs always to be there-->
  <div class="bemis-tm-mainpage-sidebar"><?php include plugin_dir_path(__FILE__).'elements/Bemis_Taskmanager_sideBar.php' ?></div>

  <div class="bemis-tm-mainpage-rightsidebar">
    <ul>
      <li class="bemis-tm-form-element-container">
        <div>
          <label for="input-task-name" class="mdc-floating-label">Name</label><input id="input-task-name"class="mdc-text-field__input" type="text" placeholder="Type a task name... " aria-label="Task Name"></input>
        </div>
      </li>
      <li class="bemis-tm-form-element-container">
        <label>Projects</label>
      </li>
    </ul>
  </div>
</div>
