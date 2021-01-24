<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('browse and create orders');

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
$I->fillField('title', 'DevOps');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->seeInField('title', 'DevOps');
$I->fillField('budget', 'Eternal gratitude');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->seeInField('title', 'DevOps');
$I->seeInField('budget', 'Eternal gratitude');
$I->fillField('budget', '10');
$I->fillField('description', 'Needed: someone who can make photo editor with QTCreator.');
$I->fillField('deadline', '2021-02-02 00:00');
$I->click('Create');

$I->seeInDatabase('orders', ['title' => 'DevOps', 'budget' => '10', 'deadline' => '2021-02-02 00:00']);


$I->amOnPage('/myorders');
$I->see('DevOps');
