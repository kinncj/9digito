<?php
spl_autoload_register(function($className)
{
    require_once dirname(__FILE__).'/../../'.str_replace(array("\\","_"),"/",$className).".php";
});
