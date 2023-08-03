<?php

$routeList = [];

class Route {
  public static function add($routeName, $pointControllerAction){
    $GLOBALS['routeList'][] = [
      'name' => $routeName,
      'action' => $pointControllerAction
    ];
  }

  public static function run(){
    $request = $_SERVER['REQUEST_URI'];
    foreach($GLOBALS['routeList'] as $route){
      if($route['name'] == $request){
        return $route['action'];
      }else if(strpos($request, 'todoList/?') !== false){
        if (isset($_GET['option'])) {
          $request = $_GET['option'];
          if ($request == 'editNameView') {
            return 'listController@editNameViewAction';
          } else if ($request == 'editName') {
            return 'listController@editNameAction';
          } else if ($request == 'deleteList') {
            return 'listController@deleteListAction';
          } else if ($request == 'addTask') {
            return 'taskController@addTaskAction';
          } else if ($request == 'deleteTask') {
            return 'taskController@deleteTaskAction';
          } else if ($request == 'editTaskView') {
            return 'taskController@editTaskViewAction';
          } else if ($request == 'editTask') {
            return 'taskController@editTaskAction';
          } 
          
          else if ($request == 'changeStatus') {
            return 'taskController@changeStatusAction';
          } else {
            return 'listController@todoListAction';
          }



        } else {
          return 'listController@todoListAction';
        
        }
      }
    }
  }
}
