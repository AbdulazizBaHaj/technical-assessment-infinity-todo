<?php
require_once '../../config/config.php';

if ($_GET['checklist_id']) {
	$checklist_id = $_GET['checklist_id'];
	$id = $_GET['id'];
	$name = $_GET['nameGroup'];

	$link->query("DELETE FROM `checklists` WHERE `id` = $checklist_id");
	header("location: ../group/showGroup.php?id={$id}&nameGroup={$name}");
}
