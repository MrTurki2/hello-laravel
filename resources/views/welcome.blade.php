<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #FF2D20 0%, #1a1a2e 100%);
            color: white;
        }
        .container { text-align: center; }
        h1 { font-size: 3em; margin-bottom: 0.2em; }
        .location { font-size: 1.5em; color: #FF6B6B; }
        .info { margin-top: 2em; color: rgba(255,255,255,0.7); }
        .version { 
            background: rgba(255,255,255,0.1); 
            padding: 0.5em 1em; 
            border-radius: 20px;
            display: inline-block;
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Hello Laravel!</h1>
        <p class="location">📍 الرياض، السعودية</p>
        <p class="info">Deployed via Coolify on Huawei Cloud</p>
        <p class="version">Laravel {{ Illuminate\Foundation\Application::VERSION }} | PHP {{ PHP_VERSION }}</p>
        <p class="info">{{ now()->format('Y-m-d H:i:s') }}</p>
    </div>
</body>
</html>
