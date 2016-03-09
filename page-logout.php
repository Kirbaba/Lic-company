<?php
wp_logout();
\lib\helpers\Header::redirect("/enter/", true, 302);