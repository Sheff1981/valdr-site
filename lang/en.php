<?php
return [
'a11y'=>['skip'=>'Skip to content','primary_nav'=>'Primary navigation','menu'=>'Menu'],
'nav'=>['home'=>'Home','about'=>'About','story'=>'Story','technology'=>'Technology','download'=>'Download','verify'=>'Verify','mining'=>'Mining','node'=>'Run a Node','wallet'=>'Wallet','explorer'=>'Explorer','security'=>'Security','roadmap'=>'Roadmap','community'=>'Community','faq'=>'FAQ','docs'=>'Documentation','releases'=>'Releases','more'=>'More'],
'status'=>['testnet'=>'VALDR TESTNET','mainnet_not_launched'=>'Mainnet is not launched'],
'buttons'=>['download'=>'Download VALDR','explore'=>'Explore Network','story'=>'Read the Story','source'=>'View Source','verify'=>'Verify Downloads','docs'=>'Read Documentation'],
'footer'=>['line'=>'NOT A TOKEN. A CHAIN.','testnet_notice'=>'VALDR is currently in Testnet development. Testnet VDR has no promised monetary value.','project'=>'Project','resources'=>'Resources','source'=>'Source','no_investment'=>'No ICO, presale, exchange listing or investment promise.'],
'pages'=>[
'home'=>[
 'title'=>'VALDR','meta_title'=>'VALDR (VDR) — Independent Proof-of-Work Blockchain','meta_description'=>'VALDR is an independent Proof-of-Work cryptocurrency running on its own blockchain. Testnet development is in progress.','kicker'=>'Independent blockchain','lead'=>'Own blockchain. Proof of Work. Open network.'
],
'about'=>[
 'title'=>'What is VALDR?','meta_title'=>'What is VALDR (VDR)?','meta_description'=>'VALDR is an independent Proof-of-Work cryptocurrency with its own Go blockchain, UTXO model, P2P network and native VDR coin.','kicker'=>'About VALDR','lead'=>'VALDR is an independent Proof-of-Work cryptocurrency running on its own blockchain.',
 'sections'=>[
  ['heading'=>'A chain, not a token','paragraphs'=>['VDR is the native coin of the VALDR blockchain. Consensus, transactions, mining and ownership do not depend on Ethereum, BNB Chain, Solana or another network.'],'bullets'=>['Own Go blockchain implementation','Proof of Work','UTXO transaction model','Independent P2P nodes','Native VDR addresses and coin']],
  ['heading'=>'What exists today','paragraphs'=>['The v0.2 line has implemented and CI-verified the hardened node, storage v2, P2P v2, chainwork/reorganization, fees, mempool policy, full synchronization, wallet encryption, Explorer service and Testnet runtime/Linux/Docker infrastructure. VALDR Desktop is in active development. Public Testnet and Mainnet have not been launched.']],
  ['heading'=>'Project philosophy','paragraphs'=>['Not power over others. Control over your own. Your keys. Your coin. Your node. Your choice. The Nordic identity is a modern visual and philosophical foundation, not a claim of invented ancient history.']]
 ]
],
'story'=>[
 'title'=>'The VALDR Story','meta_title'=>'The Story of VALDR','meta_description'=>'How VALDR moved from a simple idea and a Bitcoin Core experiment to an independent Go Proof-of-Work blockchain.','kicker'=>'From idea to chain','lead'=>'VALDR began with a simple question: what if we build our own coin — not another token on somebody else’s network?',
 'sections'=>[
  ['heading'=>'The idea','paragraphs'=>['The first reference point was Bitcoin: a network where ownership and transaction validity are enforced by the protocol itself. An early Bitcoin Core experiment helped clarify the direction, but the goal became a standalone VALDR implementation.']],
  ['heading'=>'A separate Go blockchain','paragraphs'=>['The active project moved to Go and kept the core principles of a Bitcoin-like monetary network: UTXO accounting, Proof of Work, independent nodes, signed transactions and a native coin. The archived Bitcoin Core experiment remains history, not the active architecture.']],
  ['heading'=>'Build before market','paragraphs'=>['VALDR is developed in a strict sequence: specification → implementation → build → test → verification → next stage. AI tools are used as a technical development partner. VALDR did not begin with an ICO, presale or pre-sold token. The network is being built before any market discussion.']],
  ['heading'=>'Timeline','cards'=>[
   ['title'=>'Idea','text'=>'Create a native coin and an independent blockchain.'],
   ['title'=>'Bitcoin Core experiment','text'=>'Early technical experiment, later archived.'],
   ['title'=>'Own Go blockchain','text'=>'Standalone VALDR implementation becomes the active architecture.'],
   ['title'=>'Devnet v0.1','text'=>'Working three-node Devnet with wallet, miner, P2P, RPC/CLI and persistence.'],
   ['title'=>'Hardened v0.2','text'=>'Stages 0–11 implemented and CI-verified.'],
   ['title'=>'VALDR Desktop','text'=>'In development on the v0.2 branch.'],
   ['title'=>'Public Testnet','text'=>'Planned; not launched.'],
   ['title'=>'Future Mainnet','text'=>'Not launched; requires a separately approved specification.']]
  ]
 ]
],
'technology'=>[
 'title'=>'Technology','meta_title'=>'VALDR Technology','meta_description'=>'Confirmed VALDR v0.2 technical architecture: Go, SHA-256 Proof of Work, UTXO, P2P v2, chainwork, reorg, encrypted wallet and Testnet.','kicker'=>'Protocol','lead'=>'Only confirmed characteristics from the active VALDR Master Specification and repository are listed here.',
 'sections'=>[
  ['heading'=>'Core protocol','cards'=>[
   ['title'=>'Independent chain','text'=>'Single canonical Go blockchain implementation.'],['title'=>'Proof of Work','text'=>'SHA-256 block hashing with network-profile difficulty rules.'],['title'=>'UTXO','text'=>'Inputs spend confirmed unspent outputs; value is conserved and fees are implicit.'],['title'=>'Chainwork + reorg','text'=>'The active branch is selected by cumulative chainwork with atomic undo/reconnect handling.'],['title'=>'P2P v2','text'=>'Network-separated framing, version negotiation, checksums, limits and abuse protections.'],['title'=>'Full sync','text'=>'Headers-first synchronization with validation before block-body download.']]],
  ['heading'=>'Testnet profile','bullets'=>['Chain ID: valdr-testnet-1','Target block interval: 60 seconds','P2P: v2','P2P port: 17333','RPC: 17332, localhost by default','Address prefix: VDR1','Maximum canonical block size: 1,000,000 bytes','Current Testnet subsidy: 50 Testnet VDR for protocol testing only']],
  ['heading'=>'Wallet and services','bullets'=>['Encrypted wallet v2; no plaintext private key in new wallet files','scrypt-derived key + AES-256-GCM','Read-only reorg-aware Explorer service','RPC localhost by default','BadgerDB-backed Storage v2','Docker and Linux service deployment for infrastructure']]
 ]
],
'mining'=>[
 'title'=>'Mining','meta_title'=>'Mining VALDR Testnet','meta_description'=>'How VALDR Proof-of-Work mining works, the roles of node and miner, and the current Testnet limitations.','kicker'=>'Proof of Work','lead'=>'VALDR uses Proof of Work. Mining proposes blocks; every node independently validates the result.',
 'notice'=>['type'=>'warning','title'=>'Testnet only','text'=>'Testnet VDR has no promised monetary value. Current Testnet reward parameters are protocol-testing parameters, not a promise of Mainnet economics.'],
 'sections'=>[
  ['heading'=>'What mining does','paragraphs'=>['A miner builds a candidate block from valid transactions, performs Proof-of-Work hashing and submits the block to a VALDR node. The node verifies the block under consensus rules before it becomes part of the active chain.']],
  ['heading'=>'Home mining','paragraphs'=>['The official software includes a miner for Devnet/Testnet testing. Desktop mining is intended to remain explicit and opt-in; it must never start silently in a browser or on a user’s computer.']],
  ['heading'=>'Node, miner and hardware','cards'=>[['title'=>'Node','text'=>'Validates chain rules, stores chain state, synchronizes peers and serves local RPC.'],['title'=>'Miner','text'=>'Requests/builds work, hashes candidate headers and submits valid blocks.'],['title'=>'CPU / ASIC considerations','text'=>'The current project is validating protocol behavior. No profitability or future hardware economics are promised.']]]
 ]
],
'node'=>[
 'title'=>'Run a Node','meta_title'=>'Run a VALDR Node','meta_description'=>'Understand VALDR nodes, outbound-only Desktop mode, public full nodes and the current Testnet infrastructure status.','kicker'=>'Verify the network yourself','lead'=>'A node verifies blocks and transactions independently instead of trusting a third-party copy of the chain.',
 'notice'=>['type'=>'info','title'=>'Current status','text'=>'Node/Testnet runtime software is implemented and CI-verified. VALDR Desktop is still in development; public Testnet infrastructure has not been launched.'],
 'sections'=>[
  ['heading'=>'What is a node?','paragraphs'=>['A VALDR node stores validated blockchain state, checks Proof of Work and transaction rules, synchronizes with peers and relays accepted data. If your computer is offline, it simply stops participating; when restarted it resumes synchronization from persisted state.']],
  ['heading'=>'Simple user','paragraphs'=>['VALDR Desktop is being built to launch a local outbound-only node automatically. This mode is designed for ordinary home networks: no router port forwarding and no public inbound P2P port are required.']],
  ['heading'=>'Advanced and server operators','cards'=>[['title'=>'Advanced desktop','text'=>'An explicit advanced option is planned for publicly reachable full-node operation.'],['title'=>'Linux server','text'=>'Stage 11 includes Linux/Docker deployment and localhost-only RPC defaults for node infrastructure.'],['title'=>'Public node','text'=>'Public nodes require deliberate P2P exposure, monitoring and security hardening. They are not enabled by default.']]]
 ]
],
'wallet'=>[
 'title'=>'Wallet','meta_title'=>'VALDR Wallet Security','meta_description'=>'VALDR wallet basics: VDR addresses, private keys, encrypted wallet files, backup, send and receive.','kicker'=>'Your keys stay local','lead'=>'A wallet controls the private key used to authorize spending. The official website never needs that key.',
 'notice'=>['type'=>'danger','title'=>'Never enter a private key here','text'=>'This website is not a custodial wallet and does not collect private keys, wallet passphrases or wallet passwords.'],
 'sections'=>[
  ['heading'=>'Core concepts','cards'=>[['title'=>'VDR address','text'=>'A public destination used to receive VDR. Current addresses use the VDR1 prefix.'],['title'=>'Private key','text'=>'The secret authority to sign spending transactions. Keep it private and offline-backed-up where appropriate.'],['title'=>'Encrypted wallet','text'=>'Wallet v2 encrypts private-key material locally using a passphrase-derived key and authenticated encryption.']]],
  ['heading'=>'Send and receive','paragraphs'=>['Sending creates and signs a transaction locally, then broadcasts it through the node. Receiving only requires sharing your public VDR address. Transactions are intended to be treated as irreversible once confirmed.']],
  ['heading'=>'Backup','paragraphs'=>['A wallet backup protects against device loss or storage failure. Keep backups separate from the computer running the node, and never upload private-key material to this website.']]
 ]
],
'security'=>[
 'title'=>'Security','meta_title'=>'VALDR Security','meta_description'=>'VALDR website and wallet security principles, download verification, localhost RPC and non-custodial design.','kicker'=>'Verify, do not trust','lead'=>'Security is a boundary condition for VALDR, not a marketing feature.',
 'sections'=>[
  ['heading'=>'Website boundaries','bullets'=>['No private-key or wallet-password forms','No browser cryptomining','No analytics or hidden trackers by default','No remote arbitrary JavaScript','No automatic executable downloads','Content Security Policy and restrictive browser headers']],
  ['heading'=>'Node and wallet boundaries','bullets'=>['RPC binds to localhost by default','Private keys and passphrases never cross P2P or node RPC','Encrypted wallet v2 stores no plaintext private key in new wallet files','Desktop core assets are intended to be locally bundled','Public-node mode is explicit, not default']],
  ['heading'=>'Downloads','paragraphs'=>['Installers will only be published when real release artifacts, hashes and signing metadata exist. Until then, the website deliberately shows no executable download links.']]
 ]
],
'verify'=>[
 'title'=>'Verify Downloads','meta_title'=>'Verify VALDR Downloads','meta_description'=>'How to verify future VALDR release files with SHA-256 and a signed release manifest. No fake hashes are published.','kicker'=>'Release integrity','lead'=>'Verification helps detect corrupted or replaced release files before you run them.',
 'notice'=>['type'=>'info','title'=>'No verified installer release yet','text'=>'There is currently no official VALDR Desktop installer release manifest, so this page does not publish placeholder hashes or signatures.'],
 'sections'=>[
  ['heading'=>'Verification model','bullets'=>['Download the release file only from the official release location','Download the signed release manifest','Verify the manifest signature against the published release key','Compute SHA-256 of your downloaded file','Compare every character of the computed hash with the signed manifest']],
  ['heading'=>'Windows','code'=>'certUtil -hashfile <VALDR-release-file.exe> SHA256'],
  ['heading'=>'macOS','code'=>'shasum -a 256 <VALDR-release-file.dmg>'],
  ['heading'=>'Linux','code'=>'sha256sum <VALDR-release-file.tar.gz>'],
  ['heading'=>'Do not skip the signature step','paragraphs'=>['A matching hash proves file identity against a manifest. A trusted signature is what ties that manifest to the project release process. Exact commands and release-key fingerprints will be published only when the real signing pipeline exists.']]
 ]
],
'faq'=>[
 'title'=>'FAQ','meta_title'=>'VALDR FAQ','meta_description'=>'Frequently asked questions about VALDR, Testnet, mining, wallets, nodes and Mainnet status.','kicker'=>'Questions','lead'=>'Short answers based on the current v0.2 project state.',
 'sections'=>[
  ['heading'=>'Is VALDR an Ethereum, BNB Chain or Solana token?','paragraphs'=>['No. VALDR is its own blockchain and VDR is its native coin.']],
  ['heading'=>'Is Mainnet live?','paragraphs'=>['No. Mainnet has not been launched and its final monetary specification has not been approved.']],
  ['heading'=>'Can I buy or trade VDR?','paragraphs'=>['The official project has no ICO, presale or exchange listing at this stage. Testnet VDR has no promised monetary value.']],
  ['heading'=>'Can I run a node at home?','paragraphs'=>['Yes in principle. The Desktop design targets an outbound-only local node for ordinary computers, while public inbound node operation is an advanced mode. Desktop itself is still in development.']],
  ['heading'=>'Does the website hold my keys?','paragraphs'=>['No. The website is non-custodial and must never request or store private keys, passphrases or wallet passwords.']],
  ['heading'=>'Where are downloads?','paragraphs'=>['There are no verified public Desktop installers yet. Download buttons remain disabled until genuine signed release artifacts exist.']]
 ]
],
'docs'=>[
 'title'=>'Documentation','meta_title'=>'VALDR Documentation','meta_description'=>'Official VALDR documentation entry points for users, node operators, developers and release verification.','kicker'=>'Documentation','lead'=>'The active technical source of truth is the v0.2 branch and its latest Master Specification.',
 'sections'=>[
  ['heading'=>'User documentation','cards'=>[['title'=>'Wallet','text'=>'Keys, addresses, backup, send and receive.'],['title'=>'Run a Node','text'=>'Node roles, home operation and server operation.'],['title'=>'Mining','text'=>'Proof of Work and current Testnet limitations.'],['title'=>'Verify Downloads','text'=>'Release hash/signature verification process.']]],
  ['heading'=>'Developer / operator source','paragraphs'=>['The canonical implementation lives in Sheff1981/valdr-core, branch valdr-v0.2. The latest Master Specification at the time this site was prepared is v0.2.4. Website content must be refreshed whenever verified product status changes.']]
 ]
],
'explorer'=>[
 'title'=>'Explorer','meta_title'=>'VALDR Testnet Explorer','meta_description'=>'VALDR Explorer status. The website is not the block explorer; a separate read-only Testnet Explorer endpoint will be linked when public.','kicker'=>'Network visibility','lead'=>'VALDR Explorer is a separate read-only service. This website does not duplicate it.',
 'notice'=>['type'=>'info','title'=>'Testnet Explorer — coming soon','text'=>'The Explorer software is implemented and CI-verified, but no official public Explorer endpoint has been published yet.'],
 'sections'=>[
  ['heading'=>'What the Explorer provides','bullets'=>['Latest blocks and block details','Transaction lookup','Address balance/history/UTXO view','Mempool and network status','Difficulty and recent block timing','Reorg-aware indexing']],
  ['heading'=>'Read-only by design','paragraphs'=>['The Explorer has no private keys, signing controls, mining controls or privileged node operations. The node remains the source of truth.']]
 ]
],
'community'=>[
 'title'=>'Community','meta_title'=>'VALDR Community','meta_description'=>'Official VALDR community channels will be listed here when they exist. No placeholder social links are invented.','kicker'=>'Community','lead'=>'Official channels are added only after they are created and verified.',
 'sections'=>[
  ['heading'=>'Current channels','cards'=>[['title'=>'GitHub','text'=>'Development source is maintained under Sheff1981 on GitHub.'],['title'=>'Telegram','text'=>'Coming soon.'],['title'=>'VK','text'=>'Coming soon.'],['title'=>'X','text'=>'Coming soon.'],['title'=>'Reddit','text'=>'Coming soon.'],['title'=>'Discord','text'=>'Coming soon.']]],
  ['heading'=>'Avoid impersonation','paragraphs'=>['Until an official channel is linked from this page, do not assume that an account using the VALDR name represents the project.']]
 ]
],
'releases'=>[
 'title'=>'Releases','meta_title'=>'VALDR Releases','meta_description'=>'Official VALDR releases and release verification status. No installer artifacts have been published yet.','kicker'=>'Release channel','lead'=>'Only verified artifacts belong here.',
 'notice'=>['type'=>'info','title'=>'No public installer release yet','text'=>'The GitHub repository currently has no published Releases. Cross-platform installers and the release-signing pipeline are a later v0.2 stage.'],
 'sections'=>[
  ['heading'=>'Release policy','bullets'=>['No release is listed without a real artifact','Every artifact must have SHA-256','Release manifest must be signed','Release notes must identify commit and network','CI/runtime verification must be green before a release is marked ready']],
  ['heading'=>'Development source','paragraphs'=>['Current development happens on valdr-v0.2. Development commits are not equivalent to published installer releases.']]
 ]
],
'download'=>[
 'title'=>'Download VALDR','meta_title'=>'Download VALDR Testnet','meta_description'=>'VALDR Testnet download page. Verified installers will appear only after the cross-platform release and signing pipeline is complete.','kicker'=>'Official software','lead'=>'Download only verified VALDR software. No public Desktop installer has been released yet.'
],
'roadmap'=>[
 'title'=>'Roadmap','meta_title'=>'VALDR Roadmap','meta_description'=>'VALDR factual development roadmap: implemented, in development, planned and not launched.','kicker'=>'Verified progress','lead'=>'A stage is marked complete only after implementation and verification evidence, not merely because code exists.'
]
]
];
