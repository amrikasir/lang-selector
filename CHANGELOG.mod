# Changelog

All notable changes to this project will be documented in this file.

## [Unreleased]
-

## [v1.1.0] - 2026-01-11
### Added
- Added dependency `vemcogroup/laravel-translation` v3.x to provide JSON translation management.

### Changed
- Relaxed `illuminate/support` constraint to `>=11.0` to support Laravel 11 and above.
- Updated composer.json accordingly.

### Notes
- After pulling these changes, run `composer update` to refresh `composer.lock` and install the new dependency.
- To publish the release on GitHub: create an annotated tag `v1.1.0` and create a release with the title and notes matching this CHANGELOG entry.

Commit: https://github.com/amrikasir/lang-selector/commit/cf7b42ecda66c0653e8f99c54698342d35d58928
