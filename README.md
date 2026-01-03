# The PHP OCI8 Extension

Use the PHP OCI8 extension to access Oracle Database.

Documentation is at https://www.php.net/oci8.

Installation
--------------------
The PHP OCI8 extension is available in the PECL repository [here](https://pecl.php.net/package/oci8).

Use `pecl install oci8` to install for PHP 8.2 and newer versions.

Use `pecl install oci8-3.2.1` to install for PHP 8.1.

Use `pecl install oci8-3.0.1` to install for PHP 8.0.

Use `pecl install oci8-2.2.0` to install for PHP 7.

If your PHP was built with DTrace enabled, then set the environment variable
PHP_DTRACE=yes before running `pecl install oci8`. For example, on Linux:

    export PHP_DTRACE=yes

You may additionally need the dtrace-devel or systemtap-sdt-devel package
installed.

On Windows, pre-compiled OCI8 DLLs are available for download and quick use from
the [PECL repository](https://pecl.php.net/package/oci8). You may use the DLL directly
by including them in the `php.ini` file.
See [OCI8 installation](https://www.php.net/manual/en/oci8.installation.php) for more details.

The PHP OCI8 extension can be linked with Oracle Client libraries from Oracle
Database 11.2 or later. These libraries are found in your database
installation, or in the free Oracle Instant Client packages from

  https://www.oracle.com/database/technologies/instant-client.html

Install the 'Basic' or 'Basic Light' Instant Client package. If building from
source, then also install the SDK package.

Oracle Database's standard cross-version connectivity applies. For example, PHP
OCI8 linked with Instant Client 19c can connect to Oracle Database 11.2 or
later. See Oracle Support's note "Oracle Client / Server Interoperability
Support" (ID 207303.1) for details.

Tests
-----

To run the tests, see [tests/README.md](tests/README.md).

Useful Links
------------

A sample configuration php.ini file is at
  https://github.com/php/pecl-database-oci8/blob/main/oci8.ini

From PHP 8.4, the source code for PHP OCI8 is at:
  https://github.com/php/pecl-database-oci8/

For earlier versions, see the PHP source:
  https://github.com/php/php-src/tree/PHP-8.3/ext/oci8
