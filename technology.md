---
layout: default
lang: en
title: Technology
description: The core technical model behind VALDR.
permalink: /technology/
---
<div class="wrap page">
<header class="page-header"><p class="eyebrow">Technology</p><h1>How VALDR is built</h1><p class="lead">A compact overview of the chain, transactions, consensus and network architecture.</p></header>
<div class="steps">
<div class="step"><h2>UTXO transaction model</h2><p>Transactions spend existing unspent outputs and create new outputs. Nodes verify ownership, signatures, available value and double-spend rules before acceptance.</p></div>
<div class="step"><h2>Proof of Work</h2><p>Miners build candidate blocks and search for a nonce that satisfies the current target. Nodes independently verify Proof-of-Work before accepting a block.</p></div>
<div class="step"><h2>Cumulative chainwork</h2><p>Competing valid branches are resolved using cumulative work rather than height alone. Reorganizations use persisted undo data to restore state safely.</p></div>
<div class="step"><h2>P2P protocol</h2><p>Nodes discover peers, negotiate protocol compatibility, relay transactions and blocks, and synchronize chain data without a central transaction server.</p></div>
<div class="step"><h2>Persistent indexed storage</h2><p>VALDR uses indexed persistent chain state for blocks, transactions, UTXOs, metadata and reorganization support.</p></div>
<div class="step"><h2>Read-only Explorer</h2><p>The Explorer is a separate observation service. It does not sign transactions, mine blocks or define consensus.</p></div>
</div>
<div class="next"><a class="button" href="/how-it-works/">How a transaction moves through VALDR →</a></div>
</div>
