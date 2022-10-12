<?php

$game = newGame();

//require("Game.php");

require_once("Game.php") // almost always use. *(EXAM QUESTION) Diff between two - require will produce a fatal error if file not found. Require once will still run according if file not found and produce message.

include("Game.php"); //include usually used for something optional - meaning application doesn't break without it such as a social media page (facebook.html)

//include_once("facebook.html") could also be used 

//autoload.php - web server looks for file in another file with list of require_once methods. Don't autoload with session starts for everything

