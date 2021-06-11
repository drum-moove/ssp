<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://localhost/simplesamlidp/saml2/idp/metadata.php'] = [
    'entityid' => 'https://localhost/simplesamlidp/saml2/idp/metadata.php',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost/simplesamlidp/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost/simplesamlidp/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICtjCCAZ4CCQDR0EYLZT/YlDANBgkqhkiG9w0BAQsFADAdMQswCQYDVQQGEwJKUDEOMAwGA1UECAwFVG9reW8wHhcNMjEwNjEwMDE1ODIyWhcNMzEwNjA4MDE1ODIyWjAdMQswCQYDVQQGEwJKUDEOMAwGA1UECAwFVG9reW8wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDHfrPIMYeBsiF+Srkcyr/D6+tytKBxxoAE4KIjSrFg7eHZIZ+cNFfpYOC4mJbEyz9gTwxYqP2UElvwQVaduIAd2uNAewAUCe+06Psbky+W5fkYfGUZXHv+k6oUCT7zAVmWa2itvwaNilhvrKseQmh3+Sxf+6iO2tzUpaam67MaPH6zH5eVK2xxeEn5jcFs/uq0WE1W73c/CUQOok+EywJaqZqeRoj8XhbMrgndMoiOl/gpbUFFAbwmBNFPi3Qs/y12gC9CwCkHOlUCzKG0K0tkq8eeUAvGu6tXL5hOzdD1C/IGyMEeK73j0nQCiCv4iSs+2aZraBN3G0bQEQJY2D79AgMBAAEwDQYJKoZIhvcNAQELBQADggEBACwsqty0Gdf4TFzGtSinU/G0KoPqnQMYLAfUFuhkIWejP/h5wXAacmksGUfFMp8JfPi4Pg2+2HLX1Cygw9JLa+NaW89+O8bXbewwkRy+sd6AZupsMjCvDXk21GscjVVI+sInox5PRs7YnwNtUwwlD83DdfrdGhPZdiP4fqrRzCsGlyW4o9FhrSAzrMOAnfW6BZeq9XfLqg0GTxBNtsG/RBjb/gvlhzwCkWQ4cyXiQxIAVlnMtPDZUllGUEXzsYhN0tio8NsawMLO24F13qfaO445rdDB2pK19WlzD6Vd1sry5P8HrBBRHAm21c2D6jhX50aoAS8b8r1gM1WZWDYhu38=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICtjCCAZ4CCQDR0EYLZT/YlDANBgkqhkiG9w0BAQsFADAdMQswCQYDVQQGEwJKUDEOMAwGA1UECAwFVG9reW8wHhcNMjEwNjEwMDE1ODIyWhcNMzEwNjA4MDE1ODIyWjAdMQswCQYDVQQGEwJKUDEOMAwGA1UECAwFVG9reW8wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDHfrPIMYeBsiF+Srkcyr/D6+tytKBxxoAE4KIjSrFg7eHZIZ+cNFfpYOC4mJbEyz9gTwxYqP2UElvwQVaduIAd2uNAewAUCe+06Psbky+W5fkYfGUZXHv+k6oUCT7zAVmWa2itvwaNilhvrKseQmh3+Sxf+6iO2tzUpaam67MaPH6zH5eVK2xxeEn5jcFs/uq0WE1W73c/CUQOok+EywJaqZqeRoj8XhbMrgndMoiOl/gpbUFFAbwmBNFPi3Qs/y12gC9CwCkHOlUCzKG0K0tkq8eeUAvGu6tXL5hOzdD1C/IGyMEeK73j0nQCiCv4iSs+2aZraBN3G0bQEQJY2D79AgMBAAEwDQYJKoZIhvcNAQELBQADggEBACwsqty0Gdf4TFzGtSinU/G0KoPqnQMYLAfUFuhkIWejP/h5wXAacmksGUfFMp8JfPi4Pg2+2HLX1Cygw9JLa+NaW89+O8bXbewwkRy+sd6AZupsMjCvDXk21GscjVVI+sInox5PRs7YnwNtUwwlD83DdfrdGhPZdiP4fqrRzCsGlyW4o9FhrSAzrMOAnfW6BZeq9XfLqg0GTxBNtsG/RBjb/gvlhzwCkWQ4cyXiQxIAVlnMtPDZUllGUEXzsYhN0tio8NsawMLO24F13qfaO445rdDB2pK19WlzD6Vd1sry5P8HrBBRHAm21c2D6jhX50aoAS8b8r1gM1WZWDYhu38=',
        ],
    ],
];
