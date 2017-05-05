<?php

use Brisum\Lib\ObjectManager\ObjectManager;

ObjectManager::getInstance()->get('Brisum\Wordpress\Plugin\QueryMonitor\Collector\RewriteRulesList');

function register_qm_output_html_brisum_rewrite_rules_list( array $output, QM_Collectors $collectors ) {
	$output['brisum_wp_query'] = ObjectManager::getInstance()->create(
		'Brisum\Wordpress\Plugin\QueryMonitor\Output\Html\WpQuery',
		[
			'collector' => ObjectManager::getInstance()->get(
				'Brisum\Wordpress\Plugin\QueryMonitor\Collector\WpQuery'
			)
		]
	);
	
	$output['brisum_rewrite_rules'] = ObjectManager::getInstance()->create(
		'Brisum\Wordpress\Plugin\QueryMonitor\Output\Html\RewriteRulesList',
		[
			'collector' => ObjectManager::getInstance()->get(
				'Brisum\Wordpress\Plugin\QueryMonitor\Collector\RewriteRulesList'
			)
		]
	);

	return $output;
}
add_filter('qm/outputter/html', 'register_qm_output_html_brisum_rewrite_rules_list', 200, 2 );
