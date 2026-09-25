# VALDR website reference review

**Reviewed:** 24 September 2026  
**Scope:** homepage, navigation, download, verification, wallet, mining, node, security, community and documentation UX.

The reference sites are used for information architecture, interaction patterns and security/release practices. VALDR does not copy their branding, artwork, CSS or prose. Public copy is written specifically for the VALDR protocol.

## Bitcoin Core

Official pages reviewed:
- https://bitcoincore.org/
- https://bitcoincore.org/en/download/

Observed patterns:
- the download page leads with a current version and platform choice;
- binaries are grouped by operating system/architecture;
- checksum files, signatures, source code and version history are adjacent to downloads;
- verification instructions are split by Windows/macOS/Linux;
- storage/bandwidth considerations are explained before users commit to running a full node.

VALDR adopts:
- platform-first download cards;
- version/commit/network metadata next to a release;
- first-class Verify page;
- SHA-256 + signed-manifest release chain;
- explicit user action before any package download.

## Monero

Official pages reviewed:
- https://www.getmonero.org/
- https://www.getmonero.org/downloads/
- https://www.getmonero.org/get-started/mining/

Observed patterns:
- top navigation groups getting started, community and resources;
- the homepage routes users toward wallet, mining, FAQ and documentation;
- GUI software is explained for both less-technical and advanced users;
- mining has its own educational page rather than being reduced to a marketing button;
- download verification is highly visible and tied to signed hashes;
- community/resources are repeated in the footer.

VALDR adopts:
- user-task navigation;
- dedicated Mining page;
- clear ordinary-user vs advanced-node/operator paths;
- rich footer navigation;
- wallet/download/security education close to the relevant action.

VALDR does not adopt:
- Monero privacy claims or RandomX/solo-pool design;
- third-party wallet/pool lists that do not exist for VALDR.

## Litecoin

Official page reviewed:
- https://litecoin.org/

Observed patterns:
- the public site distinguishes full-node Core software from simpler wallet use;
- core software is described in practical terms: local chain copy, network support and security;
- open-source, wallet encryption and blockchain concepts are explained as separate features;
- the homepage connects product actions with deeper educational content.

VALDR adopts:
- explicit Full Node positioning;
- separate product/technology explanations;
- a concise platform release entry point.

## Ethereum

Official pages reviewed:
- https://ethereum.org/
- https://ethereum.org/run-a-node
- https://ethereum.org/developers/docs/nodes-and-clients
- https://ethereum.org/wallets/
- https://ethereum.org/security

Observed patterns:
- the homepage begins with a strong ownership/control proposition and then explains principles;
- node onboarding starts by explaining what software does before showing operator detail;
- offline node behavior is explained in plain language;
- running your own node is framed as independent verification rather than merely infrastructure work;
- wallet pages explain user responsibility for keys and irreversible actions;
- security guidance repeatedly warns that legitimate services do not need private keys.

VALDR adopts:
- beginner-first explanation followed by technical depth;
- “run your own node / verify locally” concept, rewritten for VALDR;
- strong local-key and non-custodial language;
- task-oriented side navigation on long educational pages.

VALDR does not adopt:
- Ethereum account/smart-contract/L2/staking architecture;
- Ethereum multi-client execution/consensus design;
- wallet marketplace or third-party product directory.

## VALDR-specific information architecture

Primary navigation:
- Home
- About
- Download
- Technology
- Mining
- Node
- Wallet
- Explorer
- Roadmap
- Community

Secondary navigation:
- Story
- Security
- Verify
- Releases
- Docs
- FAQ

Footer groups:
- Get started
- Network
- Resources
- Project

Long educational pages use an “On this page” side rail with anchor links.

## Brand and content direction

- public language defaults to English;
- full Russian translation is selectable from the top language control;
- obsidian/black base with restrained metal-gold accents;
- strong Nordic geometry, not fantasy/cartoon Vikings;
- “NOT A TOKEN. A CHAIN.” remains the primary line;
- public content focuses on chain, mining, node, wallet, explorer, source and story;
- no invented exchange, price, installer, hash, signature, explorer endpoint or social link;
- TESTNET remains explicit until protocol status changes;
- mining copy may state that the current Testnet stack contains a real miner and that CI mines/synchronizes Testnet blocks, because this is verified in valdr-core.

## Release/security implications

- no remote arbitrary scripts;
- no browser mining;
- no private-key/passphrase/password forms;
- no automatic executable download;
- downloads driven only by verified release data;
- release artifact metadata: version, source commit, network, OS, architecture, filename, size, SHA-256, signed-manifest status;
- Content Security Policy and restrictive response headers remain mandatory.


## 25 September 2026 — release provenance update

The public download/verification model was re-reviewed after the current valdr-core release pipeline added keyless artifact provenance.

Additional official references reviewed:
- GitHub Artifact Attestations documentation;
- GitHub CLI attestation verification documentation;
- Sigstore keyless signing documentation.

VALDR website adopts:
- SHA-256 plus GitHub/Sigstore keyless provenance as the mandatory Testnet verification chain;
- verification pinned to the public `Sheff1981/valdr-core` repository, expected workflow and exact source commit;
- explicit disclosure when Windows Authenticode or Apple Developer ID/notarization is unavailable;
- no executable link until a frozen release candidate exists in official release storage.

VALDR website rejects:
- calling provenance a Microsoft/Apple/GitHub/Sigstore security audit or endorsement;
- fake or borrowed platform-signing identities;
- instructions that disable operating-system security globally;
- exposing transient development CI artifacts as official public downloads.

The current website therefore shows verified development status but keeps public installer buttons disabled until the release candidate and publication gates are complete.
