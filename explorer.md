---
layout: default
lang: en
title: VALDR Explorer
description: Read-only inspection of VALDR blocks, transactions, addresses, mempool and network status.
permalink: /explorer/
alt_url: /ru/explorer/
---
<div class="wrap page">
<header class="page-header">
<p class="eyebrow">Explorer</p>
<h1>VALDR Explorer</h1>
<p class="lead">VALDR Explorer is a separate read-only service for inspecting blockchain and network data.</p>
</header>

<p>It connects to <code>valdrd</code> through read-only RPC, maintains its own restart-safe index and provides search and viewing tools for blocks, transactions, addresses, mempool data and network status. It does not sign transactions, mine blocks or perform privileged node operations.</p>

<h2>1. Search the blockchain</h2>
<p>Explorer supports exact search by <strong>block height, block hash, transaction ID and VDR address</strong>. Search is observational: it reads indexed blockchain data without changing network state.</p>

<h2>2. Inspect blocks</h2>
<p>A block view can show the block header, height, hash, previous-block reference, timestamp, difficulty and included transactions. This allows a user to verify where a transaction was included and how the block relates to the surrounding chain.</p>

<h2>3. Inspect transactions</h2>
<p>A transaction view can expose transaction ID, inputs, outputs, values and confirmation context. For UTXO-based accounting, this shows which outputs were consumed and which new outputs were created.</p>

<h2>4. Inspect an address</h2>
<p>An address page can show <strong>balance, transaction history and current UTXOs</strong>. Explorer derives this information from its indexed view of node data. It never receives the user's private key.</p>

<h2>5. Observe the mempool</h2>
<p>The mempool view shows indexed unconfirmed transactions and summary information. A transaction visible in the mempool is not yet the same as a transaction confirmed in a block.</p>

<h2>6. Observe network state</h2>
<p>Explorer can expose read-only network information such as synchronization status, peers, difficulty and recent block intervals. This provides visibility without giving Explorer consensus authority.</p>

<h2>7. Handle reorganizations</h2>
<p>Explorer must detect blockchain reorganizations. When the active chain changes, the indexer rolls back affected heights and reindexes the new active branch so block, transaction and address data remain consistent with the node.</p>

<h2>8. Automation API</h2>
<p>The Explorer design includes a REST API under <code>/api/v1</code> for status, recent blocks, block details, transaction details, address data and mempool summaries.</p>

<h2>The role of Explorer</h2>
<p><strong>Node → read-only RPC → Explorer index → search / views / API.</strong></p>
<p>The node remains the source of protocol truth. Explorer provides visibility and indexing.</p>

<div class="next"><a class="button" href="/getting-started/">Next: Getting Started →</a></div>
</div>
