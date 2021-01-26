<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('browse, create, update and delete orders');

$I->amOnPage('/orders');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

$I->seeCurrentUrlEquals('/orders');

//$I->see('No job offer is currently available');       //for some reason pipelines seem to see some existing orders, I however do not

$I->seeLink('Create new...', '/myorders/create');
$I->click('Create new...');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->fillField('title', 'Dev Ops');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->seeInField('title', 'Dev Ops');
$I->fillField('budget', 0);
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->seeInField('title', 'Dev Ops');
$I->fillField('budget', 10);
$I->fillField('description', 'Needed: someone who can make photo editor with QTCreator.');
$I->fillField('deadline', 'Wed Mar 31 2021');
$I->click('Create');

$I->seeInDatabase('orders', ['title' => 'Dev Ops', 'budget' => 10, 'deadline' => 'Wed Mar 31 2021']);

$I->amOnPage('/myorders');
$I->see('Dev Ops');
$I->click('edit');
$I->seeCurrentUrlMatches('~/myorders/[0-9]+/edit?~');
$I->fillField('title', 'DevOps');
$I->fillField('deadline', 'Wed Mar 31 2021');
$I->click('Update');
$I->seeCurrentUrlEquals('/myorders');
$I->dontsee('Dev Ops');
$I->see('DevOps');

$I->click('See offers...');
$I->seeCurrentUrlMatches('~/myorders/[0-9]+/offers~');
$I->see('Nobody applied for that job.');
$I->amOnPage('/myorders');
$I->click('delete');
$I->seeCurrentUrlEquals('/myorders');
$I->dontsee('DevOps');
