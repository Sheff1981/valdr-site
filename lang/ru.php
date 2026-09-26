<?php
return [
'a11y'=>[
  'skip'=>'Перейти к содержимому',
  'primary_nav'=>'Основная навигация',
  'menu'=>'Меню',
  'on_this_page'=>'На этой странице'
],
'nav'=>[
  'home'=>'Главная',
  'getting_started'=>'Начало работы',
  'using_valdr'=>'Как пользоваться',
  'about'=>'О VALDR',
  'story'=>'История',
  'technology'=>'Технология',
  'download'=>'Скачать',
  'verify'=>'Проверка',
  'mining'=>'Майнинг',
  'node'=>'Нода',
  'wallet'=>'Кошелёк',
  'explorer'=>'Explorer',
  'security'=>'Безопасность',
  'roadmap'=>'Roadmap',
  'community'=>'Сообщество',
  'faq'=>'FAQ',
  'docs'=>'Документация',
  'releases'=>'Релизы',
  'more'=>'Ещё'
],
'status'=>[
  'testnet'=>'VALDR TESTNET',
  'testnet_note'=>'Независимая Proof-of-Work сеть'
],
'buttons'=>[
  'download'=>'Скачать VALDR',
  'explore'=>'Смотреть сеть',
  'story'=>'Читать историю',
  'source'=>'Исходный код',
  'verify'=>'Проверить загрузку',
  'docs'=>'Документация',
  'mining'=>'Начать майнинг',
  'node'=>'Запустить ноду'
],
'footer'=>[
  'line'=>'НЕЗАВИСИМАЯ ЦЕПЬ. НАТИВНЫЙ VDR.',
  'testnet_notice'=>'VALDR строится и тестируется на собственной Proof-of-Work Testnet.',
  'get_started'=>'Начать',
  'network'=>'Сеть',
  'resources'=>'Ресурсы',
  'project'=>'Проект',
  'bottom'=>'Собственный блокчейн · Proof of Work · Открытая разработка'
],
'home_features'=>[
  ['glyph'=>'◇','title'=>'Свой блокчейн','text'=>'Нативная сеть VDR со своим consensus и состоянием цепи.'],
  ['glyph'=>'⚒','title'=>'Proof of Work','text'=>'Майнеры создают блоки, а ноды независимо проверяют каждое правило.'],
  ['glyph'=>'</>','title'=>'Open Source','text'=>'Протокол развивается прозрачно в исходном коде.'],
  ['glyph'=>'◎','title'=>'Full Node','text'=>'Запускай сеть на своём компьютере или сервере.'],
  ['glyph'=>'▣','title'=>'Encrypted Wallet','text'=>'Ключи остаются локально, wallet-файл хранится в зашифрованном виде.'],
  ['glyph'=>'⌘','title'=>'Открытая сеть','text'=>'P2P-синхронизация без родительского блокчейна.']
],
'home'=>[
  'what_label'=>'Что такое VALDR',
  'what_title'=>'Независимая криптовалюта. Собственный блокчейн.',
  'what_text'=>'VALDR (VDR) — независимая Proof-of-Work криптовалюта со своим блокчейном, native-монетой, UTXO-моделью транзакций, full nodes, miner, wallet и собственной P2P-сетью. Consensus, транзакции, mining и ownership обеспечиваются самой сетью VALDR.',
  'learn_more'=>'Подробнее о VALDR',
  'protocol'=>[
    'Независимый блокчейн на Go',
    'Proof of Work',
    'UTXO-модель транзакций',
    'P2P v2',
    'Encrypted wallet',
    'Transaction fees',
    'Полная синхронизация',
    'Chain reorganization',
    'Read-only Explorer'
  ],
  'desktop_mock'=>'Локальный wallet · локальная node · синхронизация',
  'desktop_title'=>'Запускай свою ноду. Используй VALDR Desktop.',
  'desktop_text'=>'VALDR Desktop — будущий повседневный интерфейс сети: создать или открыть encrypted wallet, запустить локальную outbound-only ноду, синхронизироваться, отправлять и получать VDR и видеть состояние сети в одном приложении.',
  'release_preparing'=>'Готовится Testnet package',
  'all_releases'=>'Все релизы',
  'story_title'=>'От идеи к собственному блокчейну.',
  'story_text'=>'VALDR начался с простого вопроса: можно ли с нуля построить собственную монету и независимую сеть? Этот вопрос привёл к отдельной реализации VALDR на Go и собственной Proof-of-Work сети.',
  'timeline'=>[
    ['title'=>'Идея','text'=>'Построить native-монету'],
    ['title'=>'Исследование протокола','text'=>'Изучение и тесты'],
    ['title'=>'Свой Go-блокчейн','text'=>'Независимая реализация'],
    ['title'=>'Devnet v0.1','text'=>'Рабочее ядро сети'],
    ['title'=>'Hardened v0.2','text'=>'Storage, P2P, reorg, wallet'],
    ['title'=>'Testnet','text'=>'Текущая линия сети'],
    ['title'=>'VALDR Desktop','text'=>'Приложение пользователя'],
    ['title'=>'Mainnet','text'=>'Будущий этап протокола']
  ],
  'philosophy_label'=>'Наша философия',
  'philosophy_title'=>'Не власть над другими. Власть над своим.',
  'philosophy_text'=>'Свои ключи. Свой кошелёк. Своя нода. Свой выбор. VALDR строится вокруг прямого владения, самостоятельной проверки сети и ПО, которое может работать на обычном компьютере без родительского блокчейна.',
  'mining_title'=>'Forge the chain.',
  'mining_text'=>'Майнинг уже существует в текущем Testnet software stack. VALDR miner собирает кандидатные блоки, выполняет Proof of Work и передаёт их node для полной consensus-проверки.',
  'node_title'=>'Проверяй сеть сам.',
  'node_text'=>'Full node хранит собственное проверенное состояние цепи, проверяет блоки и транзакции, общается напрямую с peers и после выключения продолжает синхронизацию с сохранённого состояния.',
  'roadmap_title'=>'От протокола к продукту.',
  'roadmap_link'=>'Открыть полный Roadmap'
],
'pages'=>[
'home'=>[
  'title'=>'VALDR',
  'meta_title'=>'VALDR (VDR) — независимый Proof-of-Work блокчейн',
  'meta_description'=>'VALDR — независимая Proof-of-Work криптовалюта со своим блокчейном, native VDR, node, wallet и miner.',
  'kicker'=>'Independent. Open. Proof of Work.',
  'lead'=>'VALDR — независимая Proof-of-Work криптовалюта на собственном блокчейне. Native VDR. Своя нода. Свой wallet. Своя сеть.'
],
'getting_started'=>[
  'title'=>'Начало работы',
  'meta_title'=>'Начало работы с VALDR Testnet',
  'meta_description'=>'Безопасный старт с VALDR Testnet: Desktop, encrypted wallet, local node, синхронизация, получение, отправка и verification.',
  'kicker'=>'Начни с Testnet',
  'lead'=>'Сейчас VALDR работает как Testnet. Обычный путь пользователя: Desktop → encrypted wallet → local node → синхронизация сети → отправка или получение Testnet VDR.',
  'notice'=>[
    'type'=>'warning',
    'title'=>'Testnet VDR предназначен для тестирования',
    'text'=>'Текущая публичная software-линия — Testnet2. Testnet VDR нужен для проверки сети и программного обеспечения и не несёт обещания денежной ценности.'
  ],
  'sections'=>[
    [
      'heading'=>'1. Проверь software перед запуском',
      'paragraphs'=>[
        'Когда публичный release будет готов, начинай с официальной Download page и до запуска проверяй точный package через SHA-256 и GitHub/Sigstore provenance.',
        'Пока frozen public release не существует, сайт держит executable download links выключенными.'
      ],
      'bullets'=>[
        'Проверь release version и точный source commit',
        'Сверь SHA-256 package с canonical release metadata',
        'Проверь provenance против Sheff1981/valdr-core и ожидаемого CI workflow',
        'Не запускай package, если identity или checksum не совпадает'
      ]
    ],
    [
      'heading'=>'2. Создай или открой encrypted wallet',
      'paragraphs'=>[
        'VALDR Desktop хранит wallet secrets локально. Wallet v2 шифрует private-key payload на диске и требует user passphrase для unlock и signing.',
        'Сохрани wallet backup безопасно. Сайт не может восстановить потерянный private key или passphrase.'
      ]
    ],
    [
      'heading'=>'3. Дай local node синхронизироваться',
      'paragraphs'=>[
        'Desktop управляет локальной outbound-only VALDR node для обычного пользовательского режима. Нода сама проверяет chain data и после restart продолжает работу из сохранённого state.',
        'Пока синхронизация не завершена, balance, history и confirmations также могут быть неполными.'
      ]
    ],
    [
      'heading'=>'4. Получай и отправляй Testnet VDR',
      'paragraphs'=>[
        'Для получения передай public VDR address. Для отправки проверь destination и amount до того, как wallet локально подпишет transaction, а node отправит её в сеть.',
        'После подтверждения в chain VALDR transaction необратима. Центрального оператора, который может отменить корректный confirmed payment, нет.'
      ]
    ],
    [
      'heading'=>'5. При необходимости смотри состояние сети',
      'paragraphs'=>[
        'Используй Network и transaction views в Desktop для локального статуса или развёрнутый read-only VALDR Explorer для публичного просмотра blocks, transactions и addresses.',
        'Mining необязателен и запускается только явно; Desktop не должен начинать mining скрытно.'
      ]
    ]
  ]
],
'using_valdr'=>[
  'title'=>'Как пользоваться VALDR',
  'meta_title'=>'Как пользоваться VALDR — Wallet, Node, Transactions и Mining',
  'meta_description'=>'Роли компонентов VALDR: wallet, local node, miner, blockchain, P2P network и read-only Explorer.',
  'kicker'=>'Понимай роль каждого компонента',
  'lead'=>'VALDR разделяет обязанности: wallet хранит право подписи, node проверяет blockchain, miner ищет Proof of Work, а P2P network передаёт публичные данные между peers.',
  'sections'=>[
    [
      'heading'=>'Wallet: право распоряжаться средствами',
      'paragraphs'=>[
        'Wallet управляет addresses и encrypted private-key material. Он локально создаёт и подписывает transactions. Сайту и P2P network private key не нужен.'
      ]
    ],
    [
      'heading'=>'Node: проверяет blockchain',
      'paragraphs'=>[
        'Full node хранит validated chain state, проверяет blocks и transactions, применяет UTXO rules, выбирает valid branch по cumulative chainwork и relays принятые публичные данные.',
        'Для Desktop user managed node обычно подключается к peers наружу и не требует открытия inbound port.'
      ]
    ],
    [
      'heading'=>'Miner: предлагает blocks',
      'paragraphs'=>[
        'Miner строит candidate block из текущего chain state и mempool transactions, ищет header с подходящим Proof of Work и отправляет найденный block node.',
        'Финальную проверку всё равно выполняет node. Miner не может сделать invalid block действительным.'
      ]
    ],
    [
      'heading'=>'Blockchain и network — разные вещи',
      'cards'=>[
        ['title'=>'Blockchain','text'=>'Упорядоченная проверенная история blocks и UTXO state.'],
        ['title'=>'P2P network','text'=>'Peer-to-peer транспорт для blocks, transactions, headers и peer-discovery data.'],
        ['title'=>'Explorer','text'=>'Отдельный read-only просмотр public chain data. Он не управляет consensus и не хранит keys.'],
        ['title'=>'Desktop','text'=>'User interface, который объединяет wallet и local node experience без второй consensus implementation.']
      ]
    ],
    [
      'heading'=>'Self-custody и необратимые transactions',
      'paragraphs'=>[
        'Контроль private key означает контроль средств, которыми этот key может распоряжаться. Backup и passphrase должны оставаться под твоим контролем.',
        'Корректно подписанная и подтверждённая transaction не может быть отменена сайтом, miner, developer или support operator.'
      ]
    ],
    [
      'heading'=>'Текущий статус сети',
      'paragraphs'=>[
        'Активная development network — Testnet2 с Chain ID valdr-testnet-2. Mainnet в текущем build недоступен.',
        'Участие в текущем Testnet предназначено для проверки software, protocol и network.'
      ]
    ]
  ]
],
'about'=>[
  'title'=>'Что такое VALDR?',
  'meta_title'=>'Что такое VALDR (VDR)?',
  'meta_description'=>'Как VALDR работает как независимая Proof-of-Work криптовалюта со своим блокчейном и native-монетой VDR.',
  'kicker'=>'Независимый по архитектуре',
  'lead'=>'VALDR — нативная криптовалютная сеть: её chain, consensus, транзакции, mining и владение обеспечиваются самим ПО VALDR.',
  'sections'=>[
    [
      'heading'=>'Native-монета в собственной сети',
      'paragraphs'=>[
        'VDR создаётся, передаётся и проверяется непосредственно протоколом VALDR. Сеть VALDR сама обрабатывает транзакции и поддерживает собственное состояние цепи.',
        'Каждая full node применяет одинаковые protocol rules к блокам, транзакциям, Proof of Work, комиссиям и выбору активной цепи.'
      ],
      'bullets'=>[
        'Собственная реализация блокчейна на Go',
        'Native VDR и адреса VDR1',
        'Proof-of-Work consensus',
        'UTXO-транзакции',
        'Независимая P2P-сеть'
      ]
    ],
    [
      'heading'=>'Сеть, которую можно проверять самому',
      'paragraphs'=>[
        'Пользователь может полагаться на локальную VALDR node вместо стороннего сервера. Нода хранит проверенное состояние цепи, сверяет входящие данные с consensus rules и синхронизируется напрямую с peers.',
        'Desktop должен использовать существующую node/wallet/RPC архитектуру, а не создавать вторую реализацию блокчейна.'
      ]
    ],
    [
      'heading'=>'Свои ключи. Своя нода. Свой выбор.',
      'paragraphs'=>[
        'Нордический стиль — визуальный язык бренда, а смысл современный: контроль над собственным ПО и ключами. Сайт не придумывает древнюю мифологию и не выдаёт её за историю VALDR.'
      ]
    ]
  ]
],
'story'=>[
  'title'=>'История VALDR',
  'meta_title'=>'История VALDR',
  'meta_description'=>'Как VALDR прошёл путь от простой идеи и ранних исследований протокола к независимому Proof-of-Work блокчейну на Go.',
  'kicker'=>'От идеи к цепи',
  'lead'=>'VALDR начался с простой идеи: создать настоящую монету, построив сеть под ней.',
  'sections'=>[
    [
      'heading'=>'Первый вопрос',
      'paragraphs'=>[
        'Проект начался с практического вопроса: можно ли с нуля построить собственную монету и блокчейн, который будет работать как отдельная сеть?',
        'Ранние open-source реализации блокчейнов использовались как технические ориентиры для изучения независимых нод, Proof of Work, UTXO и native-монеты.'
      ]
    ],
    [
      'heading'=>'Ранние исследования протокола',
      'paragraphs'=>[
        'На раннем этапе существующее open-source blockchain software использовалось для обучения и проверки идей. Эти эксперименты помогли определить, что нужно проекту, а что нет. После этого VALDR перешёл к отдельной реализации со своей кодовой базой и сетевой идентичностью.'
      ]
    ],
    [
      'heading'=>'Отдельная реализация на Go',
      'paragraphs'=>[
        'VALDR Core стал самостоятельной Go-кодовой базой с node, blockchain state, wallet, miner, P2P, storage, RPC/CLI и Explorer. Протокол последовательно укрепляется через отдельные этапы ТЗ и автоматические проверки.'
      ]
    ],
    [
      'heading'=>'Один этап за другим',
      'paragraphs'=>[
        'Правило разработки: ТЗ → реализация → сборка → тест → проверка → следующий этап. AI-инструменты используются как технический партнёр, а protocol behavior фиксируется кодом и тестами в репозитории.',
        'Сначала сеть должна реально запускаться, синхронизироваться, майнить блоки, хранить состояние, подписывать транзакции и переживать restart. Только после этого следующий продуктовый этап считается готовым.'
      ]
    ]
  ]
],
'technology'=>[
  'title'=>'Технология',
  'meta_title'=>'Технология VALDR',
  'meta_description'=>'Архитектура VALDR: Go, Proof of Work, UTXO, P2P v2, chainwork, reorganization, fees, encrypted wallet и Testnet.',
  'kicker'=>'Протокол',
  'lead'=>'VALDR использует одну native-chain и намеренно компактный protocol stack.',
  'sections'=>[
    [
      'heading'=>'Blockchain и consensus',
      'paragraphs'=>[
        'Блоки VALDR проверяются канонической реализацией на Go. Протокол v0.2 использует точный 256-bit Proof-of-Work target, SHA-256 для block hashing и cumulative chainwork для выбора ветки.'
      ],
      'cards'=>[
        ['title'=>'Proof of Work','text'=>'Miner ищет действительный header, а nodes независимо проверяют target и остальные block rules.'],
        ['title'=>'Chainwork','text'=>'Активной становится действительная ветка с наибольшей накопленной работой.'],
        ['title'=>'Reorganization','text'=>'Side branches сохраняются, а более тяжёлая действительная ветка может заменить active tip через undo/reconnect.'],
        ['title'=>'Timestamp rules','text'=>'Median-time-past и future-time limits проверяются при принятии блока.']
      ]
    ],
    [
      'heading'=>'Transactions и UTXO',
      'paragraphs'=>[
        'Транзакции тратят существующие unspent outputs и создают новые. На v0.2 networks подписи и txid привязаны к активному Chain ID, чтобы исключить cross-network replay.'
      ],
      'bullets'=>[
        'Native UTXO ledger',
        'Network-bound v2 transactions',
        'Implicit transaction fees',
        'Consensus limits размера transaction и block',
        'Детерминированный mempool и miner ordering'
      ]
    ],
    [
      'heading'=>'P2P и synchronization',
      'paragraphs'=>[
        'VALDR nodes общаются через P2P v2, договариваются о версии протокола, обмениваются inventory и сначала синхронизируют headers. Header проверяется до запроса соответствующего block body.'
      ],
      'bullets'=>[
        'Chain-specific framing',
        'Handshake и version negotiation',
        'Headers-first full synchronization',
        'Peer discovery и seed bootstrap',
        'Rate limits, message caps и temporary bans'
      ]
    ],
    [
      'heading'=>'Storage, wallet и services',
      'bullets'=>[
        'Storage v2 на BadgerDB',
        'Encrypted wallet v2: scrypt-derived key + AES-256-GCM',
        'Localhost RPC по умолчанию',
        'Read-only reorg-aware Explorer',
        'Docker и Linux service deployment'
      ]
    ]
  ]
],
'mining'=>[
  'title'=>'Майнинг',
  'meta_title'=>'Майнинг VALDR Testnet',
  'meta_description'=>'Как работает Proof-of-Work майнинг VALDR и как текущий Testnet miner взаимодействует с full node.',
  'kicker'=>'Forge the chain',
  'lead'=>'VALDR использует Proof of Work. Miner создаёт candidate blocks, а node решает, действительны ли они.',
  'notice'=>[
    'type'=>'warning',
    'title'=>'Сейчас майнинг идёт в Testnet',
    'text'=>'Miner и Testnet runtime уже реализованы в текущем software stack. Testnet VDR используется для проверки сети и протокола и не имеет обещанной денежной стоимости.'
  ],
  'sections'=>[
    [
      'heading'=>'Майнинг уже есть в текущем software stack',
      'paragraphs'=>[
        'Текущая Testnet-сборка VALDR содержит valdr-miner вместе с valdrd, valdr-cli и valdr-explorer. Runtime-тесты майнят реальные Testnet blocks и проверяют их синхронизацию между несколькими nodes.',
        'То есть майнинг — не browser-функция и не маркетинговая имитация. Он является частью blockchain runtime.'
      ]
    ],
    [
      'heading'=>'Что происходит при добыче блока',
      'paragraphs'=>[
        'Miner собирает candidate block из активного chain state и выбранных mempool transactions, добавляет protocol subsidy и transaction fees и ищет header hash, удовлетворяющий текущему target.',
        'Найденный блок передаётся node. Нода проверяет Proof of Work, timestamps, transactions, UTXO spending, fees, size limits и network identity до принятия.'
      ]
    ],
    [
      'heading'=>'Домашний майнинг и node mining',
      'cards'=>[
        ['title'=>'Local Testnet','text'=>'Запускай node и miner на своём компьютере и участвуй в тестировании протокола.'],
        ['title'=>'Full-node mining','text'=>'Miner использует реальную node для active chain state и окончательной проверки блока.'],
        ['title'=>'Только явный запуск','text'=>'Mining — осознанное действие пользователя. Сайт никогда не майнит в браузере, а Desktop не должен включать майнинг скрытно.']
      ]
    ],
    [
      'heading'=>'Hardware',
      'paragraphs'=>[
        'Сейчас VALDR фиксирует протокол и программный путь, а не обещает доходность определённого железа. CPU/GPU/специализированная экономика может оцениваться только по реальным условиям сети в конкретный момент.'
      ]
    ]
  ]
],
'node'=>[
  'title'=>'Запустить ноду',
  'meta_title'=>'Запустить VALDR Full Node',
  'meta_description'=>'Что делает VALDR node, как она проверяет blockchain и чем отличается домашний режим от public-node.',
  'kicker'=>'Проверяй сеть сам',
  'lead'=>'Запустить VALDR node — значит хранить собственное проверенное представление blockchain вместо доверия стороннему серверу.',
  'sections'=>[
    [
      'heading'=>'Что на самом деле делает node',
      'paragraphs'=>[
        'VALDR node подключается к peers, получает chain data, проверяет blocks и transactions по consensus rules, хранит validated state и relays принятые сетевые данные.',
        'Нода не спрашивает сайт, какая chain правильная. Она локально проверяет Proof of Work, chainwork, timestamps, transactions и UTXO changes.'
      ]
    ],
    [
      'heading'=>'Что будет, если компьютер выключить',
      'paragraphs'=>[
        'Для сети ничего особенного. Пока компьютер выключен, твоя node просто не участвует. После запуска она продолжит работу из сохранённой базы и синхронизирует пропущенные данные.'
      ]
    ],
    [
      'heading'=>'Desktop user',
      'paragraphs'=>[
        'Планируемый VALDR Desktop строится вокруг локальной outbound-only node. Для обычной домашней сети это означает, что приложение само подключается наружу к peers и не требует от пользователя открывать inbound P2P port.'
      ]
    ],
    [
      'heading'=>'Public full node',
      'paragraphs'=>[
        'Server operator может запустить публично доступную node с явным P2P exposure. Linux reference deployment использует отдельного unprivileged user, persistent data directories, localhost RPC, firewall guidance и отдельный read-only Explorer.'
      ]
    ]
  ]
],
'wallet'=>[
  'title'=>'Кошелёк',
  'meta_title'=>'VALDR Wallet',
  'meta_description'=>'Как работают VALDR wallet, VDR addresses, encrypted key storage, backup, send и receive.',
  'kicker'=>'Ключи остаются у тебя',
  'lead'=>'VALDR wallet хранит key material, который разрешает тратить VDR. Официальному сайту private key никогда не нужен.',
  'notice'=>[
    'type'=>'danger',
    'title'=>'Никогда не отправляй private key или wallet password на сайт',
    'text'=>'Официальный сайт VALDR не является custodial wallet и не содержит форм для private keys, passphrases или wallet passwords.'
  ],
  'sections'=>[
    [
      'heading'=>'Wallet, address и private key',
      'cards'=>[
        ['title'=>'Wallet','text'=>'Локальное ПО, которое управляет addresses, encrypted key material и signed transactions.'],
        ['title'=>'VDR address','text'=>'Публичный адрес для получения VDR. Текущие network profiles используют prefix VDR1.'],
        ['title'=>'Private key','text'=>'Секретное право подписи. Кто контролирует private key, тот может авторизовать расходование.']
      ]
    ],
    [
      'heading'=>'Encrypted wallet storage',
      'paragraphs'=>[
        'Wallet v2 не хранит private key в plaintext. Ключ, полученный из user passphrase, защищает private-key payload через authenticated encryption, а public metadata остаётся доступной для обычного списка wallets.'
      ]
    ],
    [
      'heading'=>'Send и receive',
      'paragraphs'=>[
        'Чтобы получить VDR, достаточно передать public VDR address. Для отправки wallet локально unlocks key material, создаёт и подписывает network-bound transaction и передаёт signed transaction node для broadcast.',
        'Private keys не передаются по P2P и не должны попадать в node RPC payloads.'
      ]
    ],
    [
      'heading'=>'Backup и recovery',
      'paragraphs'=>[
        'Храни wallet backup отдельно от машины с node. Backup material и private keys — секреты. Потерянный private key не может быть восстановлен сайтом или network operator.'
      ]
    ]
  ]
],
'explorer'=>[
  'title'=>'Explorer',
  'meta_title'=>'VALDR Explorer',
  'meta_description'=>'VALDR Explorer показывает блоки, transactions, addresses, mempool и network status в read-only режиме.',
  'kicker'=>'Смотри цепочку',
  'lead'=>'VALDR Explorer — отдельный read-only service, построенный только на публичных blockchain data.',
  'sections'=>[
    [
      'heading'=>'Поиск по сети',
      'paragraphs'=>[
        'Explorer умеет искать block по height/hash, transaction по txid и VDR address. Также он показывает последние blocks, mempool, peers, chainwork, target и недавние интервалы между блоками.'
      ]
    ],
    [
      'heading'=>'Reorg-aware indexing',
      'paragraphs'=>[
        'Explorer хранит собственный index и следует active chain node. При reorganization он откатывается до common ancestor и строит index вперёд по новой активной ветке.'
      ]
    ],
    [
      'heading'=>'Только чтение',
      'paragraphs'=>[
        'Explorer не содержит signing controls, private keys или mining privileges. Он читает public chain data через node RPC и может быть полностью перестроен без изменения consensus state.'
      ]
    ]
  ]
],
'security'=>[
  'title'=>'Безопасность',
  'meta_title'=>'Безопасность VALDR',
  'meta_description'=>'Принципы безопасности VALDR wallet, nodes, downloads и официального сайта.',
  'kicker'=>'Проверяй то, что запускаешь',
  'lead'=>'Ключи остаются локально, downloads проверяются, а сетевые services разделены по ролям.',
  'sections'=>[
    [
      'heading'=>'Защищай ключи',
      'bullets'=>[
        'Никогда не передавай private key, wallet passphrase или wallet password',
        'Храни backup отдельно от основного устройства',
        'Проверяй destination address перед подписью transaction',
        'Считай подозрительным любой support-запрос, где просят key material'
      ]
    ],
    [
      'heading'=>'Границы сайта',
      'bullets'=>[
        'Нет custodial wallet',
        'Нет private-key forms',
        'Нет browser cryptomining',
        'Нет скрытых trackers по умолчанию',
        'Нет automatic executable downloads',
        'Restrictive Content Security Policy и browser headers'
      ]
    ],
    [
      'heading'=>'Границы node',
      'bullets'=>[
        'RPC по умолчанию слушает localhost',
        'Private keys не передаются по P2P',
        'Explorer read-only и отделён от consensus storage',
        'Public inbound P2P включается только явной operator configuration'
      ]
    ],
    [
      'heading'=>'Проверяй software перед запуском',
      'paragraphs'=>[
        'Release page должна точно показывать, какой файл скачивается, к какой version и source commit он относится, его SHA-256 и статус signed release manifest. VALDR заполняет эти поля только реальными release artifacts.'
      ]
    ]
  ]
],
'roadmap'=>[
  'title'=>'Roadmap',
  'meta_title'=>'Roadmap VALDR',
  'meta_description'=>'Roadmap VALDR: verified core protocol, Desktop, release packaging, Public Testnet и будущий Mainnet.',
  'kicker'=>'От кода к сети',
  'lead'=>'VALDR развивается через явные implementation и verification gates. Roadmap отделяет существующий код от полностью завершённых этапов.'
],
'community'=>[
  'title'=>'Сообщество',
  'meta_title'=>'Сообщество VALDR',
  'meta_description'=>'Официальные community и development channels VALDR.',
  'kicker'=>'Строим сеть вместе',
  'lead'=>'Разработка начинается в исходном коде. Community channels добавляются сюда только после того, как становятся официальными.',
  'sections'=>[
    [
      'heading'=>'Официальная разработка',
      'paragraphs'=>[
        'VALDR Core и source официального сайта ведутся в GitHub-аккаунте Sheff1981. Технические изменения фиксируются commits и CI.'
      ],
      'cards'=>[
        ['title'=>'GitHub','text'=>'Protocol и website development source.'],
        ['title'=>'Telegram','text'=>'Официальная ссылка появится здесь после создания канала.'],
        ['title'=>'VK','text'=>'Официальная ссылка появится здесь после создания канала.'],
        ['title'=>'X','text'=>'Официальная ссылка появится здесь после создания канала.'],
        ['title'=>'Reddit','text'=>'Официальная ссылка появится здесь после создания канала.'],
        ['title'=>'Discord','text'=>'Официальная ссылка появится здесь после создания канала.']
      ]
    ],
    [
      'heading'=>'Проверяй канал',
      'paragraphs'=>[
        'Аккаунт не становится официальным только потому, что использует название VALDR или похожую графику. Используй ссылки с этого сайта или официальных repositories.'
      ]
    ]
  ]
],
'faq'=>[
  'title'=>'FAQ',
  'meta_title'=>'VALDR FAQ',
  'meta_description'=>'Ответы о VALDR blockchain, mining, nodes, wallet, downloads и Testnet.',
  'kicker'=>'Частые вопросы',
  'lead'=>'Короткие ответы о сети и программном обеспечении.',
  'sections'=>[
    [
      'heading'=>'Что такое VDR?',
      'paragraphs'=>['VDR — native-монета блокчейна VALDR. Она создаётся, передаётся и проверяется самим протоколом VALDR.']
    ],
    [
      'heading'=>'VALDR можно майнить?',
      'paragraphs'=>['Да. Текущий Testnet software stack включает valdr-miner, а runtime-тесты майнят реальные Testnet blocks. Mining работает через VALDR node, которая независимо проверяет каждый submitted block.']
    ],
    [
      'heading'=>'Что делает full node?',
      'paragraphs'=>['Она хранит собственный validated chain state, локально проверяет protocol rules, синхронизируется с peers и relays принятые данные.']
    ],
    [
      'heading'=>'Сайт хранит мои wallet keys?',
      'paragraphs'=>['Нет. Сайт информационный и non-custodial. Private keys и wallet passwords должны оставаться только в локальном wallet software.']
    ],
    [
      'heading'=>'Где скачивать VALDR?',
      'paragraphs'=>['Download page — официальный entry point для releases. Platform buttons становятся активными только после появления verified artifact в release manifest.']
    ],
    [
      'heading'=>'Что такое VALDR Desktop?',
      'paragraphs'=>['Это планируемый desktop interface, который объединяет local node и encrypted wallet experience для обычного пользователя и не дублирует consensus logic.']
    ]
  ]
],
'docs'=>[
  'title'=>'Документация',
  'meta_title'=>'Документация VALDR',
  'meta_description'=>'Документация VALDR для пользователей, miners, node operators и developers.',
  'kicker'=>'Изучи сеть',
  'lead'=>'Начни с задачи, которую хочешь выполнить, а затем переходи глубже к protocol details.',
  'sections'=>[
    [
      'heading'=>'Для пользователя',
      'cards'=>[
        ['title'=>'Wallet','text'=>'Addresses, local keys, encrypted storage, send, receive и backup.'],
        ['title'=>'Download','text'=>'Platform packages, release metadata и verification.'],
        ['title'=>'Security','text'=>'Key handling, website boundaries и download safety.']
      ]
    ],
    [
      'heading'=>'Для участника сети',
      'cards'=>[
        ['title'=>'Mining','text'=>'Proof of Work, candidate blocks и текущий Testnet miner.'],
        ['title'=>'Run a Node','text'=>'Local node, synchronization и server operation.'],
        ['title'=>'Explorer','text'=>'Read-only просмотр chain, transactions и addresses.']
      ]
    ],
    [
      'heading'=>'Для developers и operators',
      'paragraphs'=>[
        'Активный protocol source находится в valdr-core. Публичная документация следует проверенному repository code и CI; внутренняя проектная спецификация на сайте не публикуется.'
      ]
    ]
  ]
],
'verify'=>[
  'title'=>'Проверка загрузок',
  'meta_title'=>'Проверить загрузки VALDR',
  'meta_description'=>'Проверка VALDR release files через SHA-256 и GitHub/Sigstore keyless provenance.',
  'kicker'=>'Целостность релиза',
  'lead'=>'Не доверяй одному имени файла. Перед запуском проверяй artifact, repository identity и точный source commit.',
  'sections'=>[
    [
      'heading'=>'Цепочка проверки',
      'paragraphs'=>[
        'VALDR использует две независимые проверки: SHA-256 подтверждает точные bytes файла, а GitHub/Sigstore provenance подтверждает, что artifact создан ожидаемым valdr-core workflow из ожидаемого source commit.'
      ],
      'bullets'=>[
        'Скачать package, release-manifest.json и SHA256SUMS из официального release location',
        'Проверить SHA-256 package',
        'Получить точный source commit из release-manifest.json',
        'Проверить GitHub Artifact Attestation против Sheff1981/valdr-core и VALDR release workflow',
        'Не запускать файл, если hash, repository, workflow или source commit отличаются'
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
      'heading'=>'Что provenance доказывает, а что нет',
      'paragraphs'=>[
        'Совпавший checksum подтверждает, что скачанные bytes соответствуют опубликованным release metadata. Успешная provenance-проверка связывает эти bytes с ожидаемым публичным repository, workflow и source commit. Это не security audit и не одобрение со стороны Microsoft, Apple, GitHub или Sigstore.'
      ]
    ],
    [
      'heading'=>'Packages без подписи операционной системы',
      'paragraphs'=>[
        'Windows Authenticode и Apple Developer ID/notarization для VALDR Testnet являются дополнительным усилением, а не обязательным условием. Если они недоступны, release metadata прямо это показывает. Не отключай защиту операционной системы глобально: сначала проверь package и используй только обычное per-application разрешение, если решишь его запускать.'
      ]
    ]
  ]
],
'releases'=>[
  'title'=>'Релизы',
  'meta_title'=>'Релизы VALDR',
  'meta_description'=>'VALDR software releases, release notes и криптографические verification metadata.',
  'kicker'=>'Официальное ПО',
  'lead'=>'Каждый опубликованный package относится к конкретной version, source commit и network profile.',
  'sections'=>[
    [
      'heading'=>'Что содержит VALDR release',
      'bullets'=>[
        'Version и release date',
        'Точный source commit',
        'Operating system и architecture',
        'Exact filename и size',
        'SHA-256 checksum',
        'GitHub/Sigstore provenance status',
        'Честный Windows/macOS vendor-signing status',
        'Release notes'
      ]
    ],
    [
      'heading'=>'Development package не равен release',
      'paragraphs'=>[
        'Development packages могут быть собраны CI, проверены по checksum и provenance-attested, но ещё не являться публичным Testnet release. Installer links активируются только после появления замороженного release candidate в официальном release storage и прохождения всех publication gates.'
      ]
    ]
  ]
],
'download'=>[
  'title'=>'Скачать VALDR',
  'meta_title'=>'Скачать VALDR Testnet',
  'meta_description'=>'Официальные VALDR Testnet packages для Windows, macOS и Linux после публикации verified releases.',
  'kicker'=>'Официальное ПО',
  'lead'=>'Выбери platform, проверь release и запускай VALDR на своём компьютере.'
]
]
];
