<?php
/*-------------------------------------------------------
*
*   Plugin name:    Topic Similar
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/


/**
 * Обработка блока топиков по тегам
 *
 */
class PluginTopicsimilar_BlockSimilar extends Block
{

    /**
     * Запуск обработки
     */
    public function Exec()
    {
        $aTags = [];
        $aExcludeTopic = [];
        if ($oTopic = $this->GetParam('topic')) {
            $aTags = $oTopic->getTagsArray();
            $aExcludeTopic[] = $oTopic->getId();
        } else {
            $aTags = $this->GetParam('tags');
        }
        /**
         * Топики по тегам
         */
        $aSimilarTopics = $this->Topic_GetTopicsSimilarByTags((array)$aTags, $aExcludeTopic, Config::Get('plugin.topicsimilar.block.row'));
        $this->Viewer_Assign('topics', $aSimilarTopics, true);
        /**
         * Устанавливаем шаблон
         */
        $this->SetTemplate('component@topicsimilar:goweb-topic.block.similar');
    }

}
