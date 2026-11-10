<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WorkOut') | WorkOut</title>
    <style>
        :root {
            --bg: #ffffff;
            --card: #ffffff;
            --card-2: #f4f5f7;
            --line: #e5e7eb;
            --text: #1f2328;
            --muted: #6b7280;
            --accent: #dc2626;
            --accent-dark: #b91c1c;
            --accent-soft: #fef2f2;
            --ok: #15803d;
            --radius: 16px;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        main { flex: 1; width: 100%; max-width: 1080px; margin: 0 auto; padding: 32px 20px; }

        h1 { font-size: 2rem; line-height: 1.2; }
        h2 { font-size: 1.3rem; margin-bottom: 14px; }
        .muted { color: var(--muted); }
        .accent { color: var(--accent); }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 22px;
        }
        .grid { display: grid; gap: 16px; }
        .grid-3 { grid-template-columns: repeat(3, 1fr); }
        .grid-cards { grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: #ffffff;
            font-weight: 700;
            border: 0;
            border-radius: 12px;
            padding: 12px 22px;
            cursor: pointer;
            font-size: 1rem;
            transition: transform .15s, box-shadow .15s;
        }
        .btn:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(220,38,38,.3); }

        .badge {
            display: inline-block;
            padding: 3px 12px;
            border-radius: 999px;
            font-size: .78rem;
            font-weight: 700;
        }
        .badge-ok { background: #dcfce7; color: var(--ok); }
        .badge-rest { background: #e5e7eb; color: #4b5563; }

        .stat-num { font-size: 2.2rem; font-weight: 800; color: var(--accent); line-height: 1.1; }

        @media (max-width: 768px) {
            .grid-3 { grid-template-columns: 1fr; }
            h1 { font-size: 1.6rem; }
            main { padding: 22px 16px; }
        }
    </style>
    @stack('styles')
</head>
<body>
    @hasSection('nonav')
    @else
        <x-navbar :username="$username ?? ''" :active="trim($__env->yieldContent('active'))" />
    @endif

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
