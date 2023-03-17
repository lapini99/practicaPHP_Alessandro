<?php
session_start();
session_destroy();
header("Refresh:0; url=index.php"); //reenvio al index y refresco la página para aplicar los
