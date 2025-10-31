<?php

if(isset($_COOKIE)) {

	setcookie('visitas', '0', time() - 3600 * 24);}