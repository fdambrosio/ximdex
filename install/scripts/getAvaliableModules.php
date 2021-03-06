#!/usr/bin/php -q
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




if (!defined('XIMDEX_ROOT_PATH'))
define('XIMDEX_ROOT_PATH', realpath(dirname(__FILE__) . "/../../"));

require_once(XIMDEX_ROOT_PATH . '/inc/fsutils/FsUtils.class.php');
require_once(XIMDEX_ROOT_PATH . '/inc/modules/ModulesManager.class.php');

//mode: list
if (isset($argv[1]) &&  "-l" == $argv[1]) {
	$modMan=new ModulesManager();
	$modules=$modMan->getModules();
	foreach($modules as $mod){
		if(strpos($mod["name"], "xim") !== false) 
			echo $mod["name"]."\n";
	}
//mode:normal
}else {
	$config = FsUtils::file_get_contents(XIMDEX_ROOT_PATH.MODULES_INSTALL_PARAMS);
		
	$modMan=new ModulesManager();
	$modules=$modMan->getModules();
	$str="<?php\n\n";
	foreach($modules as $mod){
		$str.=PRE_DEFINE_MODULE.strtoupper($mod["name"]).POST_PATH_DEFINE_MODULE.str_replace(XIMDEX_ROOT_PATH,'',$mod["path"])."');"."\n";
	}
	$str.="\n?>";
	FsUtils::file_put_contents(XIMDEX_ROOT_PATH.MODULES_INSTALL_PARAMS,$str);
}
?>
