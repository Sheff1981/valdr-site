---
layout: default
lang: en
title: Getting Started with VALDR
description: A practical path from verified software to a synchronized node, wallet, mining and transaction verification.
permalink: /getting-started/
alt_url: /ru/getting-started/
---
<div class="wrap page">
<header class="page-header">
<p class="eyebrow">Getting Started</p>
<h1>Getting Started with VALDR</h1>
<p class="lead">Follow the system in order: verify the software, create a wallet, run a node, synchronize, mine or receive VDR, send a transaction and verify the result.</p>
</header>

<div class="note"><strong>Current stage:</strong> VALDR development is centered on Devnet/Testnet readiness. Do not treat Testnet software, parameters or VDR units as Mainnet-final.</div>

<h2>1. Obtain verified VALDR software</h2>
<p>Use only an official build whose version, source revision, target platform, file size, SHA-256 checksum and release provenance are published and can be verified.</p>
<p>If no verified public artifact is available for your platform, do not substitute an unofficial executable merely because the filename looks correct.</p>

<h2>2. Verify the artifact</h2>
<p>Calculate the SHA-256 hash locally and compare it with the checksum published for that exact artifact. When provenance or signing information is available, verify it as well before execution.</p>
<p>If any release identity, checksum or provenance value does not match, stop and investigate.</p>

<h2>3. Create or open a wallet</h2>
<p>Create the wallet locally and protect its credentials. A wallet generates and manages your VALDR address and signs transactions locally.</p>
<p>Private keys must not be transmitted through P2P or RPC. Share only the public address when you want to receive VDR.</p>

<h2>4. Start a VALDR Node</h2>
<p>Run the node with the intended network profile and persistent data directory. The node validates blockchain data, stores local chain state and connects to compatible peers.</p>
<p>Privileged RPC should remain local by default unless remote access is deliberately configured and protected.</p>

<h2>5. Wait for synchronization</h2>
<p>Before relying on balances, mining or transaction status, allow the node to synchronize with the network.</p>
<p>Check synchronization state, current height, chain tip and peer connectivity. A node that is still catching up does not yet have the latest validated chain state.</p>

<h2>6. Obtain VDR for the active network</h2>
<p>VDR can enter your wallet through a valid incoming transaction or through mining on the active development network.</p>
<p>For Testnet, VDR is used for protocol testing and does not represent Mainnet-final economics or a promise of monetary value.</p>

<h2>7. Send a transaction</h2>
<p>Create the transaction in the wallet, select the recipient address and amount, and sign locally. The signed transaction is submitted to the node.</p>
<p>The node validates it and, if accepted under the applicable policy, may place it in the mempool and relay it to peers.</p>

<h2>8. Wait for block inclusion</h2>
<p>A transaction in the mempool is not yet confirmed. A miner must include it in a candidate block and find valid Proof of Work. The resulting block must then pass independent node validation.</p>

<h2>9. Verify the result</h2>
<p>After block acceptance, verify the transaction through your node or through the VALDR Explorer when an official Explorer endpoint is published.</p>
<p>Explorer can show block, transaction and address data, but the node remains the source of protocol truth.</p>

<h2>Recommended path</h2>
<p><strong>Verify software → Wallet → Node → Synchronize → Receive or Mine → Send → Block confirmation → Explorer verification.</strong></p>

<div class="next"><a class="button" href="/wallet/">Next: Wallet →</a></div>
</div>
