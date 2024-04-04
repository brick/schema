<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:NewsMediaOrganization
 *
 * @property-read SchemaTypeList<URL|CreativeWork>                $missionCoveragePrioritiesPolicy For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
 * @property-read SchemaTypeList<URL|CreativeWork>                $diversityPolicy                 Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
 * @property-read SchemaTypeList<AboutPage|Text|URL|CreativeWork> $ownershipFundingInfo            For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
 * @property-read SchemaTypeList<URL|CreativeWork>                $correctionsPolicy               For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
 * @property-read SchemaTypeList<URL|CreativeWork>                $noBylinesPolicy                 For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
 * @property-read SchemaTypeList<CreativeWork|URL>                $ethicsPolicy                    Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
 * @property-read SchemaTypeList<CreativeWork|URL>                $masthead                        For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
 * @property-read SchemaTypeList<URL|CreativeWork>                $verificationFactCheckingPolicy  Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
 * @property-read SchemaTypeList<URL|CreativeWork>                $unnamedSourcesPolicy            For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
 * @property-read SchemaTypeList<CreativeWork|URL>                $actionableFeedbackPolicy        For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
 * @property-read SchemaTypeList<Article|URL>                     $diversityStaffingReport         For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
 */
interface NewsMediaOrganization extends Organization
{
}
