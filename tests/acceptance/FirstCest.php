<?php

class FirstCest
{
    public function test1(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->Click("Мой профиль");
        $I->click(['class' => 'cm-dialog-opener']);
        $I->fillField(['id' => 'login_popup4'], 'customer@example.com');
        $I->fillField(['id' => 'psw_popup4'], 'qawsed1');
        $I->click("button[type=submit]");
        $I->Click("Мой профиль");
        $I->Click("Отделы");
        $I->see("Отдел по работе с клиентами");
        $I->see("Отдел по работе с персоналом");
        $I->see("отдел продаж");
        $I->makeHtmlSnapshot();
    }

    public function test2(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->Click("Мой профиль");
        $I->click(['class' => 'cm-dialog-opener']);
        $I->fillField(['id' => 'login_popup4'], 'customer@example.com');
        $I->fillField(['id' => 'psw_popup4'], 'qawsed1');
        $I->click("button[type=submit]");
        $I->Click("Мой профиль");
        $I->Click("Отделы");
        $I->Click("Отдел по работе с клиентами");
        $I->see("Тот(та) самый(ая): Кира Аксенова");
        $I->see("Тот(та) самый(ая): Виктор Ушаков");
        $I->makeHtmlSnapshot();
    }

    public function test3(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->Click("Мой профиль");
        $I->click(['class' => 'cm-dialog-opener']);
        $I->fillField(['id' => 'login_popup4'], 'customer@example.com');
        $I->fillField(['id' => 'psw_popup4'], 'qawsed1');
        $I->click("button[type=submit]");
        $I->Click("Мой профиль");
        $I->Click("Отделы");
        $I->Click("Отдел по работе с персоналом");
        $I->see("Тот(та) самый(ая): Customer Customer");
        $I->see("Тот(та) самый(ая): Виктор Ушаков");
        $I->makeHtmlSnapshot();
    }

    public function test4(AcceptanceTester $I)
    {
        $I->amOnPage('/');//переходим на сайт
        $I->Click("Мой профиль");
        $I->click(['class' => 'cm-dialog-opener']);
        $I->fillField(['id' => 'login_popup4'], 'customer@example.com');
        $I->fillField(['id' => 'psw_popup4'], 'qawsed1');
        $I->click("button[type=submit]");
        $I->Click("Мой профиль");
        $I->Click("Отделы");
        $I->Click("отдел продаж");
        $I->see("Тот(та) самый(ая): Customer Customer");
        $I->see("Тот(та) самый(ая): Кира Аксенова");
        $I->makeHtmlSnapshot();
    }

    public function test5(AcceptanceTester $I)
    {
        $I->amOnPage('admin.php');//переходим на сайт
        $I->fillField(['id' => 'username'], 'hotmac2004@gmail.com');
        $I->fillField(['id' => 'password'], 'CdC]ANk6LteE@c/t');
        $I->click("input[type=submit]");
        $I->click("Покупатели");
        $I->click("Отделы");
        $I->Click(['class' => 'cm-tooltip']);
        $I->see("Названи");
        $I->see("Изображение");
        $I->see("Описание:");
        $I->see("Дата создания");
        $I->see("Администратор");
        $I->see("Персонал");
        $I->makeHtmlSnapshot();
    }
}
