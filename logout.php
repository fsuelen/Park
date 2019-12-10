<?php

session_start();
session_destroy();
header('Location: tela_de_loguin.php');
exite();

