# Test Configuration Requirements

Check the [details.inc](details.inc) file for the configuration details.

Set the following environment variables to provide credentials for the PHP tests:

`PHP_OCI8_TEST_USER` - the username of the database schema user to be used for testing.

`PHP_OCI8_TEST_PASS` - the password of the database schema user to be used for testing.

`PHP_OCI8_TEST_DB` - the connection string that points to your database's location.

`PHP_OCI8_TEST_DRCP` - for running DRCP tests. It should be set to ``true``
to run DRCP tests. Otherwise, DRCP-specific tests are skipped.

`PHP_OCI8_TEST_SYSUSER` - the SYSDBA user required for specific tests. These
tests are skipped, if this environment variable is not set.

`PHP_OCI8_TEST_SYSPASS` - the password for the SYSDBA user.

# Running the tests

To run the tests, execute:
```
php <testname>

```
Ensure that the Oracle Client library path is set in the PATH environment variable.
