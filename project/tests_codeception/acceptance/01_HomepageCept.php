<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('see Laravel links on homepage');

$I->amOnPage('/');

$I->seeInTitle('Main Page');
// należy dodać testy akceptacyjne do main pagea
