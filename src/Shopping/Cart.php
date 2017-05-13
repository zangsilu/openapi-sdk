<?php
/**
 * Vendor_Shopping_Cart
 *
 * PHP version 5.2+
 *
 * @category  Shopping
 * @package   Vendor\Shopping
 * @author    Guojing Liu <liugj@boqii.com>
 * @copyright 2016-2019 guangcheng Co. All Rights Reserved.
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @version   GIT:<git_id>
 * @link      http://shop.openapi.boqii.com
 * @see       http://code.boqii.com/management/doc/blob/master/%E5%95%86%E5%9F%8EAPI%E6%8E%A5%E5%8F%A3.md#93-%E8%8E%B7%E5%8F%96%E8%B4%AD%E7%89%A9%E8%BD%A6%E5%95%86%E5%93%81%E4%BF%A1%E6%81%AFgetshoppingcartdetailv2
 */
class Vendor_Shopping_Cart extends Vendor_Api
{
    /**
     * 获取购物车商品信息 getShoppingCartDetailV2
     *
     * @param mixed $criteria
     *
     * @access public
     *
     *
     * @return mixed
     */
    public function getShoppingCartDetailV2($criteria)
    {
        $criteria['Act'] = 'GetShoppingCartDetailV2';

        return $this->client->post('?GetShoppingCartDetailV2', $criteria);
    }

    /**
     * 修改购物车商品数量 modifyShoppingCartGoodsNumber
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function modifyShoppingCartGoodsNumber($criteria)
    {
        $criteria['Act'] = 'ModifyShoppingCartGoodsNumber';

        return $this->client->post('?ModifyShoppingCartGoodsNumber', $criteria);
    }

    /**
     * 获取购物车商品数量 getShoppingCartNumber
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function getShoppingCartNumber($criteria)
    {
        $criteria['Act'] = 'GetShoppingCartNumber';

        return $this->client->post('?GetShoppingCartNumber', $criteria);
    }
    /**
     * 添加至购物车 addToShoppingCart
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function addToShoppingCart($criteria)
    {
        $criteria['Act'] = 'AddToShoppingCart';

        return $this->client->post('?AddToShoppingCart', $criteria);
    }
    /**
     *  批量添加至购物车 batchAddToShoppingCart
     *
     * @param mixed $criteria
     *
     * @access public
     *
     * @return mixed
     */
    public function batchAddToShoppingCart($criteria)
    {
        $criteria['Act'] = 'BatchAddToShoppingCart';

        return $this->client->post('?BatchAddToShoppingCart', $criteria);
    }
    /**
     * 根据商品获取其在购物车中的数量
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getProductNumberByProduct($criteria)
    {
        $criteria['Act'] = 'GetShoppingCartNumber';

        return $this->client->post('?GetShoppingCartNumber', $criteria);
    }

    /**
     * 获取初始化的购物车数据 (临时接口，购物车迁移完毕后删除)
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getInitCartProduct($criteria)
    {
        $criteria['Act'] = 'GetInitCartProduct';

        $response = $this->client->post('?GetInitCartProduct', $criteria)->toArray();
        if (!$response){
            return $response;
        }
        $exchange = array(
            'expressType'        => 'exType',
            'selfGoodsNum'       => 'globalGoodsSelfNum',
            'packageDiscount'    => 'packageOrderDiscount',
            'productList'        => 'products',
        );
        $response = current(array_key_exchange_only(array($response), $exchange));
        $goodsExchange = array(
            'attrid'        => 'attr',
            'giftList'      => 'gift',
            'isTeamBuy'     => 'isTeambuy',
            'isFare'        => 'isfare',
            'DiscountPrice' => array('discountPrice', 'discountprice'),
            'showColor'     => 'color',
            'showSize'      => 'size',
            'GoodsPrice'    => 'price',
            'beanNum'       => 'bean',
            'isGlobal'      => 'isglobal',
            'isStopBuy'     => 'isstopbuy',
            'isSharedCoupon'=> 'ispublicuse',
            'LimitMaxNumber'=> 'mostbuy',
            'LimitMinNumber'=> 'minbuy',
            'picpath'       => 'img',
        );
        $response['products'] = array_key_exchange_only($response['products'], $goodsExchange);
        $exchange = array(
            'ifWillSell'          => 'if_will_sell',
            'willSellStock'       => 'will_sell_stock',
            'isFare'              => 'isfare',
            'goodsList'           => 'needGoods',
            'isGlobal'            => 'isglobal',
            'giftList'            => 'validGift',
            'barterList'          => 'barter',
            'beanNum'             => 'bean',
        );
        $response['displayActiveList'] = array_key_exchange_only($response['displayActiveList'], $exchange);
        foreach ($response['displayActiveList'] as $key => $activity) {
            $activity['needGoods'] = array_key_exchange_only($activity['needGoods'], $goodsExchange);
            $response['displayActiveList'][$key] = $activity;
        }

        return $response;
    }
    /**
     * 获取初始化的购物车数据 (临时接口，购物车迁移完毕后删除)
     *
     * @param $criteria
     *
     * @return mixed
     */
    public function getInitCartShowInfo($criteria)
    {
        $criteria['Act'] = 'GetInitCartShowInfo';

        $response = $this->client->post('?GetInitCartShowInfo', $criteria)->toArray();
        if (!$response) {
            return $response;
        }
        $exchange = array(
            'isFare'             => 'isfare',
            'isTeamBuy'          => 'isTeambuy',
            'giftList'           => 'gift',
            'attrid'             => 'attr',
            'showColor'          => 'color',
            'showSize'           => 'size',
            'beanNum'            => 'bean',
            'isStopBuy'          => 'isstopbuy',
            'limitBuyNum'        => 'stopbuynum',
            'LimitMinNumber'     => 'minbuy',
            'LimitMaxNumber'     => 'mostbuy',
            'isSharedCoupon'     => 'ispublicuse',
            'picpath'            => 'img',
            'goodsList'          => 'needGoods',
            'barterList'         => 'barter',
            'packageList'        => 'package',
            'isGlobal'           => 'isglobal',
            'ifWillSell'         => 'if_will_sell',
            'willSellStock'      => 'will_sell_stock',
            'teamBuyId'          => 'teambuyId',
            'GoodsPrice'         => 'price',
            'DiscountPrice'      => 'discountPrice',
            'ActionTags'         => 'tags',
        );
        $response['noActiveGoods'] = array_key_exchange_only($response['noActiveGoods'], $exchange);
        $giftChange = array(
            'picpath' => 'img',
        );
        foreach ($response['noActiveGoods'] as $key => $product) {
            $product['gift'] = array_key_exchange_only($product['gift'], $giftChange);
            $response['noActiveGoods'][$key] = $product;
        }
        foreach ($response['packageList'] as $cartId => $package) {
            $newPackage = array();
            foreach ($package as $key => $product) {
                $product = current(array_key_exchange_only(array($product), $exchange));
                if ($product['otype'] == 0) {
                    $newPackage['mainGood'] = $product;
                } elseif ($product['otype'] == 9) {
                    $newPackage['byGoods'][] = $product;
                }
            }
            $response['packageList'][$cartId] = $newPackage;
        }
        foreach ($response['barterList'] as $key => $barter)
        {
            $response['barterList'][$key] = array_key_exchange_only($barter, $exchange);
        }
        $exchange['giftList'] = 'validGift';
        $response['showActiveList'] = array_key_exchange_only($response['showActiveList'], $exchange);
        foreach ($response['showActiveList'] as $activeId => $active)
        {
            $active['needGoods'] = array_key_exchange_only($active['needGoods'], $exchange);
            $response['showActiveList'][$activeId] = $active;
        }

        return array_values($response);
    }

    /**
     * 清除商品数量的缓存
     *
     * @param $criteria
     *
     * @return bool
     */
    public function flushShoppingCartNumber($criteria)
    {
        $criteria['Act'] = 'FlushShoppingCartNumber';
        if (! isset($criteria['UserId']) || empty($criteria['UserId'])) {
            return false;
        }
        return $this->client->post('?FlushShoppingCartNumber', $criteria);
    }
}
