<?php
 
class gldtn_GARS_ControllerPublic_Forum extends XFCP_gldtn_GARS_ControllerPublic_Forum
{
    protected function _getDefaultThreadSort(array $forum)
    {
        if in_array($forum['node_id'], $xenOptions.gars_strainType_nodeId) OR in_array($forum['node_id'], $xenOptions.gars_articleType_nodeId) {
            return array('title', 'dsc');
        }
        return array('last_post_date', 'desc');
    }
}