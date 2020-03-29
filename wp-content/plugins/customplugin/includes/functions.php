<?php
/*
 * Добавляем новое меню в Админ Консоль
 */

add_action( 'admin_menu', 'CP_AddAdminLink' ); 

// Добавляем новую ссылку в меню Админ Консоли
function CP_AddAdminLink() {
    add_menu_page(
        'Расписание',    
        'Расписание',    
        'manage_options',
        'customplugin/includes/page.php'
    );
}

