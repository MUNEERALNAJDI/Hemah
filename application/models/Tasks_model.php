<?php

class Tasks_model extends CI_Model{

    
    function get_active_tasks($employee_id) {
       $query=$this->db->query("SELECT tasks.id, name, STATUS.status status_name, duration_time, need_statistics "
               . "FROM Hemah_tasks tasks join Hemah_status STATUS on tasks.status_id=STATUS.id WHERE status_id = 1 "
               . "and worker_id = $employee_id");

       return $query->result();
    }
    
    function get_detail_task($task_id) {
       $query=$this->db->query("SELECT tasks.id, tasks.name, tasks.assigned_time, tasks.duration_time, tasks.end_date,"
               . " tasks.applied_time, tasks.need_statistics, concat(monitor.first_name,' ',monitor.last_name) monitor_name, "
               . "status.status status_name, projects.name project_name, notes FROM Hemah_tasks tasks JOIN Hemah_status "
               . "STATUS ON tasks.status_id = STATUS.id JOIN Hemah_employees monitor ON tasks.monitor_id = monitor.id "
               . "JOIN Hemah_projects projects ON tasks.project_id = projects.id where tasks.id = $task_id");

       return $query->result();
    }

}