_快递鸟电子面单Api_
--------------------------------------------------------------------------------
<pre>
header("Content-type: text/html; charset=utf-8");
require_once __DIR__ . '/vendor/autoload.php';
use KdNiao\singlePlane;
$result = new singlePlane( [ 'EBusinessID' => 商户id, 'AppKey' => AppKey ] );
//构造电子面单提交信息

$result->set_logistics( 'ShipperCode', 'SF' );
$result->set_logistics( 'OrderCode', '012657700387' );
$result->set_logistics( 'PayType', 1 );
$result->set_logistics( 'ExpType', 1 );
$result->set_sender( 'Name', '发件方' );
$result->set_sender( 'Mobile', '发件方手机号' );
$result->set_sender( 'ProvinceName', '发件省份' );
$result->set_sender( 'CityName', '发件省市' );
$result->set_sender( 'Address', '发件详细地址' );
$result->set_receiver( 'Name', '收件方' );
$result->set_receiver( 'Mobile', '收件方手机号' );
$result->set_receiver( 'ProvinceName', '收件省份' );
$result->set_receiver( 'CityName', '收件城市' );
$result->set_receiver( 'Address', '收件详细地址' );
$result->set_goods( array( 'GoodsName' => '商品名' ) );
$result->IsReturnPrintTemplate = 1;
$data = $result->request();
var_dump( $data );
echo $data['PrintTemplate'];
</pre>