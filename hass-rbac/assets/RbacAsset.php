<?php
/**
 *
* HassCMS (http://www.hassium.org/)
*
* @link http://github.com/hasscms for the canonical source repository
* @copyright Copyright (c) 2016-2099 Hassium Software LLC.
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/
namespace hass\rbac\assets;

/**
*
* @package hass\package_name
* @author zhepama <zhepama@gmail.com>
* @since 0.1.0
 */

class RbacAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hass/rbac/media';

    public $js = [
        'rbac.js'
    ];
    
    public $depends = [
        '\hass\admin\assets\AdminAsset'
    ];

}
