<?$APPLICATION->IncludeComponent(
    "aspro:social.info.allcorp3",
    ".default",
    array(
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600000",
        "CACHE_GROUPS" => "N",
        "COMPONENT_TEMPLATE" => ".default",
        'SVG' => false,
        'IMAGES' => true,
        'ICONS' => true,
        'SIZE' => 'large',
        'HIDE_MORE' => isset($options['HIDE_MORE']) ? $options['HIDE_MORE'] : true,
    ),
    false
);?>