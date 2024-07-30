<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div>
    <p><b>Разработчик сайта:</b> <?=GetMessage("DEVELOPER_NAME") ?></p>
    <p><b>Сайт:</b> <a href="<?= GetMessage("DEVELOPER_ADDRESS") ?>"><?= GetMessage("DEVELOPER_ADDRESS") ?></a></p>
    <p><b>Email:</b> <a href="mailto:<?=GetMessage("DEVELOPER_EMAIL") ?>"><?=GetMessage("DEVELOPER_EMAIL") ?></a></p>
    <p><b>Телефон для связи:</b> <?=GetMessage("DEVELOPER_PHONE") ?></p>
    <p><b>Telegram:</b> <a href="https://t.me/<?= GetMessage("DEVELOPER_TELEGRAM") ?>"><?=GetMessage("DEVELOPER_TELEGRAM") ?></a></p>
</div>