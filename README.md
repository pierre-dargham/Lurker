Lurker
======

Watch files and/or directories for changes. For usage examples, see [docs/index.md](docs/index.md)

[![Build Status](https://travis-ci.org/totten/Lurker.png?branch=master)](https://travis-ci.org/totten/Lurker)

`lurkerlite` vs `lurker`
========================

`totten/lurkerlite` v1.3 is a fork of `henrikbjorn/lurker` v1.2.  The distinguishing characteristic of `lurkerlite` is
that it has no formal dependencies on other packages, which should make it:

* Less prone to version conflicts and stale dependencies
* Safer to embed in more contexts

`lurkerlite` should be a drop-in replacement for `lurker` *unless* you previously customized the event-dispatcher.  If
you customized the event-dispatcher, see [CHANGELOG.md](CHANGELOG.md).
