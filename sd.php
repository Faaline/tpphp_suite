<?php

session_start();
  session_destroy();
  header('refresh:4;url=log.php');
