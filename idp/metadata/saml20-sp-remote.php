<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
// $metadata['https://saml2sp.example.org'] = [
//     'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
//     'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
// ];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
// $metadata['google.com'] = [
//     'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
//     'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
//     'simplesaml.nameidattribute' => 'uid',
//     'simplesaml.attributes' => false,
// ];

// $metadata['https://legacy.example.edu'] = [
//     'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
    /*
     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
     * Uncomment the following option to use SHA-1 for signatures directed
     * at this specific service provider if it does not support SHA-256 yet.
     *
     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
     * Please refer to the following document for more information:
     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
     */
    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
// ];

$metadata['https://localhost:9001'] = [
    'entityid' => 'https://localhost:9001',
    'contacts' => [],
    'metadata-set' => 'saml20-sp-remote',
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
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost/simplesamlsp/module.php/saml/sp/saml2-logout.php/default-sp',
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

