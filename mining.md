---
layout: default
lang: en
title: VALDR Mining
description: How VALDR mining builds candidate blocks and performs Proof of Work.
permalink: /mining/
alt_url: /ru/mining/
---
<div class="wrap page">
<header class="page-header">
<p class="eyebrow">Mining</p>
<h1>VALDR Mining</h1>
<p class="lead">VALDR mining is the process of building candidate blocks and searching for valid Proof of Work.</p>
</header>

<p>The miner does not decide consensus by itself. It works with a synchronized VALDR Node, receives a block template, performs the hash search and submits a found block back to the node for full validation.</p>

<h2>1. Start with a synchronized node</h2>
<p>Mining depends on current chain state. Before mining starts, the connected node should be synchronized and able to report the current height, tip, difficulty and mempool state. The miner uses the node as its source for valid chain state and candidate block data.</p>

<h2>2. Request a block template</h2>
<p>The miner obtains a block template through the node mining API. The template contains the data required to construct a candidate block, including the current chain context and eligible transactions. Consensus validation remains inside <code>valdrd</code>.</p>

<h2>3. Select transactions</h2>
<p>Candidate transactions are selected from the mempool. In the v0.2 mining policy, transactions are ordered by fee rate, with a deterministic transaction-ID tie-break when required. The resulting candidate must remain within the configured block-size limit.</p>

<h2>4. Build the candidate block</h2>
<p>The miner assembles a candidate block that references the current chain tip. The block includes its transaction set, timestamp and mining fields required for Proof of Work. The coinbase value must remain within the permitted subsidy plus valid transaction fees.</p>

<h2>5. Search for valid Proof of Work</h2>
<p>The miner repeatedly changes the nonce and calculates the candidate block hash. The objective is to find a hash that satisfies the current difficulty target. A candidate that does not satisfy the target is not a valid mined block.</p>

<h2>6. Submit the block to the node</h2>
<p>When the miner finds a valid Proof-of-Work candidate, it submits the block to the VALDR Node. The node performs full consensus validation, including block structure, chain relationship, difficulty, Proof of Work, transactions, UTXO effects, reward limits and other consensus-critical rules.</p>

<p>A miner cannot force an invalid block into the chain.</p>

<h2>7. Accepted blocks propagate</h2>
<p>If the node accepts the block, it becomes part of the node's active chain and is propagated to connected peers. Other nodes perform their own validation before accepting it.</p>

<h2>Mining status</h2>
<p>The miner can report operational data such as <strong>hashrate, current height, difficulty, accepted blocks, rejected templates and current template fees</strong>. These values describe miner operation; they do not replace node consensus validation.</p>

<h2>The complete flow</h2>
<p><strong>Synchronized Node → Block Template → Transaction Selection → Candidate Block → Nonce Search → Proof of Work → Node Validation → Accepted Block → P2P Propagation.</strong></p>

<p>This division is intentional: the miner performs Proof-of-Work computation, while the node remains responsible for consensus.</p>

<div class="next"><a class="button" href="/explorer/">Next: Explorer →</a></div>
</div>
