<?php
    
    error_reporting(-1);
    ini_set('display_errors', 1);  
    
    $root = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
    $root .= '/fitness';
    $config['base_url'] = $root; 
    $config['app-name'] = " MY FITNESS APP";