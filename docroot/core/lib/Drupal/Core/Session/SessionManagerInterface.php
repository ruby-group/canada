<?php

/**
 * @file
 * Contains \Drupal\Core\Session\SessionManagerInterface.
 */

namespace Drupal\Core\Session;

use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;

/**
 * Defines the session manager interface.
 */
interface SessionManagerInterface extends SessionStorageInterface {

  /**
   * Ends a specific user's session(s).
   *
   * @param int $uid
   *   User ID.
   */
  public function delete($uid);

  /**
   * Determines whether to save session data of the current request.
   *
   * @return bool
   *   FALSE if writing session data has been disabled. TRUE otherwise.
   */
  public function isEnabled();

  /**
   * Temporarily disables saving of session data.
   *
   * This function allows the caller to temporarily disable writing of
   * session data, should the request end while performing potentially
   * dangerous operations, such as manipulating the global $user object.
   *
   * @see https://drupal.org/node/218104
   *
   * @return $this
   */
  public function disable();

  /**
   * Re-enables saving of session data.
   *
   * @return $this
   */
  public function enable();

}
