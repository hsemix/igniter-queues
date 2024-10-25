<?php 

namespace Igniter\Queues\Queue;

/**
 * Expected behavior of a Queue.
 */

interface QueueInterface
{
	/**
	 * Constructor.
	 *
	 * @param \Config\Queue $config
	 * @param string|array  $group  The name of the connection group to use,
	 *                               or an array of configuration settings.
	 */
	// public function __construct($config, $group = '');

	/**
	 * connecting queueing system.
	 *
	 * @return Yuga\Queue\Handlers\BaseHandler
	 */
	public function connect();
}
