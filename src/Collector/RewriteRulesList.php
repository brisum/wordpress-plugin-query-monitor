<?php

namespace Brisum\Wordpress\Plugin\QueryMonitor\Collector;

use QM_Collector;

class RewriteRulesList extends QM_Collector {

	public $id = 'brisum_rewrite_rules_list';

	public function name() {
		return __('Rewrite Rules List');
	}

	public function __construct() {

		global $wp_rewrite;

		parent::__construct();

		# If QM_DB is in place then we'll use the values which were
		# caught early before any plugins had a chance to alter them

		$this->data['rewrite_rules'] = $wp_rewrite;
	}

	public function process()
	{
		
	}
}




