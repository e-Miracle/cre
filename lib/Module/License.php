<?php
/**
 * License Routes
 *
 * SPDX-License-Identifier: MIT
 */

namespace App\Module;

class License extends \OpenTHC\Module\Base
{
	/**
	 *
	 */
	function __invoke($a)
	{
		$a->get('', 'App\Controller\License\Search');
		$a->post('', 'App\Controller\License\Create');

		$a->get('/status', 'OpenTHC\CRE\Controller\License\Status');

		// $a->get('/type', 'App\Controller\License\Search:type');

		$a->get('/{id}', 'App\Controller\License\Single');
		$a->post('/{id}', 'App\Controller\License\Update');

		$a->delete('/{id}', 'App\Controller\License\Delete');

	}
}
