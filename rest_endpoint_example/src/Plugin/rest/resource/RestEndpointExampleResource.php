<?php

namespace Drupal\rest_endpoint_example\Plugin\rest\resource;

/**
 * @file
 * Example file for a rest endpoint.
 */

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a resource example.
 *
 * @RestResource(
 *   id = "rest_endpoint_example_id",
 *   label = @Translation("Rest Endpoint Example Resource"),
 *   uri_paths = {
 *     "canonical" = "/rest-endpoint-example"
 *   }
 * )
 */
class RestEndpointExampleResource extends ResourceBase {

  /**
   * Responds to GET requests.
   *
   * @return \Drupal\rest\ResourceResponse
   *   The response containing the business profile data.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
   *   Thrown when the user does not have access to the requested resource.
   */
  public function get() {
    return new ResourceResponse(['test' => 1]);
  }

}
