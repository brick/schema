<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:DeliveryChargeSpecification
 *
 * @property-read SchemaTypeList<GeoShape|Text|Place>                    $eligibleRegion          The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
 * @property-read SchemaTypeList<Text|Place|AdministrativeArea|GeoShape> $areaServed              The geographic area where a service or offered item is provided.
 * @property-read SchemaTypeList<Text|Place|GeoShape>                    $ineligibleRegion        The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
 * @property-read SchemaTypeList<DeliveryMethod>                         $appliesToDeliveryMethod The delivery method(s) to which the delivery charge or payment charge specification applies.
 */
interface DeliveryChargeSpecification extends PriceSpecification
{
}
