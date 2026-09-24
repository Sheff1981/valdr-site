# VALDR website reference review

**Reviewed:** 24 September 2026  
**Purpose:** Website/download/node/wallet/release UX research only. No branding, copy, graphics, CSS or incompatible architecture is reused.

## Bitcoin Core

Official pages reviewed:
- https://bitcoincore.org/
- https://bitcoincore.org/en/download/

Observations:
- Download page is release-centric and OS-specific.
- Checksums, signatures, source and version history sit close to binaries.
- Verification guidance is platform-specific and explicit.
- Full-node storage/bandwidth consequences are explained before/near download.

VALDR adopts:
- clear platform cards;
- explicit checksum/signature fields;
- separate Verify page;
- no release link until a real artifact exists.

VALDR rejects:
- copying Bitcoin visual design, wording or build/signing implementation verbatim;
- exposing stale or guessed release artifacts.

## Monero

Official pages reviewed:
- https://www.getmonero.org/
- https://www.getmonero.org/downloads/

Observations:
- Download verification is treated as a first-class safety action.
- GUI/CLI/platform choices are separated clearly.
- Security warnings are written for non-expert users without hiding technical verification.

VALDR adopts:
- prominent verification path;
- user-level explanation plus advanced technical detail;
- hash/signature data driven by a release manifest.

VALDR rejects:
- copying Monero privacy claims, branding, copy, artwork or wallet architecture.

## Litecoin

Official page reviewed:
- https://litecoin.org/

Observations:
- Clear distinction between a full-node Core wallet and a simpler wallet path.
- Platform/download presentation is concise.

VALDR adopts:
- clear separation between ordinary VALDR Desktop use and advanced/public-node operation.

VALDR rejects:
- copying Litecoin branding, page layout, graphics or text.

## Ethereum

Official pages reviewed:
- https://ethereum.org/
- https://ethereum.org/run-a-node
- https://ethereum.org/wallets/

Observations:
- Node concepts are introduced in human language before advanced operation steps.
- Home hardware/offline behavior and reasons to run a node are explained directly.
- Wallet safety language emphasizes key responsibility and irreversible actions.

VALDR adopts:
- beginner-first node explanation;
- simple vs advanced operator paths;
- direct non-custodial key/security warnings.

VALDR rejects:
- Ethereum execution/consensus multi-client architecture;
- dapp/smart-contract framing that does not exist in VALDR;
- copying Ethereum design or text.

## VALDR-specific result

Design direction:
- obsidian/metal base, restrained gold accent;
- geometric mark and typography, no cartoon Vikings or horned helmets;
- TESTNET status permanently visible while Mainnet is absent;
- “NOT A TOKEN. A CHAIN.” as primary identity line;
- no Buy / Trade / Invest / ICO / Presale language;
- no fake download, explorer or community links;
- release information comes from `data/releases.json` only after verified artifacts exist.

Security/release implications:
- no remote JS/CSS dependencies;
- CSP and restrictive headers;
- no wallet secrets or private-key forms;
- downloads require explicit user action;
- future artifacts must expose filename, architecture, size, SHA-256 and signed-manifest status.
