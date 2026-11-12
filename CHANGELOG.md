# [1.1.0](https://github.com/99linesofcode/laravel-module-user/compare/v1.0.1...v1.1.0) (2026-11-12)


### Features

* **user:** give the module a domain User beneath the auth model ([b70f4fb](https://github.com/99linesofcode/laravel-module-user/commit/b70f4fbb973f1a8d43d3fba07d308d5998c8549e))



## [1.0.1](https://github.com/99linesofcode/laravel-module-user/compare/v1.0.0...v1.0.1) (2026-11-12)


### Bug Fixes

* **workbench:** authenticate with the module's auth model ([73871b9](https://github.com/99linesofcode/laravel-module-user/commit/73871b9eda2ec8064d5ff05ab77b3b010a26029d))



# [1.0.0](https://github.com/99linesofcode/laravel-module-user/compare/v0.4.1...v1.0.0) (2026-11-12)


### Bug Fixes

* **deps:** bump brace-expansion from 5.0.9 to 5.0.12 ([#86](https://github.com/99linesofcode/laravel-module-user/issues/86)) ([03dc79a](https://github.com/99linesofcode/laravel-module-user/commit/03dc79a5103cf8e403b32a7ae7cd42af95728bfa))
* **deps:** bump devshell from `4075c8d` to `5278d4d` ([#84](https://github.com/99linesofcode/laravel-module-user/issues/84)) ([7abc392](https://github.com/99linesofcode/laravel-module-user/commit/7abc39205c4f62fa2c063d43ff87455d41be9a5c))
* **deps:** bump follow-redirects from 1.16.0 to 1.16.2 ([#92](https://github.com/99linesofcode/laravel-module-user/issues/92)) ([2f320fe](https://github.com/99linesofcode/laravel-module-user/commit/2f320fea5800eb8b25d2dbb216f75b56e535e207))
* **deps:** bump ip-address from 10.2.0 to 10.7.4 ([#87](https://github.com/99linesofcode/laravel-module-user/issues/87)) ([a18d610](https://github.com/99linesofcode/laravel-module-user/commit/a18d61089ce21e09ebd7a0c85fda32c2c7a83469))
* **deps:** bump source-map-js from 1.2.1 to 1.2.2 ([#88](https://github.com/99linesofcode/laravel-module-user/issues/88)) ([60b2049](https://github.com/99linesofcode/laravel-module-user/commit/60b2049deb0395c3783e2cf697697e8eaab7e4bd))
* **deps:** bump the automated group with 10 updates ([#90](https://github.com/99linesofcode/laravel-module-user/issues/90)) ([80820e2](https://github.com/99linesofcode/laravel-module-user/commit/80820e2f4cf0f88359d4bac3dc053be649b98fd9))
* **migrations:** name the users migration apart from Laravel's stock one ([6a8afd7](https://github.com/99linesofcode/laravel-module-user/commit/6a8afd736d909d06fb7b0d9522e38c2c9b479f8c))


* feat!: meet the skeleton's user contract ([4251e51](https://github.com/99linesofcode/laravel-module-user/commit/4251e51984cef7b2ec55763e7ed4b8c0d49c957e))


### BREAKING CHANGES

* user ids are UUIDs and the module creates the users
table itself. Apps drop Laravel's stock create_users_table migration and
point auth.providers.users.model at Lines\Auth\Infrastructure\Models\User.
No migration converts existing integer ids.

Issue: 0052-laravel-modules-meet-the-skeleton-user-contract



## [0.4.1](https://github.com/99linesofcode/laravel-module-user/compare/v0.4.0...v0.4.1) (2026-10-06)


### Bug Fixes

* **lint:** make composer lint green end to end ([12bc721](https://github.com/99linesofcode/laravel-module-user/commit/12bc721b971d4f7e55ed639c4bfa681aeabf583c))



# [0.4.0](https://github.com/99linesofcode/laravel-module-user/compare/v0.3.2...v0.4.0) (2026-10-06)


### Bug Fixes

* **deps:** bump devshell from `21db3dd` to `4075c8d` ([#81](https://github.com/99linesofcode/laravel-module-user/issues/81)) ([dd012b9](https://github.com/99linesofcode/laravel-module-user/commit/dd012b90ad3b19c5315ef9a31ca6c367fa147b28))


### Features

* **lint:** enforce the layer contract with deptrac ([c0a4afb](https://github.com/99linesofcode/laravel-module-user/commit/c0a4afbfd80f28a4c38874080c71968540c5ca9e))



