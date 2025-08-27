<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:SoftwareApplication
 *
 * @property-read SchemaTypeList<Text>                $availableOnDevice      Device required to run the application. Used in cases where a specific make/model is required to run the application.
 * @property-read SchemaTypeList<URL>                 $downloadUrl            If the file can be downloaded, URL to download the binary.
 * @property-read SchemaTypeList<SoftwareApplication> $softwareAddOn          Additional content for a software application.
 * @property-read SchemaTypeList<Text>                $countriesSupported     Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 * @property-read SchemaTypeList<Text|URL>            $softwareRequirements   Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
 * @property-read SchemaTypeList<Text>                $softwareVersion        Version of the software instance.
 * @property-read SchemaTypeList<DataFeed>            $supportingData         Supporting data for a SoftwareApplication.
 * @property-read SchemaTypeList<Text|URL>            $applicationCategory    Type of software application, e.g. 'Game, Multimedia'.
 * @property-read SchemaTypeList<Text>                $processorRequirements  Processor architecture required to run the application (e.g. IA64).
 * @property-read SchemaTypeList<Text|URL>            $storageRequirements    Storage requirements (free space required).
 * @property-read SchemaTypeList<Text>                $countriesNotSupported  Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 * @property-read SchemaTypeList<CreativeWork>        $softwareHelp           Software application help.
 * @property-read SchemaTypeList<Text>                $fileSize               Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
 * @property-read SchemaTypeList<Text>                $applicationSuite       The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
 * @property-read SchemaTypeList<Text>                $permissions            Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
 * @property-read SchemaTypeList<Text|URL>            $memoryRequirements     Minimum memory requirements.
 * @property-read SchemaTypeList<Text|URL>            $releaseNotes           Description of what changed in this version.
 * @property-read SchemaTypeList<Text|URL>            $featureList            Features or modules provided by this application (and possibly required by other applications).
 * @property-read SchemaTypeList<Text>                $operatingSystem        Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
 * @property-read SchemaTypeList<URL>                 $installUrl             URL at which the app may be installed, if different from the URL of the item.
 * @property-read SchemaTypeList<Text>                $device                 Device required to run the application. Used in cases where a specific make/model is required to run the application.
 * @property-read SchemaTypeList<ImageObject|URL>     $screenshot             A link to a screenshot image of the app.
 * @property-read SchemaTypeList<Text|URL>            $requirements           Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
 * @property-read SchemaTypeList<Text|URL>            $applicationSubCategory Subcategory of the application, e.g. 'Arcade Game'.
 */
interface SoftwareApplication extends CreativeWork
{
}
