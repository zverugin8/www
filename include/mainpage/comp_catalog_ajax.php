<?$bAjaxMode = (isset($_POST["AJAX_POST"]) && $_POST["AJAX_POST"] == "Y");

if ($bAjaxMode) {
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	global $APPLICATION;
	if (\Bitrix\Main\Loader::includeModule("aspro.allcorp3")) 	{
		$arRegion = CAllcorp3Regionality::getCurrentRegion();
	}
	$template = $arParams['TYPE_TEMPLATE'];
}?>

<?if ((isset($arParams["IBLOCK_ID"]) && $arParams["IBLOCK_ID"]) || $bAjaxMode):?>
	<?
	$arIncludeParams = ($bAjaxMode ? $_POST["AJAX_PARAMS"] : $arParamsTmp);
	$arGlobalFilter = ($bAjaxMode ? unserialize(urldecode($_POST["GLOBAL_FILTER"])) : ($_GET['GLOBAL_FILTER'] ? unserialize(urldecode($_GET['GLOBAL_FILTER'])) : array()));
	$arComponentParams = unserialize(urldecode($arIncludeParams));
	
	$template = ($bAjaxMode ? $_POST["TYPE_TEMPLATE"] : $arComponentParams['TYPE_TEMPLATE']);

	/* replace REQUEST_URI to SITE_DIR for pagination in tabs */
	$uri = $_SERVER['REQUEST_URI'];
	$_SERVER['REQUEST_URI'] = SITE_DIR;

	$application = \Bitrix\Main\Application::getInstance();
	$request = $application->getContext()->getRequest();

	$context = $application->getContext();
	$server = $context->getServer();

	$server_get = $server->toArray();
	$server_get["REQUEST_URI"] = $_SERVER["REQUEST_URI"];

	$server->set($server_get);

	//\Aspro\Functions\CAsproAllcorp3ReCaptcha::reInitContext($application, $request);
	
	$APPLICATION->reinitPath();
	/* */

	$GLOBALS["NavNum"]=0;
	?>
	
	<?
	if (is_array($arGlobalFilter) && $arGlobalFilter) {
		$GLOBALS[$arComponentParams["FILTER_NAME"]] = $arGlobalFilter;
	}

	if ($bAjaxMode && $_POST["FILTER_HIT_PROP"]) {
		$arComponentParams["FILTER_HIT_PROP"] = $_POST["FILTER_HIT_PROP"];
	}

	/* hide compare link from module options */
	if (CAllcorp3::GetFrontParametrValue('CATALOG_COMPARE') == 'N') {
		$arComponentParams["DISPLAY_COMPARE"] = 'N';
	}
	/**/

	if (CAllcorp3::checkAjaxRequest() && $request['ajax'] == 'y') {
		$arComponentParams['AJAX_REQUEST'] = 'Y';
	}?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		// "catalog_block",
		$template,
		$arComponentParams,
		false, array("HIDE_ICONS"=>"Y")
	);?>
	
	<?
	/* restore REQUEST_URI */
	$_SERVER['REQUEST_URI'] = $uri;
	$server_get["REQUEST_URI"] = $_SERVER["REQUEST_URI"];

	$server->set($server_get);
	/**/?>

<?endif;?>