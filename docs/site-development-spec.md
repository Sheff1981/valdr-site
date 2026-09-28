# VALDR Website Development and Editorial Specification

Status: active working specification for the `valdr-site` repository.

## 1. Objective

Build the official VALDR website as a static, documentation-first product site for an independent blockchain project.

The website must explain the software and network clearly enough that a user can understand the system, install verified software when releases are available, create and protect a wallet, run a node, mine, verify transactions and blocks, and understand current Testnet status.

The website is not a replacement for VALDR Core, the node, wallet, miner or Explorer.

## 2. Source of truth

Public technical statements must be derived from verified VALDR Core implementation status and the current approved project specification.

Content must distinguish:
- implemented and verified;
- implemented but awaiting acceptance;
- in development;
- planned;
- not launched.

Do not present planned functionality as available.

## 3. Technical architecture

The target website architecture is static Jekyll:
- Jekyll 4.x;
- Liquid layouts and includes;
- Markdown/HTML content pages;
- static CSS, images and minimal JavaScript;
- no CMS;
- no database;
- no PHP runtime in the generated site;
- no runtime dependency on the blockchain node for ordinary documentation pages.

Generated output is `_site/`.

Dynamic network data, when published, must come from dedicated read-only services such as the Explorer. The website must not gain consensus authority or privileged node access.

## 4. Information architecture

English is the canonical authoring language.

Required English sections:
- Home;
- Getting Started;
- How VALDR Works;
- Using VALDR;
- Wallet;
- Node;
- Mining;
- Explorer;
- Technology;
- Developers;
- Testnet;
- Download;
- Verify;
- Releases;
- Security;
- Roadmap;
- Community;
- About;
- FAQ.

Each page must answer one primary user question and provide a clear next action.

## 5. Editorial style

Write in technical product language.

Requirements:
- use precise blockchain terminology where it improves accuracy;
- prefer short factual paragraphs;
- explain actions in execution order;
- define an unfamiliar term on first practical use;
- avoid slogans where a technical description is more useful;
- avoid investment language, price language and market promises;
- avoid unsupported performance or security claims;
- avoid comparisons with named third-party cryptocurrencies, networks or products;
- do not use competitor names to explain what VALDR is;
- describe VALDR positively by its own architecture and behavior.

Preferred wording pattern:
`component -> responsibility -> user action -> verification`.

Example:
`A node validates blocks and maintains chain state. Start the node, allow synchronization to complete, then verify height, tip and peer status before mining.`

## 6. Article structure

Technical articles should normally use:
1. purpose;
2. prerequisites;
3. ordered steps;
4. expected result;
5. verification;
6. security notes;
7. next step.

Do not add commands that are not verified against the current software surface.

If exact commands, ports, release names or endpoints are not verified, describe the action without inventing values.

## 7. Security and release content

Never publish:
- private keys or secrets;
- fake executable links;
- unverified checksums;
- invented public nodes, seeds or Explorer endpoints;
- privileged RPC credentials;
- internal project specifications.

Download pages remain informational until an artifact has verified release metadata.

## 8. Multilingual strategy

English is canonical and must be completed first.

Translation order:
1. English source page completed and reviewed;
2. Russian translation matched to the same content version;
3. additional languages added from the approved English source.

Each localized page must preserve:
- technical meaning;
- warnings;
- status labels;
- code and protocol identifiers;
- links to the corresponding localized or canonical page.

Do not translate protocol identifiers, command names, hashes, addresses or code symbols.

## 9. Localization architecture

Language metadata is maintained in `_data/languages.yml`.

Initial language states:
- English: canonical;
- Russian: active translation;
- other languages: planned until their complete page set exists.

A language must not appear as fully available in the public selector until the required page set is complete.

## 10. Visual system

Use the VALDR Desktop brand language:
- near-black and graphite backgrounds;
- warm gold / amber accents;
- warm light text;
- restrained metallic borders and highlights.

Do not turn documentation pages into a desktop-application imitation. The site remains content-first, readable and responsive.

## 11. Quality gates

Before merge:
- Jekyll build succeeds;
- generated site contains no PHP runtime files;
- required routes are generated;
- internal links are checked;
- no fake executable download links exist;
- no private project specification references are published;
- no named third-party cryptocurrency references appear in public website content;
- English canonical pages are complete for the stage being merged;
- status claims match verified project evidence.

## 12. Definition of Done for the website content stage

The current website content stage is complete when:
- all required English pages exist and are technically coherent;
- navigation and next-step paths are consistent;
- English terminology is normalized;
- public claims match current implementation evidence;
- Russian translation covers the same canonical page set;
- localization infrastructure supports additional languages without duplicating layout logic;
- CI passes the static build and content gates.

Only after these conditions are met should additional language expansion become the primary content task.
