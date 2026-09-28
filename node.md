---
layout: default
lang: en
title: VALDR Node
description: How a VALDR node validates blockchain data, synchronizes with peers and maintains local chain state.
permalink: /node/
alt_url: /ru/node/
---
<div class="wrap page">
<header class="page-header"><p class="eyebrow">Node</p><h1>VALDR Node</h1><p class="lead">A VALDR Node validates blockchain data, maintains local chain state and exchanges blocks and transactions with peers.</p></header>
<p>The node is the protocol authority on the local machine. Wallets, miners and the Explorer can use node interfaces, but they do not replace node validation.</p>
<h2>1. Start the node</h2>
<p>A node starts with a selected VALDR network profile and a persistent data directory. Before normal operation, the node checks its network identity, storage state and current chain tip. Persistent storage allows the node to restart without losing validated blockchain state.</p>
<h2>2. Connect to peers</h2>
<p>The node joins the peer-to-peer network and establishes connections with compatible VALDR peers. Network and protocol version checks occur before normal message exchange. Peer limits, payload limits, rate controls and malformed-message penalties protect the node from abusive traffic.</p>
<h2>3. Synchronize the blockchain</h2>
<p>A node that is behind requests missing chain data from peers and synchronizes toward the best valid chain. Competing valid branches are evaluated using cumulative chainwork rather than height alone. If a better valid branch is found, the node can reorganize its active chain while restoring affected UTXO state correctly.</p>
<h2>4. Validate transactions</h2>
<p>Incoming transactions are independently checked by the node. Validation includes transaction structure, signatures, referenced UTXOs, ownership, available value, fee rules and conflict detection. Valid unconfirmed transactions may enter the mempool and propagate to peers according to local relay policy.</p>
<h2>5. Validate blocks</h2>
<p>Every received or locally mined block is checked against consensus rules before it can become part of the active chain. The node verifies the previous-block relationship, block structure, timestamp rules, difficulty, Proof of Work, transactions, UTXO changes and reward limits. Invalid blocks are rejected.</p>
<h2>6. Serve local applications</h2>
<p>The node exposes RPC interfaces for status, chain information, synchronization, balances, transactions, mining information and other operations. RPC is bound to localhost by default. Privileged operations require stronger protection if remote access is deliberately enabled.</p>
<p>The wallet can submit signed transactions to the node. The miner can request block templates. The Explorer can use read-only RPC to index public blockchain data.</p>
<h2>7. Monitor node health</h2>
<p>A healthy node can report chain height, tip hash, chainwork, peer count, mempool state, synchronization status and RPC health. These values help operators verify that the node is running and following the expected network state.</p>
<h2>The role of the node</h2>
<p><strong>Start → verify local state → connect to peers → synchronize → validate transactions → validate blocks → update chain state → relay valid data.</strong></p>
<p>The node is the component that enforces VALDR consensus locally. Other software may display, sign, mine or query data, but accepted blockchain state is determined by node validation.</p>
<div class="next"><a class="button" href="/mining/">Next: mining →</a></div>
</div>
