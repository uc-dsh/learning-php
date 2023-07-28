<?php
echo "<pre>";
echo date("Y/m/d", time() + 3 * 86400) . "<br />";
echo date_default_timezone_get();
date_default_timezone_set("Asia/Kolkata");
print_r(date_parse(date("d/m/Y H:i:s")));
echo "</pre>";
