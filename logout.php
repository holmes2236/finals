<?php

session_start();

session_unset();

session_destroy();

header("Location: /iwp_proje/firstpage.php");