<?php
require_once '../../config/config.php';

if ($_POST['task_id'] != "") {
	$task_id = $_POST['task_id'];
	$checklist_id = $_POST['checklist_id'];
	$task = $_POST['nameChecklist'];

	$link->query("DELETE FROM `tasks` WHERE `id` = $task_id");
	header("location: ../checklist/showChecklist.php?id={$checklist_id}&nameChecklist={$task}");
}
