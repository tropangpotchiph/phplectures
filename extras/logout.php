<?php
session_start();

//destroy the session
session_destroy();
header('Location: /lectures/13_sessions.php');