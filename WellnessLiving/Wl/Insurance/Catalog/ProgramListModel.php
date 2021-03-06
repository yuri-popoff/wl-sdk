<?php

namespace WellnessLiving\Wl\Insurance\Catalog;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of programs info.
 */
class ProgramListModel extends WlModelAbstract
{
  /**
   * List of active programs.
   * Every element has next keys:
   *
   * <dl>
   *   <dt>string <var>k_wellness_program</var></dt>
   *   <dd>Insurance key.</dd>
   *   <dt>string <var>m_price</var></dt>
   *   <dd>Purchase option price.</dd>
   *   <dt>string <var>text_insurance_organization</var></dt>
   *   <dd>Insurance organization name.</dd>
   *   <dt>string <var>text_partner</var></dt>
   *   <dd>Insurance partner name.</dd>
   *   <dt>string <var>text_program</var></dt>
   *   <dd>Insurance name.</dd>
   *   <dt>string <var>url_insurance_detail</var></dt>
   *   <dd>Insurance organization URL.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_wellness_program;

  /**
   * ID of business.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * ID of promotion.
   *
   * @get get
   * @var string
   */
  public $k_promotion = null;
}

?>