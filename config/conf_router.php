<?php
return array(
	'addmision' => 'Add/Index', //Контролер добавления задач

	'adminpanel/create' => 'Panel/Create',
	'adminpanel/update/([0-9]+)' => 'Panel/Update/$1',
	'adminpanel/delete/([0-9]+)' => 'Panel/Delete/$1',

	'adminpanel' => 'Panel/Index', //Панель админа
	'logout' => 'Admin/Logout', //Вход в панель
	'admin' => 'Admin/Index', //входв в админку
	
	'sortByName/([0-9]+)/page-([0-9]+)' => 'Sort/SortNamePage/$1/$2',
	'sortByName/([0-9]+)' => 'Sort/SortByName/$1',

	'sortByEmail/([0-9]+)/page-([0-9]+)' => 'Sort/SortEmailPage/$1/$2',
	'sortByEmail/([0-9]+)' => 'Sort/SortByEmail/$1',

	'sortByComplete/([0-9]+)/page-([0-9]+)' => 'Sort/SortCompletePage/$1/$2',
	'sortByComplete/([0-9]+)' => 'Sort/SortByComplete/$1',

	'page-([0-9]+)' => 'Home/Page/$1', //Страница
	
	'' => 'Home/Index', //Главная страниц со всеми задачами
);
?>