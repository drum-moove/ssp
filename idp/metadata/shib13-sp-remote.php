<?php

/**
 * SAML 1.1 remote SP metadata for SimpleSAMLphp.
 *
 * Note that SAML 1.1 support has been deprecated and will be removed in SimpleSAMLphp 2.0.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * This is just an example:
 */
// $metadata['https://sp.shiblab.feide.no'] = [
//     'AssertionConsumerService' => 'http://sp.shiblab.feide.no/Shibboleth.sso/SAML/POST',
//     'audience' => 'urn:mace:feide:shiblab',
//     'base64attributes' => false,
// ];


$metadata['https://localhost:9001'] = [
    'entityid' => 'https://localhost:9001',
    'contacts' => [],
    'metadata-set' => 'shib13-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost/simplesamlsp/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 0,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://localhost/simplesamlsp/module.php/saml/sp/saml1-acs.php/default-sp',
            'index' => 1,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://localhost/simplesamlsp/module.php/saml/sp/saml2-acs.php/default-sp',
            'index' => 2,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://localhost/simplesamlsp/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
            'index' => 3,
        ],
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICpDCCAYwCCQD6dWM06DkGQDANBgkqhkiG9w0BAQsFADAUMRIwEAYDVQQDDAlzcDEubG9jYWwwHhcNMjEwNjExMDMyNTM1WhcNMzEwNjA5MDMyNTM1WjAUMRIwEAYDVQQDDAlzcDEubG9jYWwwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCZT7d0IAeiDOJTZTKdKC5NA8pxJxpNzrXOdLM8s21doQ4HczzRJ/Mt1EaIuBs7h0AezKvX+bsbRz3ETjfFZkoKUSHoBwQYP8MTV0bus3BHaabYyEEh4ONe72ATdKLA3hHw64NDPyOtULx6fieRKpQ7zMboJFNKPPzqUdAMCwIWe+oBFSGnsPCbKXOETV78537raLJBUOdZEK9Sx3eG9NeJYgk+VXMcjLUM2oTJP5sl4Ms1XLWysXzp5pt7U9cv1ePMQXVsfujWWNeOYtV32W8koz2TwAz92z09iP+MTyoTdc7ayifYlHnlAaLZPK/yVNx+JdDlnch9QXJckNkSody7AgMBAAEwDQYJKoZIhvcNAQELBQADggEBABRXPREPd2yC39c1pCQo3mlhlUZZM7xJ6SZY2KvROq1+u02Dw9QWrqsUZR1sQYSMS3hBIyEKuykSyYn4Sbz5bEpGJ5UOntG5KJ8OG4EzWbK5hB/oWnqOfn/3KhtKOwyXQZDJRbzL5OG7uWKVKGNvXwCHhTl+KFpNdAMwsCegEE8uSGavZ8YzYF6X+2qPb5LKwIwPQZfZt6skGicRu6mDSKSwq651TX+OrUXei9OA18EV+HIMJ9SY9u9YWA8nQU6ftXZ/otpeYJlOdsXep9Yz8vv+my3YXsvcHqgWYBOEkMylhddKhOEDe8j4icijL6kz2y5l6rfGv0yUMPyud4vVR+A=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICpDCCAYwCCQD6dWM06DkGQDANBgkqhkiG9w0BAQsFADAUMRIwEAYDVQQDDAlzcDEubG9jYWwwHhcNMjEwNjExMDMyNTM1WhcNMzEwNjA5MDMyNTM1WjAUMRIwEAYDVQQDDAlzcDEubG9jYWwwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCZT7d0IAeiDOJTZTKdKC5NA8pxJxpNzrXOdLM8s21doQ4HczzRJ/Mt1EaIuBs7h0AezKvX+bsbRz3ETjfFZkoKUSHoBwQYP8MTV0bus3BHaabYyEEh4ONe72ATdKLA3hHw64NDPyOtULx6fieRKpQ7zMboJFNKPPzqUdAMCwIWe+oBFSGnsPCbKXOETV78537raLJBUOdZEK9Sx3eG9NeJYgk+VXMcjLUM2oTJP5sl4Ms1XLWysXzp5pt7U9cv1ePMQXVsfujWWNeOYtV32W8koz2TwAz92z09iP+MTyoTdc7ayifYlHnlAaLZPK/yVNx+JdDlnch9QXJckNkSody7AgMBAAEwDQYJKoZIhvcNAQELBQADggEBABRXPREPd2yC39c1pCQo3mlhlUZZM7xJ6SZY2KvROq1+u02Dw9QWrqsUZR1sQYSMS3hBIyEKuykSyYn4Sbz5bEpGJ5UOntG5KJ8OG4EzWbK5hB/oWnqOfn/3KhtKOwyXQZDJRbzL5OG7uWKVKGNvXwCHhTl+KFpNdAMwsCegEE8uSGavZ8YzYF6X+2qPb5LKwIwPQZfZt6skGicRu6mDSKSwq651TX+OrUXei9OA18EV+HIMJ9SY9u9YWA8nQU6ftXZ/otpeYJlOdsXep9Yz8vv+my3YXsvcHqgWYBOEkMylhddKhOEDe8j4icijL6kz2y5l6rfGv0yUMPyud4vVR+A=',
        ],
    ],
];
