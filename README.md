# The PHP OCI8 Extension

Use the PHP OCI8 extension to access Oracle Database.

Documentation is at https://www.php.net/oci8

Use `pecl install oci8` to install for PHP 8.2 and PHP 8.3.

Use `pecl install oci8-3.2.1` to install for PHP 8.1.

Use `pecl install oci8-3.0.1` to install for PHP 8.0.

Use `pecl install oci8-2.2.0` to install for PHP 7.

If your PHP was built with DTrace enabled, then set the environment variable
PHP_DTRACE=yes before running `pecl install oci8`. For example, on Linux:

    export PHP_DTRACE=yes

You may additionally need the dtrace-devel or systemtap-sdt-devel package
installed.

The PHP OCI8 extension can be linked with Oracle client libraries from Oracle
Database 11.2 or later. These libraries are found in your database
installation, or in the free Oracle Instant Client from

  https://www.oracle.com/database/technologies/instant-client.html

Install the 'Basic' or 'Basic Light' Instant Client package. If building from
source, then also install the SDK package.

Oracle Database's standard cross-version connectivity applies. For example, PHP
OCI8 linked with Instant Client 19c can connect to Oracle Database 11.2 or
later. See Oracle Support's note "Oracle Client / Server Interoperability
Support" (ID 207303.1) for details.

A sample configuration php.ini file is at
  https://github.com/php/pecl-database-oci8/blob/main/oci8.ini

From PHP 8.4 the source code for PHP OCI8 is at:
  https://github.com/php/pecl-database-oci8/

For earlier versions, see the PHP source, e.g.:
  https://github.com/php/php-src/tree/PHP-8.3/ext/oci8
