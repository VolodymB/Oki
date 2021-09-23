<?php
class ModelCatalogFilter extends Model{
    // Дістаємо групу фільтрів по id
    public function getFilterGroup($filter_group_id) {
        $query = $this->db->query("SELECT `name` FROM `" . DB_PREFIX . "filter_group_description` WHERE `filter_group_id`= '" . (int)$filter_group_id . "' AND `language_id`= '" . (int)$this->config->get('config_language_id') . "'"); 
        $filter_group = $query->row;

        $filters = $this->getFilters($filter_group_id);
        return array(
            'filter_group_id' => $filter_group_id,
            'name' => $filter_group['name'],
            'filters' => $filters
        );
    }

    public function getFilters($filter_group_id) {
        $query = $this->db->query("SELECT fd.`filter_id`,fd.`name`,f.`sort_order` FROM `" . DB_PREFIX . "filter_description` fd LEFT JOIN `" . DB_PREFIX . "filter` f ON fd.`filter_id`=f.`filter_id` WHERE fd.`filter_group_id`= '" . (int)$filter_group_id . "' AND fd.`language_id`= '" . (int)$this->config->get('config_language_id') . "' ORDER BY `sort_order`");

        return $query->rows;
    }

    
}
?>