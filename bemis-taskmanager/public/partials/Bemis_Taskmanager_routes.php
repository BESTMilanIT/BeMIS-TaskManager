<?php

if(isset($_GET['action'])){
    $action=$_GET['action'];
} else {
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_mainPage.php';
}

if($action=='myTasks'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_myTasks.php';
} elseif($action=='newTask'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_newTask.php';
} elseif($action=='lbgStatus'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_lbgStatus.php';
} elseif($action=='projects'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_projects.php';
} elseif($action=='newProject'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_newProject.php';
} elseif($action=='newEvent'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_newEvent.php';
} elseif($action=='editTask'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editTask.php';
} elseif($action=='editProject'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editProject.php';
} elseif($action=='editEvent'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_editEvent.php';
} elseif($action=='deleteTask'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_deleteTask.php';
} elseif($action=='deleteProject'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_deleteProject.php';
} elseif($action=='deleteEvent'){
    include plugin_dir_path(__FILE__).'partials/pages/Bemis_Taskmanager_deleteEvent.php';
}
