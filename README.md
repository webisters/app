# Webisters App

Webisters App Project This project is intended as an application-level codebase that can be configured and extended for local or deployed environments.

## What Is Included
- Structured patterns that align with MVC-style application architecture.
- Database-oriented abstractions for safer and clearer data access.
- Tools for handling HTTP requests, responses, and related integrations.

## Setup
```bash
composer global require webisters/webisters
# Optional (Windows): automatically adds Composer global bin-dir to PATH
composer global exec webisters setup

# Create the project (preferred)
webisters new-app app

# If `webisters` is not on PATH yet, use the no-PATH fallback:
# composer global exec webisters new-app app

cd app
composer install
```

## Run Locally
```bash
php webisters start
```
If the custom runtime command is unavailable, use: `php -S localhost:8000 -t public`.

## Project Structure
- `app/`: Application code, modules, and domain logic.
- `boot/`: Bootstrap and startup configuration scripts.
- `public/`: Public web root and entrypoint files.
- `tests/`: Automated tests and supporting fixtures.

## Support
- Issues: https://github.com/webisters/app/issues
- Source: https://github.com/webisters/app
- Documentation: https://webisters.com
- Forum: https://github.com/webisters/forum
- Email: support@webisters.com

## License
MIT
