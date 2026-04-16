<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set("display_errors", 1);
define("INIT_CHECK", true);
require_once __DIR__ . "/lib/Bootstrap.php";
\Bootstrap::start();
ini_set("curl.cainfo", "/etc/ssl/certs/ca-certificates.crt");
ini_set("openssl.cafile", "/etc/ssl/certs/ca-certificates.crt");
require_once __DIR__ . "/router.php";
