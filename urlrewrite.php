<?
$arUrlRewrite = array(
	array(
		'CONDITION' => '#^/catalog#',
		'RULE' => '',
		'ID' => 'bitrix:news',
		'PATH' => '/catalog/index.php',
	),
    array(
        'CONDITION' => '#^/news/([^/]+)/?(?:\\?(.*))?$#',
        'RULE' => 'CODE=$1&$2',
        'ID' => '',
        'PATH' => '/news/detail.php',
    ),
    array(
        'CONDITION' => '#^/articles/([^/]+)/?(?:\\?(.*))?$#',
        'RULE' => 'CODE=$1&$2',
        'ID' => '',
        'PATH' => '/articles/detail.php',
    ),
    array(
        'CONDITION' => '#^/actions/([^/]+)/?(?:\\?(.*))?$#',
        'RULE' => 'CODE=$1&$2',
        'ID' => '',
        'PATH' => '/actions/detail.php',
    ),
);
