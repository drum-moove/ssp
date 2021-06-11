<?php

/**
 * The configuration of SimpleSAMLphp
 */

$config = [

    /*******************************
     | BASIC CONFIGURATION OPTIONS |
     *******************************/

    'baseurlpath' => 'simplesamlidp/',
    'certdir' => 'cert/',
    'loggingdir' => 'log/',
    'datadir' => 'data/',
    'tempdir' => '/tmp/simplesaml',
    'technicalcontact_name' => 'Administrator',
    'technicalcontact_email' => 'na@example.org',
    'timezone' => null,

    /**********************************
     | SECURITY CONFIGURATION OPTIONS |
     **********************************/

    'secretsalt' => 'hogehuga',
    'auth.adminpassword' => 'pass',
    'admin.protectindexpage' => false,
    'admin.protectmetadata' => false,
    'admin.checkforupdates' => true,
    'trusted.url.domains' => [],
    'trusted.url.regex' => false,
    'enable.http_post' => true,
    'assertion.allowed_clock_skew' => 180,

    /************************
     | ERRORS AND DEBUGGING |
     ************************/

    'debug' => [
        'saml' => false,
        'backtraces' => true,
        'validatexml' => false,
    ],
    'showerrors' => true,
    'errorreporting' => true,

    /**************************
     | LOGGING AND STATISTICS |
     **************************/

    'logging.level' => SimpleSAML\Logger::NOTICE,
    'logging.handler' => 'syslog',
    'logging.facility' => defined('LOG_LOCAL5') ? constant('LOG_LOCAL5') : LOG_USER,
    'logging.processname' => 'simplesamlphp',
    'logging.logfile' => 'simplesamlphp.log',
    'statistics.out' => [// Log statistics to the normal log.
        /*
        [
            'class' => 'core:Log',
            'level' => 'notice',
        ],
        */
        // Log statistics to files in a directory. One file per day.
        /*
        [
            'class' => 'core:File',
            'directory' => '/var/log/stats',
        ],
        */
    ],

    /***********************
     | PROXY CONFIGURATION |
     ***********************/

    'proxy' => null,

    /**************************
     | DATABASE CONFIGURATION |
     **************************/

    'database.dsn' => 'mysql:host=localhost;dbname=saml',
    'database.username' => 'simplesamlphp',
    'database.password' => 'secret',
    'database.options' => [],
    'database.prefix' => '',
    'database.driver_options' => [],
    'database.persistent' => false,

    'database.slaves' => [
        /*
        [
            'dsn' => 'mysql:host=myslave;dbname=saml',
            'username' => 'simplesamlphp',
            'password' => 'secret',
            'persistent' => false,
        ],
        */
    ],

    /*************
     | PROTOCOLS |
     *************/

    'enable.saml20-idp' => true,
    'enable.shib13-idp' => false,
    'enable.adfs-idp' => false,
    'shib13.signresponse' => false,

    /***********
     | MODULES |
     ***********/

     'module.enable' => [
         'exampleauth' => false,
         'core' => true,
         'saml' => true
     ],

    /*************************
     | SESSION CONFIGURATION |
     *************************/

    'session.duration' => 8 * (60 * 60), // 8 hours.
    'session.datastore.timeout' => (4 * 60 * 60), // 4 hours
    'session.state.timeout' => (60 * 60), // 1 hour
    'session.cookie.name' => 'SimpleSAMLSessionID',
    'session.cookie.lifetime' => 0,
    'session.cookie.path' => '/',
    'session.cookie.domain' => null,
    'session.cookie.secure' => true,
    'session.cookie.samesite' => \SimpleSAML\Utils\HTTP::canSetSameSiteNone() ? 'None' : null,
    'session.phpsession.cookiename' => 'SimpleSAML',
    'session.phpsession.savepath' => null,
    'session.phpsession.httponly' => true,
    'session.authtoken.cookiename' => 'SimpleSAMLAuthToken',
    'session.rememberme.enable' => false,
    'session.rememberme.checked' => false,
    'session.rememberme.lifetime' => (14 * 86400),

    /**************************
     | MEMCACHE CONFIGURATION |
     **************************/

    'memcache_store.servers' => [
        [
            ['hostname' => 'localhost'],
        ],
    ],
    'memcache_store.prefix' => '',
    'memcache_store.expires' => 36 * (60 * 60), // 36 hours.

    /*************************************
     | LANGUAGE AND INTERNATIONALIZATION |
     *************************************/

    'language' => [
        'priorities' => [
            'no' => ['nb', 'nn', 'en', 'se'],
            'nb' => ['no', 'nn', 'en', 'se'],
            'nn' => ['no', 'nb', 'en', 'se'],
            'se' => ['nb', 'no', 'nn', 'en'],
            'nr' => ['zu', 'en'],
            'nd' => ['zu', 'en'],
            'tw' => ['st', 'en'],
            'nso' => ['st', 'en'],
        ],
    ],

    'language.available' => [ 'ja', 'en' ],
    'language.rtl' => ['ar', 'dv', 'fa', 'ur', 'he'],
    'language.default' => 'en',
    'language.parameter.name' => 'language',
    'language.parameter.setcookie' => true,
    'language.cookie.name' => 'language',
    'language.cookie.domain' => null,
    'language.cookie.path' => '/',
    'language.cookie.secure' => true,
    'language.cookie.httponly' => false,
    'language.cookie.lifetime' => (60 * 60 * 24 * 900),
    'language.cookie.samesite' => \SimpleSAML\Utils\HTTP::canSetSameSiteNone() ? 'None' : null,
    'attributes.extradictionary' => null,

    /**************
     | APPEARANCE |
     **************/

    'theme.use' => 'default',
    //'theme.controller' => '',
    //'template.cache' => '',
    'template.auto_reload' => false,
    'production' => true,
    'assets' => [
        'caching' => [
            'max_age' => 86400,
            'etag' => false,
        ],
    ],

    /*********************
     | DISCOVERY SERVICE |
     *********************/

    'idpdisco.enableremember' => true,
    'idpdisco.rememberchecked' => true,
    'idpdisco.validate' => true,
    'idpdisco.extDiscoveryStorage' => null,
    'idpdisco.layout' => 'dropdown',

    /*************************************
     | AUTHENTICATION PROCESSING FILTERS |
     *************************************/

    'authproc.idp' => [
        30 => 'core:LanguageAdaptor',
        45 => [
            'class'         => 'core:StatisticsWithAttribute',
            'attributename' => 'realm',
            'type'          => 'saml20-idp-SSO',
        ],
        50 => 'core:AttributeLimit',
        99 => 'core:LanguageAdaptor',
    ],

    'authproc.sp' => [
        90 => 'core:LanguageAdaptor',
    ],

    /**************************
     | METADATA CONFIGURATION |
     **************************/

    'metadatadir' => 'metadata',
    'metadata.sources' => [
        ['type' => 'flatfile'],
    ],
    'metadata.sign.enable' => false,
    'metadata.sign.privatekey' => null,
    'metadata.sign.privatekey_pass' => null,
    'metadata.sign.certificate' => null,

    /****************************
     | DATA STORE CONFIGURATION |
     ****************************/

    'store.type'                    => 'phpsession',
    'store.sql.dsn'                 => 'sqlite:/path/to/sqlitedatabase.sq3',
    'store.sql.username' => null,
    'store.sql.password' => null,
    'store.sql.prefix' => 'SimpleSAMLphp',
    'store.redis.host' => 'localhost',
    'store.redis.port' => 6379,
    'store.redis.prefix' => 'SimpleSAMLphp',
];
