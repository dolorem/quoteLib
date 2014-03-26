<?php if ($loggedIn): ?>
	<ul class="nav navbar-nav">
        	<li><a href="/index.php/admin">Panel administracyjny</a></li>
		<li><a href="/index.php/logout">Wyloguj się</a></li>
	</ul>
<?php else: ?>
	<ul class="nav navbar-nav">
	        <li><a href="/index.php/login">Zaloguj się</a></li>
        </ul>
<?php endif; ?>
