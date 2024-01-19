<?php
require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

if (preg_match('/.*\.(?:gif|png|jpeg|jpg|svg|ico|mp3|mp4|webm|js|css)$/', $_SERVER['REQUEST_URI'])) {
    return false;
} else {
    require_once 'index.php';
}
