<?php namespace ffinst\db\migrations;

if ( ! defined( 'WPINC' ) ) die;

use ffinst\flow\core\db\migrations\ILADBMigration;

/**
 * Flow-Flow.
 *
 * @package   FlowFlow
 * @author    Looks Awesome <email@looks-awesome.com>
 *
 * @link      http://looks-awesome.com
 * @copyright 2014-2016 Looks Awesome
 */
class FFIMigration_1_3 implements ILADBMigration{
	public function version() {
		return '1.3';
	}

	/**
	 * @param SafeMySQL $conn
	 * @param LADBManager $manager
	 */
	public function execute( $conn, $manager ) {
		$conn->query('ALTER TABLE ?n MODIFY ?n TEXT', $manager->posts_table_name, 'location');
	}
}