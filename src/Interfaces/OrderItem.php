<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:OrderItem
 *
 * @property-read SchemaTypeList<OrderStatus>               $orderItemStatus The current status of the order item.
 * @property-read SchemaTypeList<Product|OrderItem|Service> $orderedItem     The item ordered.
 * @property-read SchemaTypeList<Text>                      $orderItemNumber The identifier of the order item.
 * @property-read SchemaTypeList<ParcelDelivery>            $orderDelivery   The delivery of the parcel related to this order or order item.
 * @property-read SchemaTypeList<Number>                    $orderQuantity   The number of the item ordered. If the property is not set, assume the quantity is one.
 */
interface OrderItem extends Intangible
{
}
