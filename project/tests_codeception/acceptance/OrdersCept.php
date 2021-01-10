<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('browse and create orders');

/*$I->amOnPage('/orders');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');*/

$I->amOnPage('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');
$I->amOnPage('/orders');

$I->seeCurrentUrlEquals('/orders');

$I->see('new_order1');
$I->seeLink('Create new...', '/myorders/create');
$I->click('Create new...');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->fillField('title', 'Grafik');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->seeInField('title', 'Grafik');
$I->fillField('payment', '100$');
$I->click('Create');

$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->seeInField('title', 'DevOps');
$I->seeInField('payment', '100$');
$I->fillField('description', 'Needed: someone who can make photo editor with QTCreator.');
$I->fillField('deadline', '2021-02-02 00:00');
$I->click('Create');

$I->seeInDatabase('orders', ['title' => 'DevOps', 'payment' => '100$', 'deadline' => '2021-02-02 00:00']);


