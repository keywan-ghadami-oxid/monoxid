<?php

/**
 * This Software is the property of OXID eSales and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * @author        OXID Professional services
 * @link          http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG
 * Created at 3/10/17 5:12 PM by Keywan Ghadami
 */
class of2_monoxidoxutilsobject extends of2_monoxidoxutilsobject_parent
{
    public function oxNew(...$params){

        $res =  parent::oxNew(...$params);
        if ($res instanceof \Psr\Log\LoggerAwareInterface) {
            $logger = $this->getLogger();
            $res->setLogger($logger);
        }
        return $res;
    }

    public function getLogger($name = 'default')
    {
        $known = oxRegistry::getKeys();
        if ($known['Logger:'.$name]){
            return $known['Logger:'.$name];
        }

        if ($known['LoggerFactory']) {
            $f = $known['LoggerFactory'];
        } else {
            $config = oxRegistry::get("oxConfigFile");
            $path = $config->getVar('sShopDir');
            $rootDir = dirname($path);
            if(defined('OXID_PHP_UNIT')){
                $rootDir .= '/tests';
            }
            $vars['monolog_config_dir'] = $rootDir;
            $vars['kernel.root_dir'] = $path;
            $vars['kernel.logs_dir'] = $path . '/log';
            $f = new \Monolog\Configuration\MonologFactory($vars);
        }


        return $f->getLogger($name);
    }

}