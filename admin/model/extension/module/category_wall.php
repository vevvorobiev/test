<?php
class ModelExtensionModuleCategoryWall extends Model {

	public function getParentCategories() {
		$query = "SELECT * FROM " . DB_PREFIX . "category c";
		$query .= " LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id)";
		$query .= " LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id)";
		$query .= " WHERE c.parent_id = '0' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1'";
		$query .= " ORDER BY c.sort_order, LCASE(cd.name)";

		return $this->db->query($query)->rows;
	}

	public function getCategoriesByIds(array $ids) {
		$ids_string = implode(",", array_map('intval', $ids));
		
		$query = "SELECT * FROM " . DB_PREFIX . "category c";
		$query .= " LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id)";
		$query .= " LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id)";
		$query .= " WHERE c.category_id IN (" . $ids_string . ") AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1'";
		$query .= " ORDER BY c.sort_order, LCASE(cd.name)";

		return $this->db->query($query)->rows;
	}
}
