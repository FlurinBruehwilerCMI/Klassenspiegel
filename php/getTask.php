<?php

require "database/DatabaseAdapter.php";

session_start();

if (!isset($_SESSION['email'])) {
    echo "401";
    exit();
}

$db = new DatabaseAdapter();

$task = $db->getStringsFromTable("tasks", new Key("id", $_POST['id']));
$date = date("j. n. Y", $task['date']) . ' um ' . date('G:i', $task['date']);

echo
"<div class='modal-header'>
                <h5 class='modal-title' id='modal-task-title'>{$task['title']}</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>Beschreibung:<br>" . nl2br($task['description']) . "</p>
                <p>Fällig am: {$date}</p>
                <p>Fach: {$task['subject']}</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Schliessen</button>
            </div>";
