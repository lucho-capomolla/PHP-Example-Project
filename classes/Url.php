<?php

/*
 * URL
 *
 * Response methods
 */
class Url {

    /*
     * Redirect to another ULR on the same site
     *
     * @param string $path The path to redirect to
     *
     * @return void
     */
    public static function redirect($path) {

      if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
      } else {
        $protocol = 'http';
      }

      // Redirect to the ABSOLUTE URL
      header("Location: $protocol://" . $_SERVER['HTTP_HOST'] .  $path);
      exit;

    }
}
