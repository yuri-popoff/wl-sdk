<?php

namespace WellnessLiving\Wl\Login\Attendance;

/**
 * List of options to add client to attendance list.
 */
abstract class AddOptionSid
{
  /**
   * Add client to attendance list and charge his account.
   */
  public const DEBIT = 2;

  /**
   * Add client to attendance list and pay now.
   */
  public const PAY = 3;

  /**
   * Add client to attendance list without payment.
   */
  public const UNPAID = 1;
}

?>