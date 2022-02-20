<?php $mainPageId = 26; ?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta name="viewport"  content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php
    wp_body_open();
    ?>
    <div class="header-menu">
        <div class="logo">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.681in" height="0.472in">
                <image x="0px" y="0px" width="121px" height="34px"
                       xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAAAiCAQAAADRur72AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAhEXJRKcjyX/AAACiElEQVRo3t2Z3ZWjMAyFzXZAC7RAC2wJtJAW3EKmBKaETAlsCZkSSAmkhLsP7E4kx7It2Tn7ozcO5vJdJIORHTwecXKGwACPhahc4DEqNSZ4rETjCo/5RRx1ljExUDDoQmR47JDCv4CjxjJ7prFY0Wczc81obPmKUXJYLaPPwh7AQ0JjTOT3EXvKtIHDbLnkRsfNhExjKDJ8mB4actgs4xwIfr0oMDzNzbUQ9qHRw2Mr0rBwWCxjYlLX5xzgwkZEdNl9o7M+sDM14zBZZp8TYQy92RY5TzNwKchhZIyRQ285eLbCLEPPSjNQxkzO7eJs79mD6dtwfCvLKwtaYm/dLT6ou7s34RrnnJuZxl3UeE9oWDkMWaZPPv35EHNUrEGrIViWmDm0ljHm58/XWDqPJkFjL3nMB3obDn1h0znzmRlLz4+Cxo/SGwflb+aos3zLjKWQvVGjOYfeMkW/Z8behOucQqM5R51lTUhLxhaWVRyWj9Q/Hn+dZZwgxfKfWn596C1b5570VrXOSTNHneUc7iBc19qyikNvmWZryIyVPiQajeYcdZZzXSl6nq6A6Ior+Fno3jsS7nt7DrXl7pPka0wv55kdYrm7E40+9vP/Sg7LG5v+0KV+RGZSUB/BCplqFDZuW3FYLNOyPCU6mF64JjyetE36So76RlC8p8F6y1tGQ2zbss7HktQo5/hj7T6uscdnNOt+LY04GjV1z7+RFU3dUGOlfQ/MTzpLI46guZoKVp6Klnl92/0IX6Xx4DBb7sWNr0LDxRpHnKs0xA0ahWXnWmzDRUozFnv6nV6zDae07BzGBputY/CSCfNT8N1WcdRZ/lVafCt71W+pOwcfkGzw8Pkq0XP8BEMz/L05/NYGAAAAAElFTkSuQmCC"/>
            </svg>
        </div>
        <ul class="menu-items">
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_1', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
        </ul>
        <div class="burger-menu" onclick="openMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
    <div class="mobile-menu">
        <ul class="menu-items">
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_1', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
            <li><a href="<?=get_field('link1', $mainPageId);?>"><?=get_field('item_2', $mainPageId);?></a></li>
        </ul>
    </div>
</header>
