<?php
/**
 * Variety Routes
 *
 * SPDX-License-Identifier: MIT
 */

namespace App\Module;

class Variety extends \OpenTHC\Module\Base
{
	/**
	 *
	 */
	function __invoke($a)
	{
		$a->get('', 'App\Controller\Variety\Search');
		$a->post('', 'App\Controller\Variety\Create');

		// $a->get('/type', 'App\Controller\Variety\Search:type');

		$a->get('/status', 'OpenTHC\CRE\Controller\Variety\Status');

		$a->get('/{id}', 'App\Controller\Variety\Single');
		$a->post('/{id}', 'App\Controller\Variety\Update');

		$a->delete('/{id}', 'App\Controller\Variety\Delete');

	}
}
