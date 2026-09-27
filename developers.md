---
layout: default
lang: en
title: Developers
description: Entry points for developers working with VALDR Core, RPC and the network.
permalink: /developers/
---
<div class="wrap page">
<header class="page-header"><p class="eyebrow">Developers</p><h1>Build with VALDR</h1><p class="lead">Use the node, CLI, RPC and Explorer as separate surfaces with clear security boundaries.</p></header>
<h2>Core components</h2>
<p>VALDR Core includes the node daemon, command-line client, wallet functionality, miner and networking stack. The Explorer is intentionally separate and read-only.</p>
<h2>RPC boundaries</h2>
<p>Read-only methods can be exposed through controlled interfaces. Privileged methods must remain protected and should not be made publicly reachable by default.</p>
<h2>Consensus changes</h2>
<p>Changes to consensus rules, wire protocol or storage formats require corresponding tests and specification updates. Runtime configuration must not silently redefine block validity.</p>
<h2>Testing expectations</h2>
<p>Build, unit tests, race checks, synchronization, reorganization, fee policy, wallet encryption and deployment smoke checks are part of the engineering gate for release work.</p>
<div class="note">Developer documentation will grow as public interfaces are frozen. Do not treat Testnet parameters as final Mainnet parameters.</div>
<div class="next"><a class="button" href="/node/">Run a node →</a></div>
</div>
