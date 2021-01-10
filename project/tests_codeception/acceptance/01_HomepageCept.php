<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('see Laravel links on homepage');

$I->amOnPage('/');

//$I->seeInTitle('Laravel');  //company name xD

$I->seeLink("Login", "localhost:8888");
$I->seeLink("Register", "https://laracasts.com");
$I->seeLink("Orders", "https://forge.laravel.com");




