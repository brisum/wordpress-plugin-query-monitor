<?php

namespace Brisum\Wordpress\Plugin\QueryMonitor\Collector;

use QM_Collector;

class WpQuery extends QM_Collector {

	public $id = 'brisum_wp_query';

	public function name() {
		return __('Wp Query');
	}

	public function process()
	{

	}
}




