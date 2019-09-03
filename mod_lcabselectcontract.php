<?php
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . "/components/com_projects/helpers/projects.php";
$contracts = ProjectsHelper::getUserContracts();
$active = ProjectsHelper::getUserContractID();
$return = ProjectsHelper::getReturnUrl();

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_lcabselectcontract', $params->get('layout', 'default'));
