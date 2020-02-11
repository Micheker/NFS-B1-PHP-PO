<?php
//classAutoLoader.php

function classautoloader($className)
{
  require_once './classes/' . $className . ".php";
}
