<?php
class ControllerExtensionModuleCategoryWall extends Controller {

	public function index($setting) {
		$this->load->language('extension/module/category_wall');

		$this->load->model('catalog/category');
		$this->load->model('extension/module/category_wall');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$data['title'] = $setting['module_category_wall_title'][$this->config->get('config_language_id')]['title'];

		$category_id = 0;
		$limit = $setting['module_category_wall_subcategory_limit'];
		$length = $setting['module_category_wall_description_length'];
		$type = $setting['module_category_wall_categories_type'];

		$ids = $type == 'all' ? [] : ($type == 'selected'
			? $setting['module_category_wall_categories_selected']
			: $setting['module_category_wall_categories_custom']);
		
		$categories = [];
		switch ($type) {
			case 'selected':
				$categories = $this->model_extension_module_category_wall->getCategoriesByIds($ids);
				break;
			case 'custom':
				$categories = $this->model_extension_module_category_wall->getCategoriesByIds($ids);
				break;
			default:
				$categories = $this->model_extension_module_category_wall->getCategories();
				break;
		}

		$data['height_status'] = $setting['module_category_wall_height_status'];
		$data['image_status'] = $setting['module_category_wall_image_status'];
		$data['subcategory_collapse_status'] = $setting['module_category_wall_subcategory_collapse_status'];

		foreach ($categories as $category) {
			// Level 2
			$children_data = [];

			if ($setting['module_category_wall_subcategory_status']) {
				$children = $this->model_extension_module_category_wall->getCategories($category['category_id'], $limit);

				foreach ($children as $child) {
					$children_data[] = [
						'category_id' => $child['category_id'],
						'name' => $child['name'],
						'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					];
				}
			}

			// Level 1
			$image = '';
			if ($data['image_status']) {
				if ($category['image']) {
					$image = $this->model_tool_image->resize($category['image'], $setting['module_category_wall_image_width'], $setting['module_category_wall_image_height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['module_category_wall_image_width'], $setting['module_category_wall_image_height']);
				}
			}

			$description = '';
			if ($setting['module_category_wall_description_status'] && $category['description'] && $category['description'] != '') {
				$description = trim(strip_tags(html_entity_decode($category['description'], ENT_QUOTES, 'UTF-8')));
				if ($length) {
					$description = utf8_substr($description, 0, $length) . '...';
				}
			}

			$data['categories'][] = [
				'category_id'     => $category['category_id'],
				'name'            => $category['name'],
				'image'           => $image,
				'description'     => $description,
				'children'        => $children_data,
				'href'            => $this->url->link('product/category', 'path=' . $category['category_id'])
			];
		}

		return $this->load->view('extension/module/category_wall', $data);
	}
}

