<?php

namespace Brisum\Wordpress\Plugin\QueryMonitor\Output\Html;

use QM_Collector;
use QM_Output_Html;


class WpQuery extends QM_Output_Html {
	public function __construct( QM_Collector $collector ) {
		parent::__construct( $collector );
		add_filter( 'qm/output/menus', array( $this, 'admin_menu' ), 110 );
	}

	public function output() {

		global $wp_query;

		echo '<div id="' . esc_attr( $this->collector->id() ) . '" class="qm">';

		echo '<div class="qm">';
		echo '<table cellspacing="0">';
		echo '<caption>Wp Query</caption>';
		echo '<thead class="screen-reader-text">';
		echo '<tr>';
		echo '<th scope="col">' . esc_html__( 'Property', 'query-monitor' ) . '</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';

		echo '<tr>';
		echo '<td>';

			var_dump($wp_query);

		echo '</td>';
		echo '</tbody>';
		echo '</table>';
		echo '</div>';

		echo '</div>';

	}

}
