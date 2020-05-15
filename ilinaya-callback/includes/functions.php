<?php

add_action('admin_menu', 'addAdminLink' );
add_action('wp_head', 'injectWidget');


function injectWidget() {
    ?>
    <script>
        alert('Page is loading...');
    </script>
    <?php
}

function addAdminLink()
{
    add_menu_page(
        'Ilinaya CallBack', // Название страниц (Title)
        'Ilinaya CallBack', // Текст ссылки в меню
        'manage_options',
        'ilinaya-callback/includes/admin-page.php'
    );
}

