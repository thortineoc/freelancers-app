<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('see Laravel links on homepage');

$I->amOnPage('/');

//$I->seeInTitle('Laravel');  //company name xD

$I->seeLink("Login", "/login");
$I->seeLink("Register", "/register");
$I->seeLink("Orders", "/orders");




