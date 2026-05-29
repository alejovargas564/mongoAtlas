<?php
require 'vendor/autoload.php';

$cliente    = new MongoDB\Client("mongodb+srv://alejovargas990126_db_user:9C7cYQjYZowV5lqm@cluster0.yqumqnf.mongodb.net/prueba?appName=Cluster0");
$db         = $cliente->prueba;
$coleccion  = $db->gustos;

// Buscar todos los documentos, los más recientes primero
$registros = $coleccion->find([], ['sort' => ['_id' => -1]]);
$total     = $coleccion->countDocuments();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Hall of Fame Deportivo</title>
    <style>
        :root {
            --verde: #00ff87;
            --oscuro: #0a0e1a;
            --gris: #111827;
            --gris2: #1f2937;
            --texto: #e5e7eb;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--oscuro);
            color: var(--texto);
            font-family: 'Barlow', sans-serif;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(0,255,135,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,255,135,0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            z-index: 0;
            pointer-events: none;
        }

        .wrapper {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px 60px;
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 48px;
            animation: fadeDown 0.6s ease both;
        }

        .badge-top {
            display: inline-block;
            background: var(--verde);
            color: var(--oscuro);
            font-family: 'Bebas Neue', sans-serif;
            font-size: 0.75rem;
            letter-spacing: 3px;
            padding: 4px 16px;
            border-radius: 2px;
            margin-bottom: 16px;
        }

        h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2.8rem, 8vw, 4.5rem);
            line-height: 1;
            letter-spacing: 2px;
            color: #fff;
        }

        h1 span { color: var(--verde); }

        .subtitle { color: #6b7280; font-size: 0.95rem; margin-top: 10px; }

        /* Contador total */
        .total-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0,255,135,0.1);
            border: 1px solid rgba(0,255,135,0.25);
            border-radius: 50px;
            padding: 8px 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--verde);
            margin-top: 16px;
            letter-spacing: 1px;
        }

        /* Buscador */
        .search-bar {
            margin-bottom: 32px;
            animation: fadeUp 0.6s 0.2s ease both;
        }

        .search-input {
            background: var(--gris);
            border: 1px solid #374151;
            border-radius: 10px;
            padding: 13px 18px 13px 46px;
            color: #fff;
            font-family: 'Barlow', sans-serif;
            font-size: 0.95rem;
            width: 100%;
            transition: border-color 0.2s;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--verde);
        }

        .search-input::placeholder { color: #4b5563; }

        .search-wrap {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #4b5563;
            font-size: 1rem;
        }

        /* Grid de tarjetas */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
            gap: 20px;
        }

        /* Tarjeta individual */
        .card-atleta {
            background: var(--gris);
            border: 1px solid #1f2937;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.2s, border-color 0.2s, box-shadow 0.2s;
            animation: fadeUp 0.5s ease both;
        }

        .card-atleta:hover {
            transform: translateY(-4px);
            border-color: rgba(0,255,135,0.3);
            box-shadow: 0 12px 40px rgba(0,255,135,0.08);
        }

        .card-top {
            background: var(--gris2);
            padding: 20px 20px 16px;
            border-bottom: 1px solid #1f2937;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .deporte-icon {
            font-size: 2rem;
            line-height: 1;
        }

        .stars-display {
            color: #fbbf24;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        .card-body-custom {
            padding: 18px 20px;
        }

        .atleta-nombre {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.4rem;
            letter-spacing: 1px;
            color: #fff;
            line-height: 1.1;
            margin-bottom: 4px;
        }

        .atleta-pais {
            font-size: 0.78rem;
            color: var(--verde);
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .logro-tag {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: rgba(0,255,135,0.08);
            border: 1px solid rgba(0,255,135,0.15);
            border-radius: 6px;
            padding: 4px 10px;
            font-size: 0.78rem;
            color: var(--verde);
            margin-bottom: 12px;
        }

        .razon-texto {
            font-size: 0.85rem;
            color: #6b7280;
            line-height: 1.5;
            font-style: italic;
            border-left: 2px solid #1f2937;
            padding-left: 10px;
        }

        .card-footer-custom {
            padding: 10px 20px;
            background: rgba(0,0,0,0.2);
            font-size: 0.72rem;
            color: #374151;
            border-top: 1px solid #1f2937;
        }

        /* Registrado por */
        .registrado-por {
            font-size: 0.78rem;
            color: #4b5563;
            margin-top: 10px;
            font-weight: 500;
        }

        .registrado-por span { color: #9ca3af; }

        /* Sin registros */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #4b5563;
        }

        .empty-state .big-icon { font-size: 4rem; margin-bottom: 16px; }

        /* Botón volver */
        .btn-volver {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            border: 1px solid rgba(0,255,135,0.3);
            color: var(--verde);
            border-radius: 8px;
            padding: 10px 22px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1rem;
            letter-spacing: 2px;
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 32px;
        }

        .btn-volver:hover {
            background: rgba(0,255,135,0.1);
            color: var(--verde);
            transform: translateX(-3px);
        }

        /* Sin resultados de búsqueda */
        #noResults {
            display: none;
            text-align: center;
            padding: 40px;
            color: #4b5563;
            grid-column: 1 / -1;
        }

        /* Iconos por deporte */
        .icon-futbol::before    { content: '⚽'; }
        .icon-baloncesto::before { content: '🏀'; }
        .icon-tenis::before     { content: '🎾'; }
        .icon-natacion::before  { content: '🏊'; }
        .icon-atletismo::before { content: '🏃'; }
        .icon-otro::before      { content: '🏅'; }

        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .cards-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="wrapper">

    <!-- Header -->
    <div class="header">
        <div class="badge-top">⚡ Hall of Fame</div>
        <h1>ÍDOLOS<br><span>REGISTRADOS</span></h1>
        <p class="subtitle">Todos los deportistas y equipos favoritos de la comunidad</p>
        <div class="total-badge">
            🏆 <?= $total ?> <?= $total == 1 ? 'registro' : 'registros' ?> en total
        </div>
    </div>

    <!-- Botón volver -->
    <a href="index.html" class="btn-volver">← Registrar nuevo ídolo</a>

    <!-- Buscador JS -->
    <div class="search-bar">
        <div class="search-wrap">
            <span class="search-icon">🔍</span>
            <input type="text" class="search-input" id="buscador"
                placeholder="Buscar por nombre, deportista, país o deporte..."
                oninput="filtrarTarjetas()">
        </div>
    </div>

    <!-- Grid de tarjetas -->
    <?php if ($total > 0): ?>
    <div class="cards-grid" id="cardsGrid">

        <?php foreach ($registros as $reg): ?>
        <?php
            // Mapear deporte a icono CSS
            $deporte  = strtolower($reg['deporte'] ?? 'otro');
            $iconClass = 'icon-otro';
            if (str_contains($deporte, 'fútbol') || str_contains($deporte, 'futbol')) $iconClass = 'icon-futbol';
            elseif (str_contains($deporte, 'baloncesto')) $iconClass = 'icon-baloncesto';
            elseif (str_contains($deporte, 'tenis'))      $iconClass = 'icon-tenis';
            elseif (str_contains($deporte, 'natación') || str_contains($deporte, 'natacion')) $iconClass = 'icon-natacion';
            elseif (str_contains($deporte, 'atletismo'))  $iconClass = 'icon-atletismo';

            // Estrellas
            $rating  = (int)($reg['admiracion'] ?? 0);
            $estrellas = str_repeat('★', $rating) . str_repeat('☆', 5 - $rating);

            // Fecha legible
            $fecha = isset($reg['registro']) ? $reg['registro'] : 'Sin fecha';
        ?>
        <div class="card-atleta" data-search="<?= strtolower(
            ($reg['nombres']    ?? '') . ' ' .
            ($reg['deportista'] ?? '') . ' ' .
            ($reg['pais']       ?? '') . ' ' .
            ($reg['deporte']    ?? '')
        ) ?>">

            <div class="card-top">
                <div class="deporte-icon <?= $iconClass ?>"></div>
                <div class="stars-display" title="Admiración: <?= $rating ?>/5">
                    <?= $estrellas ?>
                </div>
            </div>

            <div class="card-body-custom">
                <div class="atleta-nombre"><?= htmlspecialchars($reg['deportista'] ?? 'Sin nombre') ?></div>
                <div class="atleta-pais">🌎 <?= htmlspecialchars($reg['pais'] ?? '') ?> · <?= htmlspecialchars($reg['deporte'] ?? '') ?></div>

                <?php if (!empty($reg['logro'])): ?>
                <div class="logro-tag">🏆 <?= htmlspecialchars($reg['logro']) ?></div>
                <?php endif; ?>

                <?php if (!empty($reg['razon'])): ?>
                <p class="razon-texto">"<?= htmlspecialchars($reg['razon']) ?>"</p>
                <?php endif; ?>

                <div class="registrado-por">
                    Registrado por: <span><?= htmlspecialchars($reg['nombres'] ?? 'Anónimo') ?></span>
                </div>
            </div>

            <div class="card-footer-custom">
                📅 <?= htmlspecialchars($fecha) ?>
            </div>

        </div>
        <?php endforeach; ?>

        <div id="noResults">
            <div style="font-size:2.5rem;margin-bottom:12px;">🔍</div>
            <p>No se encontraron resultados para tu búsqueda.</p>
        </div>

    </div>

    <?php else: ?>
    <div class="empty-state">
        <div class="big-icon">🏟️</div>
        <h3 style="font-family:'Bebas Neue';font-size:1.8rem;color:#4b5563;letter-spacing:2px;">EL HALL ESTÁ VACÍO</h3>
        <p style="margin-top:8px;">Sé el primero en registrar tu ídolo deportivo.</p>
    </div>
    <?php endif; ?>

</div>

<script>
    function filtrarTarjetas() {
        const query   = document.getElementById('buscador').value.toLowerCase().trim();
        const tarjetas = document.querySelectorAll('.card-atleta');
        let visibles  = 0;

        tarjetas.forEach(card => {
            const texto = card.getAttribute('data-search') || '';
            const match = texto.includes(query);
            card.style.display = match ? '' : 'none';
            if (match) visibles++;
        });

        const noResults = document.getElementById('noResults');
        if (noResults) noResults.style.display = visibles === 0 ? 'block' : 'none';
    }

    // Animación escalonada de tarjetas al cargar
    document.querySelectorAll('.card-atleta').forEach((card, i) => {
        card.style.animationDelay = (i * 0.07) + 's';
    });
</script>

</body>
</html>
