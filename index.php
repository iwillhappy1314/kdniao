<?php
header("Content-type: text/html; charset=utf-8");
require_once __DIR__ . '/vendor/autoload.php';
use KdNiao\singlePlane;
$result = new singlePlane( [ 'EBusinessID' => 1316308, 'AppKey' => 'a88940ab-8ce2-4a60-b539-feef30ff8658' ] );
//构造电子面单提交信息

$result->set_logistics( 'ShipperCode', 'SF' );
$result->set_logistics( 'OrderCode', '012657700387' );
$result->set_logistics( 'PayType', 1 );
$result->set_logistics( 'ExpType', 1 );
$result->set_sender( 'Name', '发件方' );
$result->set_sender( 'Mobile', '18888888888' );
$result->set_sender( 'ProvinceName', '江苏省' );
$result->set_sender( 'CityName', '常州市' );
$result->set_sender( 'Address', '新北区软件园江苏优度软件有限公司' );
$result->set_receiver( 'Name', '汤先生' );
$result->set_receiver( 'Mobile', '18888888888' );
$result->set_receiver( 'ProvinceName', '上海' );
$result->set_receiver( 'CityName', '上海市' );
$result->set_receiver( 'Address', '闵行区漕宝路' );
$result->set_goods( array( 'GoodsName' => '商品名' ) );
$result->IsReturnPrintTemplate = 1;
$data = $result->request();
var_dump( $data );
echo $data['PrintTemplate'];