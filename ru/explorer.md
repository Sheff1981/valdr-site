---
layout: default
lang: ru
title: VALDR Explorer
description: Read-only просмотр блоков, транзакций, адресов, mempool и состояния сети VALDR.
permalink: /ru/explorer/
alt_url: /explorer/
---
<div class="wrap page">
<header class="page-header">
<p class="eyebrow">Explorer</p>
<h1>VALDR Explorer</h1>
<p class="lead">VALDR Explorer — отдельный read-only сервис для просмотра данных blockchain и состояния сети.</p>
</header>

<p>Он подключается к <code>valdrd</code> через read-only RPC, ведёт собственный restart-safe индекс и предоставляет поиск и просмотр блоков, транзакций, адресов, mempool и network status. Explorer не подписывает транзакции, не майнит блоки и не выполняет privileged node operations.</p>

<h2>1. Поиск по blockchain</h2>
<p>Explorer поддерживает точный поиск по <strong>высоте блока, hash блока, transaction ID и адресу VDR</strong>. Поиск только читает индексированные данные и не изменяет состояние сети.</p>

<h2>2. Просмотр блока</h2>
<p>Страница блока может показывать header, height, hash, ссылку на предыдущий блок, timestamp, difficulty и список включённых транзакций. Это позволяет проверить, в каком блоке появилась транзакция и как этот блок связан с цепочкой.</p>

<h2>3. Просмотр транзакции</h2>
<p>Страница транзакции может показывать transaction ID, inputs, outputs, значения и контекст подтверждения. Для UTXO-модели это позволяет увидеть, какие outputs были израсходованы и какие новые outputs были созданы.</p>

<h2>4. Просмотр адреса</h2>
<p>Страница адреса может показывать <strong>balance, transaction history и current UTXOs</strong>. Эти данные Explorer получает из своего индекса данных ноды. Private key пользователя ему недоступен.</p>

<h2>5. Просмотр mempool</h2>
<p>Mempool view показывает индексированные неподтверждённые транзакции и сводную информацию. Наличие транзакции в mempool ещё не означает её подтверждение в блоке.</p>

<h2>6. Состояние сети</h2>
<p>Explorer может отображать read-only данные о synchronization status, peers, difficulty и последних интервалах между блоками. Это даёт наблюдаемость сети, но не делает Explorer участником consensus.</p>

<h2>7. Обработка reorganization</h2>
<p>Explorer обязан обнаруживать blockchain reorganization. Если active chain меняется, indexer откатывает затронутые высоты и заново индексирует новую активную ветку, чтобы данные блоков, транзакций и адресов соответствовали состоянию ноды.</p>

<h2>8. API для автоматизации</h2>
<p>Архитектура Explorer предусматривает REST API <code>/api/v1</code> для status, recent blocks, block details, transaction details, address data и mempool summaries.</p>

<h2>Роль Explorer</h2>
<p><strong>Node → read-only RPC → Explorer index → search / views / API.</strong></p>
<p>Источником protocol truth остаётся Node. Explorer отвечает за индексирование и удобное представление данных.</p>

<div class="next"><a class="button" href="/ru/getting-started/">Дальше: начало работы →</a></div>
</div>
