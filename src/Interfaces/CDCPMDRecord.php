<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;

/**
 * schema:CDCPMDRecord
 *
 * @property-read SchemaTypeList<Number>        $cvdNumBedsOcc           numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
 * @property-read SchemaTypeList<Number>        $cvdNumVentUse           numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
 * @property-read SchemaTypeList<Number>        $cvdNumICUBedsOcc        numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
 * @property-read SchemaTypeList<Number>        $cvdNumBeds              numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
 * @property-read SchemaTypeList<Date|DateTime> $datePosted              Publication date of an online listing.
 * @property-read SchemaTypeList<Number>        $cvdNumC19OFMechVentPats numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed and on a mechanical ventilator.
 * @property-read SchemaTypeList<Number>        $cvdNumC19Died           numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
 * @property-read SchemaTypeList<Number>        $cvdNumC19HOPats         numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or more days after hospitalization.
 * @property-read SchemaTypeList<Number>        $cvdNumVent              numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
 * @property-read SchemaTypeList<Number>        $cvdNumTotBeds           numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge) beds used for inpatients or outpatients.
 * @property-read SchemaTypeList<Number>        $cvdNumC19HospPats       numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
 * @property-read SchemaTypeList<DateTime|Text> $cvdCollectionDate       collectiondate - Date for which patient counts are reported.
 * @property-read SchemaTypeList<Number>        $cvdNumC19OverflowPats   numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed.
 * @property-read SchemaTypeList<Text>          $cvdFacilityCounty       Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
 * @property-read SchemaTypeList<Text>          $cvdFacilityId           Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
 * @property-read SchemaTypeList<Number>        $cvdNumICUBeds           numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
 * @property-read SchemaTypeList<Number>        $cvdNumC19MechVentPats   numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are on a mechanical ventilator.
 */
interface CDCPMDRecord extends StructuredValue
{
}
