---
layout: default
lang: ru
title: Майнинг VALDR
description: Как майнер VALDR формирует candidate blocks и выполняет Proof of Work.
permalink: /ru/mining/
alt_url: /mining/
---
<div class="wrap page">
<header class="page-header">
<p class="eyebrow">Майнинг</p>
<h1>Майнинг VALDR</h1>
<p class="lead">Майнинг VALDR — это процесс формирования candidate blocks и поиска корректного Proof of Work.</p>
</header>

<p>Miner не определяет consensus самостоятельно. Он работает вместе с синхронизированной VALDR Node, получает block template, выполняет поиск hash и отправляет найденный блок обратно ноде для полной проверки.</p>

<h2>1. Начните с синхронизированной ноды</h2>
<p>Майнинг зависит от актуального состояния цепочки. Перед запуском Miner подключённая Node должна быть синхронизирована и способна сообщить текущую высоту, tip, difficulty и состояние mempool. Miner использует Node как источник валидного chain state и данных для candidate block.</p>

<h2>2. Получите block template</h2>
<p>Miner получает block template через node mining API. Template содержит данные, необходимые для формирования candidate block, включая актуальный контекст цепочки и подходящие транзакции. Consensus validation остаётся внутри <code>valdrd</code>.</p>

<h2>3. Выберите транзакции</h2>
<p>Candidate transactions выбираются из mempool. В mining policy v0.2 транзакции сортируются по fee rate. При необходимости используется детерминированный tie-break по transaction ID. Готовый candidate block должен оставаться в пределах установленного ограничения размера блока.</p>

<h2>4. Сформируйте candidate block</h2>
<p>Miner формирует candidate block, который ссылается на текущий chain tip. Блок содержит набор транзакций, timestamp и mining fields, необходимые для Proof of Work. Значение coinbase не должно превышать разрешённую subsidy плюс корректные transaction fees.</p>

<h2>5. Найдите корректный Proof of Work</h2>
<p>Miner многократно изменяет nonce и вычисляет hash candidate block. Цель — найти hash, который удовлетворяет текущему difficulty target. Candidate, который не удовлетворяет target, не является валидным найденным блоком.</p>

<h2>6. Передайте блок ноде</h2>
<p>После нахождения подходящего Proof-of-Work candidate Miner отправляет блок VALDR Node. Node выполняет полную consensus validation: проверяет структуру блока, связь с цепочкой, difficulty, Proof of Work, транзакции, изменения UTXO, ограничения reward и другие consensus-critical правила.</p>

<p>Miner не может заставить сеть принять некорректный блок.</p>

<h2>7. Принятый блок распространяется по сети</h2>
<p>Если Node принимает блок, он становится частью active chain этой ноды и передаётся подключённым peers. Другие ноды выполняют собственную проверку перед принятием блока.</p>

<h2>Статус майнера</h2>
<p>Miner может показывать <strong>hashrate, current height, difficulty, accepted blocks, rejected templates и current template fees</strong>. Эти данные описывают работу Miner и не заменяют consensus validation ноды.</p>

<h2>Полный цикл</h2>
<p><strong>Синхронизированная Node → Block Template → Transaction Selection → Candidate Block → Nonce Search → Proof of Work → Node Validation → Accepted Block → P2P Propagation.</strong></p>

<p>Разделение ролей сделано намеренно: Miner выполняет вычислительную Proof-of-Work работу, а Node отвечает за consensus.</p>

<div class="next"><a class="button" href="/ru/explorer/">Дальше: Explorer →</a></div>
</div>
