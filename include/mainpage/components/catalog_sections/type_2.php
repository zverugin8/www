<?
$indexPageOptions = $GLOBALS['arTheme']['INDEX_TYPE']['SUB_PARAMS'][$GLOBALS['arTheme']['INDEX_TYPE']['VALUE']];
$blockOptions = $indexPageOptions['CATALOG_SECTIONS'];
$blockTemplateOptions = $blockOptions['TEMPLATE']['LIST'][$blockOptions['TEMPLATE']['VALUE']];

$bShowAll = $blockTemplateOptions["ADDITIONAL_OPTIONS"]["LINES_COUNT"]["VALUE"] === 'ALL';
$linesCount = $bShowAll ? 9999 : (intval($blockTemplateOptions["ADDITIONAL_OPTIONS"]["LINES_COUNT"]["VALUE"]) ?: 1);
$bShowSubSections = $blockTemplateOptions["ADDITIONAL_OPTIONS"]["SHOW_BLOCKS"]["VALUE"]=="SECTIONS";
$sectionCount = $bShowSubSections ? 9999 : $linesCount * $blockTemplateOptions["ADDITIONAL_OPTIONS"]["ELEMENTS_COUNT"]["VALUE"];
?>
<?$APPLICATION->IncludeComponent(
	"aspro:catalog.section.list.allcorp3", 
	".default", 
	array(
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
		"IBLOCK_ID" => "50",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"COUNT_ELEMENTS" => "Y",
		"FILTER_NAME" => "arrPopularSections",
		"TOP_DEPTH" => "3",
		"SECTION_URL" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "DESCRIPTION",
			2 => "PICTURE",
			3 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_TOP_SEO",
			1 => "UF_SECTION_ICON",
			2 => "UF_TRANSPARENT_PICTURE",
			3 => "UF_MIN_PRICE",
			4 => "",
		),
		"ROW_VIEW" => true,
		"BORDER" => true,
		"ITEM_HOVER_SHADOW" => true,
		"DARK_HOVER" => false,
		"ROUNDED" => true,
		"ROUNDED_IMAGE" => true,
		"ITEM_PADDING" => true,
		"SECTION_COUNT" => $sectionCount,
		"ELEMENTS_ROW" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["ELEMENTS_COUNT"]["VALUE"],
		"COMPACT" => false,
		"MAXWIDTH_WRAP" => true,
		"MOBILE_SCROLLED" => true,
		"FRONT_PAGE" => true,
		"TOP_SECTION_COUNT" => $linesCount * $blockTemplateOptions["ADDITIONAL_OPTIONS"]["ELEMENTS_COUNT"]["VALUE"],
		"NARROW" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["WIDE"]["VALUE"]!="Y",
		"ITEMS_OFFSET" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["ITEMS_OFFSET"]["VALUE"]=="Y",
		"IMAGES" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["IMAGES"]["VALUE"],
		"IMAGE_POSITION" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["IMAGE_POSITION"]["VALUE"],
		"SHOW_PREVIEW" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["SHOW_BLOCKS"]["VALUE"]=="DESCRIPTION",
		"SHOW_CHILDS" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["SHOW_BLOCKS"]["VALUE"]=="SECTIONS",
		"SHOW_TITLE" => $blockOptions["INDEX_BLOCK_OPTIONS"]["BOTTOM"]["SHOW_TITLE"]["VALUE"]=="Y",
		"TITLE_POSITION" => $blockOptions["INDEX_BLOCK_OPTIONS"]["BOTTOM"]["TITLE_POSITION"]["VALUE"],
		"TITLE" => "Каталог товаров",
		"RIGHT_TITLE" => "Весь каталог",
		"RIGHT_LINK" => "product/",
		"CHECK_REQUEST_BLOCK" => CAllcorp3::checkRequestBlock("catalog_sections"),
		"IS_AJAX" => CAllcorp3::checkAjaxRequest(),
		"NAME_SIZE" => "18",
		"SUBTITLE" => "Продукция",
		"SHOW_PREVIEW_TEXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>