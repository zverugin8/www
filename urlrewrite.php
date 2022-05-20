<?php
$arUrlRewrite=array (
  11 => 
  array (
    'CONDITION' => '#^/information/links/([a-zA-Z0-9_]+)/\\?{0,1}(.*)$#',
    'RULE' => '/information/links/index.php?SECTION_CODE=\\1&\\2',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/board/([a-zA-Z0-9_]+)/\\?{0,1}(.*)$#',
    'RULE' => '/board/index.php?SECTION_CODE=\\1&\\2',
    'ID' => '',
    'PATH' => '',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/company/licenses/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/licenses/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/company/partners/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/partners/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/company/vacancy/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/vacancy/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/company/reviews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/reviews/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#/company/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/brands/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/nationalnews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/nationalnews/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#/company/staff/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/staff/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/job/vacancy/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/job/vacancy/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#/cabinet/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/cabinet/news/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/job/resume/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/job/resume/index.php',
    'SORT' => 100,
  ),
  24 => 
  array (
    'CONDITION' => '#/landings/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/landings/index.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/articles/index.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/projects/index.php',
    'SORT' => 100,
  ),
  28 => 
  array (
    'CONDITION' => '#/contacts/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/contacts/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/themes/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/themes/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#/cabinet/#',
    'RULE' => '',
    'ID' => 'aspro:auth.allcorp3',
    'PATH' => '/cabinet/index.php',
    'SORT' => 100,
  ),
  25 => 
  array (
    'CONDITION' => '#/gallery/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/gallery/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#/tariffs/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/tariffs/index.php',
    'SORT' => 100,
  ),
  29 => 
  array (
    'CONDITION' => '#/product/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/product/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/forum/#',
    'RULE' => '',
    'ID' => 'bitrix:forum',
    'PATH' => '/forum/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/photo/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery_user',
    'PATH' => '/photo/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/blogs/#',
    'RULE' => '',
    'ID' => 'bitrix:blog',
    'PATH' => '/blogs/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  21 => 
  array (
    'CONDITION' => '#/sales/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/sales/index.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
