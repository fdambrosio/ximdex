<?php
/**
 *  \details &copy; 2011  Open Ximdex Evolution SL [http://www.ximdex.org]
 *
 *  Ximdex a Semantic Content Management System (CMS)
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published
 *  by the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  See the Affero GNU General Public License for more details.
 *  You should have received a copy of the Affero GNU General Public License
 *  version 3 along with Ximdex (see LICENSE file).
 *
 *  If not, visit http://gnu.org/licenses/agpl-3.0.html.
 *
 *  @author Ximdex DevTeam <dev@ximdex.com>
 *  @version $Revision$
 */




/**
 * XIMDEX_ROOT_PATH
 */
if (!defined('XIMDEX_ROOT_PATH'))
	define('XIMDEX_ROOT_PATH', realpath(dirname(__FILE__) . '/../../../'));

include_once (XIMDEX_ROOT_PATH . '/inc/helper/GenericData.class.php');

class XimNewsColector_ORM extends GenericData   {
	var $_idField = 'IdColector';
	var $_table = 'XimNewsColector';
	var $_metaData = array(
				'IdColector' => array('type' => "int(12)", 'not_null' => 'true', 'primary_key' => true),
				'Name' => array('type' => "varchar(255)", 'not_null' => 'true'),
				'Filter' => array('type' => "varchar(255)", 'not_null' => 'true'),
				'IdTemplate' => array('type' => "int(12)", 'not_null' => 'true'),
				'IdSection' => array('type' => "int(12)", 'not_null' => 'true'),
				'IdXimlet' => array('type' => "int(12)", 'not_null' => 'false'),
				'OrderNewsInBulletins' => array('type' => "varchar(255)", 'not_null' => 'false'),
				'NewsPerBulletin' => array('type' => "int(12)", 'not_null' => 'false'),
				'TimeToGenerate' => array('type' => "int(12)", 'not_null' => 'false'),
				'NewsToGenerate' => array('type' => "int(12)", 'not_null' => 'false'),
				'LastGeneration' => array('type' => "int(12)", 'not_null' => 'false'),
				'MailChannel' => array('type' => "int(12)", 'not_null' => 'false'),
				'Locked' => array('type' => "tinyint(1)", 'not_null' => 'true'),
				'XslFile' => array('type' => "varchar(255)", 'not_null' => 'false'),
				'TemplateVersion' => array('type' => "int(12)", 'not_null' => 'true'),
				'Inactive' => array('type' => "int(12)", 'not_null' => 'true'),
				'IdArea' => array('type' => "int(12)", 'not_null' => 'false'),
				'ForceTotalGeneration' => array('type' => "int(12)", 'not_null' => 'false'),
				'Global' => array('type' => "tinyint(1)", 'not_null' => 'false'),
				'State' => array('type' => "varchar(255)", 'not_null' => 'true')
				);
	var $_uniqueConstraints = array(

				);
	var $_indexes = array('IdColector');
	var $IdColector = 0;
	var $Name;
	var $Filter;
	var $IdTemplate = 0;
	var $IdSection = 0;
	var $IdXimlet;
	var $OrderNewsInBulletins = 'asc';
	var $NewsPerBulletin = 100000;
	var $TimeToGenerate;
	var $NewsToGenerate;
	var $LastGeneration;
	var $MailChannel;
	var $Locked = 0;
	var $XslFile;
	var $TemplateVersion = 0;
	var $Inactive = 0;
	var $IdArea;
	var $ForceTotalGeneration = 0;
	var $Global = 0;
	var $State = 'created';
}
?>
