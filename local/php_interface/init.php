<?php

//get constants
if(is_file(__DIR__ . '/include/constants.php'))
    require_once __DIR__ . '/include/constants.php';
//get handlers
if(is_file(__DIR__ . '/include/handlers.php'))
    require_once __DIR__ . '/include/handlers.php';
//get iblock helper
if(is_file(__DIR__ . '/include/LIBlock.php'))
    require_once __DIR__ . '/include/LIBlock.php';

//get overrided classes
if(is_file(__DIR__ . '/include/classes.php'))
    require_once __DIR__ . '/include/classes.php';