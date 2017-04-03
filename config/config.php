<?php
/*-------------------------------------------------------
*
*   Plugin name:    Topic Similar
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/


return [
    /**
     * Отображать блок в сайдбаре, иначе ячейке контента
     *   возможные значения:
     *   - comments_before -- перед комментариями
     *   - comments_after  -- после комментариев
     *   - right  -- отображение в сайдбаре сайта
     */
    'position' => 'comments_before',
    /**
     * Настройка блока
     */
    'block' => [
        'row' => 5,         // кол-во выводимыз записей
        'priority' => 300   // приоритет блока
    ],

];
