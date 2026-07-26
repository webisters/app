# Contributing

Thank you for contributing to Webisters. Contributions of all sizes are
welcome, including bug reports, feature suggestions, documentation
improvements, tests, and code changes.

## Ways to contribute

You can contribute by:

- Reporting reproducible bugs
- Suggesting features or improvements
- Improving documentation
- Adding or improving tests
- Fixing approved issues
- Reviewing open pull requests

Before starting work, comment on the relevant issue and wait for a maintainer
to assign it to you. This avoids duplicated effort and confirms that the
proposed approach fits the project.

## Security issues

Do not report security vulnerabilities through a public GitHub issue.

Follow [SECURITY.md](SECURITY.md) and report vulnerabilities privately to
thewebisters@gmail.com.

## Requirements

The development environment requires:

- PHP 8.2 or later
- Composer 2.x
- MariaDB or MySQL for database tests
- PHP extensions: `intl`, `sodium`, `gd`, `json`, `fileinfo`, `curl`,
  `mysqli`, `simplexml`, `dom`, and `libxml`

## Setup

Run all commands from the repository root.

Install the dependencies:

```shell
composer install
