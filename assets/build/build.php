<?php

exec('php ../js/run.php > js/uuid.min.js');
exec('sass ../scss/uuid.scss css/uuid.min.css --style compressed');
