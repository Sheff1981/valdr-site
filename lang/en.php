<?php
return [
'a11y'=>[
  'skip'=>'Skip to content',
  'primary_nav'=>'Primary navigation',
  'menu'=>'Menu',
  'on_this_page'=>'On this page'
],
'nav'=>[
  'home'=>'Home',
  'about'=>'About',
  'story'=>'Story',
  'technology'=>'Technology',
  'download'=>'Download',
  'verify'=>'Verify',
  'mining'=>'Mining',
  'node'=>'Node',
  'wallet'=>'Wallet',
  'explorer'=>'Explorer',
  'security'=>'Security',
  'roadmap'=>'Roadmap',
  'community'=>'Community',
  'faq'=>'FAQ',
  'docs'=>'Docs',
  'releases'=>'Releases',
  'more'=>'More'
],
'status'=>[
  'testnet'=>'VALDR TESTNET',
  'testnet_note'=>'Independent Proof-of-Work network'
],
'buttons'=>[
  'download'=>'Download VALDR',
  'explore'=>'Explore Network',
  'story'=>'Read the Story',
  'source'=>'View Source',
  'verify'=>'Verify Downloads',
  'docs'=>'Read Documentation',
  'mining'=>'Start Mining',
  'node'=>'Run a Node'
],
'footer'=>[
  'line'=>'INDEPENDENT CHAIN. NATIVE VDR.',
  'testnet_notice'=>'VALDR is being built and tested on its own Proof-of-Work Testnet.',
  'get_started'=>'Get started',
  'network'=>'Network',
  'resources'=>'Resources',
  'project'=>'Project',
  'bottom'=>'Independent blockchain · Proof of Work · Open development'
],
'home_features'=>[
  ['glyph'=>'◇','title'=>'Own Blockchain','text'=>'A native VDR network with its own consensus and chain state.'],
  ['glyph'=>'⚒','title'=>'Proof of Work','text'=>'Miners build blocks and nodes verify every rule independently.'],
  ['glyph'=>'</>','title'=>'Open Source','text'=>'Protocol software is developed transparently in source control.'],
  ['glyph'=>'◎','title'=>'Full Node','text'=>'Run the network on your own computer or server.'],
  ['glyph'=>'▣','title'=>'Encrypted Wallet','text'=>'Keys stay local and wallet data is encrypted at rest.'],
  ['glyph'=>'⌘','title'=>'Open Network','text'=>'Peer-to-peer synchronization without a parent blockchain.']
],
'home'=>[
  'what_label'=>'What is VALDR',
  'what_title'=>'An independent cryptocurrency. An independent blockchain.',
  'what_text'=>'VALDR (VDR) is an independent Proof-of-Work cryptocurrency with its own blockchain, native coin, UTXO transaction model, full nodes, miner, wallet and peer-to-peer network. Consensus, transactions, mining and ownership are handled within the VALDR network itself.',
  'learn_more'=>'Learn more about VALDR',
  'protocol'=>[
    'Independent blockchain written in Go',
    'Proof of Work',
    'UTXO transaction model',
    'P2P v2 networking',
    'Encrypted wallet',
    'Transaction fees',
    'Full synchronization',
    'Chain reorganization',
    'Read-only Explorer service'
  ],
  'desktop_mock'=>'Local wallet · local node · network sync',
  'desktop_title'=>'Run your own node. Use VALDR Desktop.',
  'desktop_text'=>'VALDR Desktop is the planned everyday interface for the network: create or open an encrypted wallet, run a local outbound-only node, synchronize, send and receive VDR, and inspect network status from one application.',
  'release_preparing'=>'Testnet package in preparation',
  'all_releases'=>'View releases',
  'story_title'=>'From an idea to a blockchain.',
  'story_text'=>'VALDR started with a simple question: can an independent coin and network be built from the ground up? That question led to a separate Go implementation focused on a native Proof-of-Work network.',
  'timeline'=>[
    ['title'=>'Idea','text'=>'Build a native coin'],
    ['title'=>'Protocol research','text'=>'Learn and test'],
    ['title'=>'Own Go blockchain','text'=>'Independent implementation'],
    ['title'=>'Devnet v0.1','text'=>'Working core network'],
    ['title'=>'Hardened v0.2','text'=>'Storage, P2P, reorg, wallet'],
    ['title'=>'Testnet','text'=>'Current network line'],
    ['title'=>'VALDR Desktop','text'=>'User application'],
    ['title'=>'Mainnet','text'=>'Later protocol stage']
  ],
  'philosophy_label'=>'Our philosophy',
  'philosophy_title'=>'Not power over others. Power over your own.',
  'philosophy_text'=>'Your keys. Your wallet. Your node. Your choice. VALDR is built around direct ownership, independent verification and software that can run on ordinary computers without depending on a parent chain.',
  'mining_title'=>'Forge the chain.',
  'mining_text'=>'Mining already exists in the current Testnet software stack. The VALDR miner produces candidate blocks, performs Proof of Work and submits them to a node for full consensus validation.',
  'node_title'=>'Verify the network yourself.',
  'node_text'=>'A full node keeps its own validated chain state, checks blocks and transactions, talks directly to peers and resumes synchronization after downtime.',
  'roadmap_title'=>'From protocol to product.',
  'roadmap_link'=>'View the full roadmap'
],
'pages'=>[
'home'=>[
  'title'=>'VALDR',
  'meta_title'=>'VALDR (VDR) — Independent Proof-of-Work Blockchain',
  'meta_description'=>'VALDR is an independent Proof-of-Work cryptocurrency with its own blockchain, native VDR coin, node, wallet and miner.',
  'kicker'=>'Independent. Open. Proof of Work.',
  'lead'=>'VALDR is an independent Proof-of-Work cryptocurrency running on its own blockchain. Native VDR. Own node. Own wallet. Own network.'
],
'about'=>[
  'title'=>'What is VALDR?',
  'meta_title'=>'What is VALDR (VDR)?',
  'meta_description'=>'Learn how VALDR works as an independent Proof-of-Work cryptocurrency with its own blockchain and native VDR coin.',
  'kicker'=>'Independent by design',
  'lead'=>'VALDR is a native cryptocurrency network: its chain, consensus, transactions, mining and ownership are enforced by VALDR software itself.',
  'sections'=>[
    [
      'heading'=>'A native coin on its own chain',
      'paragraphs'=>[
        'VDR is created, transferred and validated directly by the VALDR protocol. The VALDR network processes its own transactions and maintains its own chain state.',
        'Every full node applies the same protocol rules to blocks, transactions, Proof of Work, fees and chain selection.'
      ],
      'bullets'=>[
        'Own blockchain implementation in Go',
        'Native VDR coin and VDR1 addresses',
        'Proof-of-Work consensus',
        'UTXO-based transactions',
        'Independent peer-to-peer networking'
      ]
    ],
    [
      'heading'=>'Built for direct verification',
      'paragraphs'=>[
        'A user can rely on a local VALDR node instead of asking a third-party server what the network state is. The node stores validated chain state, checks incoming data against consensus rules and keeps itself synchronized with peers.',
        'The project is designed so the desktop application uses the existing node, wallet and RPC architecture rather than creating a second blockchain implementation.'
      ]
    ],
    [
      'heading'=>'Own keys. Own node. Own choice.',
      'paragraphs'=>[
        'The brand language is Nordic, but the idea is modern: control over your own software and keys. The website does not invent mythology or claim an ancient origin for VALDR.'
      ]
    ]
  ]
],
'story'=>[
  'title'=>'The VALDR Story',
  'meta_title'=>'The Story of VALDR',
  'meta_description'=>'How VALDR moved from a simple coin idea and early protocol research to an independent Go Proof-of-Work blockchain.',
  'kicker'=>'From idea to chain',
  'lead'=>'VALDR began with a simple idea: create a real coin by building the network underneath it.',
  'sections'=>[
    [
      'heading'=>'The first question',
      'paragraphs'=>[
        'The project started with a practical question: could an independent coin and the blockchain underneath it be built from the ground up?',
        'Existing open-source blockchain software became an early technical reference for studying independent nodes, Proof of Work, UTXO accounting and native-coin operation.'
      ]
    ],
    [
      'heading'=>'Early protocol research',
      'paragraphs'=>[
        'Early experiments with established open-source blockchain software served as a learning path. They helped define what VALDR needed and what it did not need. The active architecture then moved into a separate implementation with its own codebase and network identity.'
      ]
    ],
    [
      'heading'=>'A separate implementation in Go',
      'paragraphs'=>[
        'VALDR Core became its own Go codebase with a node, blockchain state, wallet, miner, P2P protocol, storage, RPC/CLI and Explorer service. The protocol has been hardened through staged specifications and automated verification.'
      ]
    ],
    [
      'heading'=>'One stage at a time',
      'paragraphs'=>[
        'The development rule is simple: specification → implementation → build → test → verification → next stage. AI tools are used as a technical partner during development, while protocol behavior is fixed and tested in the repository.',
        'The goal is to make the network real first: software that starts, synchronizes, mines, stores state, signs transactions and survives restart before later product stages are treated as complete.'
      ]
    ]
  ]
],
'technology'=>[
  'title'=>'Technology',
  'meta_title'=>'VALDR Technology',
  'meta_description'=>'VALDR protocol architecture: Go, Proof of Work, UTXO, P2P v2, chainwork, reorganization, fees, encrypted wallet and Testnet.',
  'kicker'=>'Protocol',
  'lead'=>'VALDR uses a single native chain and a deliberately compact protocol stack.',
  'sections'=>[
    [
      'heading'=>'Blockchain and consensus',
      'paragraphs'=>[
        'VALDR blocks are validated by a canonical Go implementation. The v0.2 protocol uses explicit 256-bit Proof-of-Work targets, SHA-256 block hashing and cumulative chainwork for fork choice.'
      ],
      'cards'=>[
        ['title'=>'Proof of Work','text'=>'Miners search for a valid header while nodes independently enforce the target and all block rules.'],
        ['title'=>'Chainwork','text'=>'The valid branch with the greatest cumulative work becomes the active chain.'],
        ['title'=>'Reorganization','text'=>'Side branches are retained and a heavier valid branch can replace the active tip through undo and reconnect.'],
        ['title'=>'Timestamp rules','text'=>'Median-time-past and future-time limits are checked as part of block acceptance.']
      ]
    ],
    [
      'heading'=>'Transactions and UTXO',
      'paragraphs'=>[
        'Transactions spend existing unspent outputs and create new outputs. On v0.2 networks, transaction signatures and transaction IDs are bound to the active Chain ID to prevent cross-network replay.'
      ],
      'bullets'=>[
        'Native UTXO ledger',
        'Network-bound v2 transactions',
        'Implicit transaction fees',
        'Consensus transaction and block size limits',
        'Deterministic mempool and miner ordering'
      ]
    ],
    [
      'heading'=>'P2P and synchronization',
      'paragraphs'=>[
        'VALDR nodes communicate over P2P v2, negotiate compatible protocol versions, exchange inventory and synchronize headers before requesting block bodies. Nodes validate headers before downloading the corresponding blocks.'
      ],
      'bullets'=>[
        'Chain-specific network framing',
        'Handshake and version negotiation',
        'Headers-first full synchronization',
        'Peer discovery and seed bootstrap support',
        'Rate limits, message caps and temporary bans'
      ]
    ],
    [
      'heading'=>'Storage, wallet and services',
      'bullets'=>[
        'BadgerDB-backed Storage v2',
        'Encrypted wallet v2 using scrypt-derived keys and AES-256-GCM',
        'Localhost RPC by default',
        'Read-only, reorg-aware Explorer service',
        'Docker and Linux service deployment for infrastructure'
      ]
    ]
  ]
],
'mining'=>[
  'title'=>'Mining',
  'meta_title'=>'Mine VALDR on Testnet',
  'meta_description'=>'How VALDR Proof-of-Work mining works and how the current Testnet miner interacts with a full node.',
  'kicker'=>'Forge the chain',
  'lead'=>'VALDR uses Proof of Work. The miner creates candidate blocks; the node decides whether those blocks are valid.',
  'notice'=>[
    'type'=>'warning',
    'title'=>'Current mining is Testnet mining',
    'text'=>'The miner and Testnet runtime are implemented in the current software stack. Testnet VDR is used for network and protocol testing and has no promised monetary value.'
  ],
  'sections'=>[
    [
      'heading'=>'Mining already exists in the software stack',
      'paragraphs'=>[
        'The current VALDR Testnet build contains valdr-miner alongside valdrd, valdr-cli and valdr-explorer. Automated runtime tests mine real Testnet blocks and verify that those blocks synchronize across multiple nodes.',
        'Mining is therefore not a browser feature or a marketing simulation. It is part of the blockchain runtime.'
      ]
    ],
    [
      'heading'=>'What happens when a block is mined',
      'paragraphs'=>[
        'The miner builds a candidate block from the active chain state and selected mempool transactions, includes the protocol subsidy and transaction fees, and searches for a header hash that satisfies the current target.',
        'A found block is submitted to the node. The node then verifies Proof of Work, timestamps, transactions, UTXO spending, fees, size limits and network identity before accepting it.'
      ]
    ],
    [
      'heading'=>'Home mining and node mining',
      'cards'=>[
        ['title'=>'Local Testnet','text'=>'Run a node and miner on your own machine to participate in protocol testing.'],
        ['title'=>'Full-node mining','text'=>'The miner relies on a real node for active chain state and final block validation.'],
        ['title'=>'Explicit operation','text'=>'Mining is an intentional user action. The website never mines in the browser and the desktop application must not start mining silently.']
      ]
    ],
    [
      'heading'=>'Hardware',
      'paragraphs'=>[
        'VALDR currently documents the protocol and software path rather than promising a particular hardware return. CPU, GPU or specialized-hardware economics can only be evaluated from the real network conditions that exist at the time.'
      ]
    ]
  ]
],
'node'=>[
  'title'=>'Run a Node',
  'meta_title'=>'Run a VALDR Full Node',
  'meta_description'=>'Learn what a VALDR node does, how it verifies the blockchain and how home and public-node modes differ.',
  'kicker'=>'Verify the network yourself',
  'lead'=>'Running a VALDR node means keeping your own validated view of the blockchain instead of relying on somebody else’s server.',
  'sections'=>[
    [
      'heading'=>'What a node actually does',
      'paragraphs'=>[
        'A VALDR node connects to peers, downloads chain data, verifies blocks and transactions against consensus rules, stores validated state and relays accepted network data.',
        'Your node does not ask another website which chain is valid. It evaluates Proof of Work, chainwork, timestamps, transactions and UTXO changes locally.'
      ]
    ],
    [
      'heading'=>'What happens when your computer is offline',
      'paragraphs'=>[
        'Nothing special happens to the rest of the network. Your node simply stops participating while the machine is offline. When it starts again, it resumes from its persisted database and synchronizes the missing chain data.'
      ]
    ],
    [
      'heading'=>'Desktop user',
      'paragraphs'=>[
        'The planned VALDR Desktop experience is built around an outbound-only local node. That mode is intended for ordinary home networks: the application connects outward to peers and does not require the user to expose an inbound P2P port.'
      ]
    ],
    [
      'heading'=>'Public full node',
      'paragraphs'=>[
        'Server operators can run a publicly reachable node with explicit P2P exposure. The Linux reference deployment uses an unprivileged service account, persistent data directories, localhost RPC, firewall guidance and a separate read-only Explorer.'
      ]
    ]
  ]
],
'wallet'=>[
  'title'=>'Wallet',
  'meta_title'=>'VALDR Wallet',
  'meta_description'=>'How VALDR wallets, VDR addresses, encrypted key storage, backups, send and receive work.',
  'kicker'=>'Your keys stay local',
  'lead'=>'A VALDR wallet holds the key material that authorizes spending. The website never needs your private key.',
  'notice'=>[
    'type'=>'danger',
    'title'=>'Never send a private key or wallet password to a website',
    'text'=>'The official VALDR website is not a custodial wallet and contains no form for private keys, passphrases or wallet passwords.'
  ],
  'sections'=>[
    [
      'heading'=>'Wallet, address and private key',
      'cards'=>[
        ['title'=>'Wallet','text'=>'Local software that manages addresses, encrypted key material and signed transactions.'],
        ['title'=>'VDR address','text'=>'A public destination used to receive VDR. Current network profiles use the VDR1 prefix.'],
        ['title'=>'Private key','text'=>'The secret signing authority for spending. Whoever controls it can authorize transactions.']
      ]
    ],
    [
      'heading'=>'Encrypted wallet storage',
      'paragraphs'=>[
        'Wallet v2 does not store the private key in plaintext. A key derived from the user passphrase protects the private-key payload with authenticated encryption, while public metadata remains readable for normal wallet listing.'
      ]
    ],
    [
      'heading'=>'Send and receive',
      'paragraphs'=>[
        'To receive VDR, share a public VDR address. To send, the wallet unlocks key material locally, creates and signs a network-bound transaction and hands the signed transaction to the node for broadcast.',
        'Private keys are not sent over P2P and do not belong in node RPC payloads.'
      ]
    ],
    [
      'heading'=>'Backup and recovery',
      'paragraphs'=>[
        'Keep a wallet backup somewhere separate from the machine that runs the node. Treat backup material and private keys as secrets. A lost private key cannot be recreated by the website or by a network operator.'
      ]
    ]
  ]
],
'explorer'=>[
  'title'=>'Explorer',
  'meta_title'=>'VALDR Explorer',
  'meta_description'=>'VALDR Explorer provides read-only views of blocks, transactions, addresses, mempool and network status.',
  'kicker'=>'See the chain',
  'lead'=>'VALDR Explorer is a separate read-only service built on public blockchain data.',
  'sections'=>[
    [
      'heading'=>'Search the network',
      'paragraphs'=>[
        'The Explorer software can search by block height or hash, transaction ID and VDR address. It also exposes recent blocks, mempool state, peer count, chainwork, target information and recent block intervals.'
      ]
    ],
    [
      'heading'=>'Reorg-aware indexing',
      'paragraphs'=>[
        'The Explorer keeps its own index and follows the node’s active chain. If the active branch reorganizes, the index rolls back to the common ancestor and rebuilds forward on the new active branch.'
      ]
    ],
    [
      'heading'=>'Read-only by design',
      'paragraphs'=>[
        'Explorer has no signing controls, private keys or mining privileges. It reads public chain data from node RPC and can be rebuilt without changing consensus state.'
      ]
    ]
  ]
],
'security'=>[
  'title'=>'Security',
  'meta_title'=>'VALDR Security',
  'meta_description'=>'Security principles for VALDR wallets, nodes, downloads and the official website.',
  'kicker'=>'Verify what you run',
  'lead'=>'Keys stay local, downloads are verifiable and network services are separated by role.',
  'sections'=>[
    [
      'heading'=>'Protect your keys',
      'bullets'=>[
        'Never share a private key, wallet passphrase or wallet password',
        'Keep backups separate from the primary device',
        'Check destination addresses before signing a transaction',
        'Treat unexpected support requests for key material as fraudulent'
      ]
    ],
    [
      'heading'=>'Website boundaries',
      'bullets'=>[
        'No custodial wallet',
        'No private-key forms',
        'No browser cryptomining',
        'No hidden trackers by default',
        'No automatic executable downloads',
        'Restrictive Content Security Policy and browser headers'
      ]
    ],
    [
      'heading'=>'Node boundaries',
      'bullets'=>[
        'RPC binds to localhost by default',
        'Private keys never cross P2P',
        'Explorer is read-only and separate from consensus storage',
        'Public inbound P2P mode is explicit operator configuration'
      ]
    ],
    [
      'heading'=>'Verify software before running it',
      'paragraphs'=>[
        'A release page should tell you exactly which file you are downloading, which version and commit it belongs to, its SHA-256 checksum and the status of the signed release manifest. VALDR will only populate those fields from real release artifacts.'
      ]
    ]
  ]
],
'roadmap'=>[
  'title'=>'Roadmap',
  'meta_title'=>'VALDR Roadmap',
  'meta_description'=>'VALDR development roadmap from verified core protocol stages through Desktop, release packaging, public Testnet and future Mainnet work.',
  'kicker'=>'From code to network',
  'lead'=>'VALDR development moves through explicit implementation and verification gates. The roadmap separates code that exists from stages that are fully completed.'
],
'community'=>[
  'title'=>'Community',
  'meta_title'=>'VALDR Community',
  'meta_description'=>'Official VALDR community and development channels.',
  'kicker'=>'Build the network together',
  'lead'=>'Development starts in source code. Community channels are added here only after they become official.',
  'sections'=>[
    [
      'heading'=>'Official development',
      'paragraphs'=>[
        'VALDR Core and the official website source are maintained in the Sheff1981 GitHub account. Technical changes are tracked through commits and CI.'
      ],
      'cards'=>[
        ['title'=>'GitHub','text'=>'Protocol and website development source.'],
        ['title'=>'Telegram','text'=>'Official channel will be linked here when created.'],
        ['title'=>'VK','text'=>'Official channel will be linked here when created.'],
        ['title'=>'X','text'=>'Official channel will be linked here when created.'],
        ['title'=>'Reddit','text'=>'Official channel will be linked here when created.'],
        ['title'=>'Discord','text'=>'Official channel will be linked here when created.']
      ]
    ],
    [
      'heading'=>'Verify the channel',
      'paragraphs'=>[
        'A social account is not official merely because it uses the VALDR name or artwork. Use links published on this website or in the official source repositories.'
      ]
    ]
  ]
],
'faq'=>[
  'title'=>'FAQ',
  'meta_title'=>'VALDR FAQ',
  'meta_description'=>'Answers about VALDR blockchain, mining, nodes, wallets, downloads and Testnet.',
  'kicker'=>'Common questions',
  'lead'=>'Short answers about the network and software.',
  'sections'=>[
    [
      'heading'=>'Is VALDR a token on another blockchain?',
      'paragraphs'=>['No. VALDR has its own blockchain and VDR is the native coin of that chain.']
    ],
    [
      'heading'=>'Can VALDR be mined?',
      'paragraphs'=>['Yes. The current Testnet software stack includes valdr-miner and automated runtime tests mine real Testnet blocks. Mining is performed against a VALDR node, which independently validates every submitted block.']
    ],
    [
      'heading'=>'What does a full node do?',
      'paragraphs'=>['It keeps its own validated chain state, checks protocol rules locally, synchronizes with peers and relays accepted data.']
    ],
    [
      'heading'=>'Does the website hold my wallet keys?',
      'paragraphs'=>['No. The website is informational and non-custodial. Private keys and wallet passwords belong only in local wallet software.']
    ],
    [
      'heading'=>'Where do I download VALDR?',
      'paragraphs'=>['The Download page is the official release entry point. Platform buttons activate only when a verified artifact exists in the release manifest.']
    ],
    [
      'heading'=>'What is VALDR Desktop?',
      'paragraphs'=>['It is the planned desktop interface that combines the local node and encrypted wallet experience for ordinary users without duplicating consensus logic.']
    ]
  ]
],
'docs'=>[
  'title'=>'Documentation',
  'meta_title'=>'VALDR Documentation',
  'meta_description'=>'VALDR documentation for users, miners, node operators and developers.',
  'kicker'=>'Learn the network',
  'lead'=>'Start with the task you want to perform, then go deeper into the protocol when needed.',
  'sections'=>[
    [
      'heading'=>'For users',
      'cards'=>[
        ['title'=>'Wallet','text'=>'Addresses, local keys, encrypted storage, send, receive and backup.'],
        ['title'=>'Download','text'=>'Platform packages, release metadata and verification.'],
        ['title'=>'Security','text'=>'Key handling, website boundaries and download safety.']
      ]
    ],
    [
      'heading'=>'For network participants',
      'cards'=>[
        ['title'=>'Mining','text'=>'Proof of Work, candidate blocks and the current Testnet miner.'],
        ['title'=>'Run a Node','text'=>'Local node behavior, synchronization and server operation.'],
        ['title'=>'Explorer','text'=>'Read-only chain, transaction and address inspection.']
      ]
    ],
    [
      'heading'=>'For developers and operators',
      'paragraphs'=>[
        'The active protocol source lives in valdr-core. Public documentation follows verified repository code and CI evidence; internal project specifications are not published on the website.'
      ]
    ]
  ]
],
'verify'=>[
  'title'=>'Verify Downloads',
  'meta_title'=>'Verify VALDR Downloads',
  'meta_description'=>'Verify VALDR release files using SHA-256 and GitHub/Sigstore keyless provenance.',
  'kicker'=>'Release integrity',
  'lead'=>'Do not rely on a filename alone. Verify the artifact, repository identity and exact source commit before you run it.',
  'sections'=>[
    [
      'heading'=>'The verification chain',
      'paragraphs'=>[
        'VALDR uses two independent checks: SHA-256 confirms the exact file bytes, while GitHub/Sigstore provenance confirms that the artifact was produced by the expected valdr-core workflow from the expected source commit.'
      ],
      'bullets'=>[
        'Download the package, release-manifest.json and SHA256SUMS from the official release location',
        'Confirm the SHA-256 value for the package',
        'Read the exact source commit from release-manifest.json',
        'Verify the GitHub Artifact Attestation against Sheff1981/valdr-core and the VALDR release workflow',
        'Do not run the file if the hash, repository, workflow or source commit differs'
      ]
    ],
    [
      'heading'=>'Windows SHA-256',
      'code'=>'Get-FileHash .\\VALDR-Desktop-<version>-windows-x64-setup.exe -Algorithm SHA256'
    ],
    [
      'heading'=>'macOS SHA-256',
      'code'=>'shasum -a 256 VALDR-Desktop-<version>-macos-arm64.dmg'
    ],
    [
      'heading'=>'Linux SHA-256',
      'code'=>'sha256sum VALDR-Desktop-<version>-linux-x64.AppImage'
    ],
    [
      'heading'=>'GitHub / Sigstore provenance',
      'code'=>'gh attestation verify <VALDR-release-file> \\\n  --repo Sheff1981/valdr-core \\\n  --signer-workflow Sheff1981/valdr-core/.github/workflows/valdr-v02-ci.yml \\\n  --source-digest <40-character-release-commit>'
    ],
    [
      'heading'=>'What provenance does — and does not — prove',
      'paragraphs'=>[
        'A matching checksum proves that the downloaded bytes match the published release metadata. A successful provenance check binds those bytes to the expected public repository, workflow and source commit. It is not a Microsoft, Apple, GitHub or Sigstore security audit or endorsement.'
      ]
    ],
    [
      'heading'=>'Unsigned operating-system packages',
      'paragraphs'=>[
        'Windows Authenticode and Apple Developer ID/notarization are optional hardening for VALDR Testnet. When they are unavailable, the release metadata states that plainly. Do not disable operating-system security globally; verify the package first and use only the normal per-application override if you choose to run it.'
      ]
    ]
  ]
],
'releases'=>[
  'title'=>'Releases',
  'meta_title'=>'VALDR Releases',
  'meta_description'=>'VALDR software releases, release notes and cryptographic verification metadata.',
  'kicker'=>'Official software',
  'lead'=>'Every published package belongs to a specific version, source commit and network profile.',
  'sections'=>[
    [
      'heading'=>'What a VALDR release contains',
      'bullets'=>[
        'Version and release date',
        'Exact source commit',
        'Operating system and architecture',
        'Exact filename and size',
        'SHA-256 checksum',
        'GitHub/Sigstore provenance status',
        'Truthful Windows/macOS vendor-signing status',
        'Release notes'
      ]
    ],
    [
      'heading'=>'Development is not the same as a release',
      'paragraphs'=>[
        'Development packages can be CI-built, checksum-verified and provenance-attested without being a public Testnet release. Installer links activate only after a frozen release candidate exists in official release storage and all publication gates are satisfied.'
      ]
    ]
  ]
],
'download'=>[
  'title'=>'Download VALDR',
  'meta_title'=>'Download VALDR Testnet',
  'meta_description'=>'Download official VALDR Testnet software for Windows, macOS and Linux when verified packages are published.',
  'kicker'=>'Official software',
  'lead'=>'Choose your platform, verify the release, then run VALDR on your own machine.'
]
]
];
