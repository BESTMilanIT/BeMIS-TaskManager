<?php

if(isset($_GET['action'])){
    $action=$_GET['action'];
} else {
    echo "<h1>crisi</h1>";
    plugin_dir_path(__FILE__).'partials/pages/main_page.php';
}

if($action=='myTasks'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_myTasks.php';
} elseif($action=='newTask'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_newTask.php';
} elseif($action=='lbgStatus'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_lbgStatus.php';
} elseif($action=='projects'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_projects.php';
} elseif($action=='newProject'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_newProject.php';
} elseif($action=='newEvent'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_newEvent.php';
} elseif($action=='editTask'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editTask.php';
} elseif($action=='editProject'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editProject.php';
} elseif($action=='editEvent'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editEvent.php';
} elseif($action=='deleteTask'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_deleteTask.php';
} elseif($action=='deleteProject'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_deleteProject.php';
} elseif($action=='deleteEvent'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_deleteEvent.php';
} elseif($action=='editProject'){
    plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editProject.php';
} 