<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to a New World</title>
    <style>
        body {
            color: #000;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }

        .parallax {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            animation: changeGradient 10s infinite alternate; /* Percepat transisi menjadi 6 detik */
        }

        .parallax::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #3498db, #8e44ad);
            z-index: -1;
            transition: opacity 1s;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 3em;
            animation: bounceIn 2s ease-in-out;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            transition: color 0.5s;
        }

        h1:hover {
            color: yellow;
        }

        p {
            font-size: 1.5em;
            max-width: 600px;
            text-align: center;
            line-height: 1.5;
            animation: slideIn 2s ease-in-out;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            transition: color 0.5s;
        }

        p:hover {
            color: yellow;
        }

        /* Efek salju */
        .snow {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: #fff;
            border-radius: 50%;
            opacity: 0.5;
            animation: fallingSnow linear infinite;
        }

        @keyframes fallingSnow {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(100vh);
            }
        }

        @keyframes changeGradient {
            0% {
                background: linear-gradient(45deg, #3498db, #8e44ad);
            }
            100% {
                background: linear-gradient(45deg, #e74c3c, #2c3e50);
            }
        }

        /* Efek matahari dan bulan */
        .sun {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            background: radial-gradient(circle, #ffd700 30%, transparent 70%); /* Warna kuning untuk matahari */
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.8), 0 0 40px rgba(255, 215, 0, 0.5);
            animation: moveSun 10s linear infinite;
        }

        .sun-rays {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 2px;
            height: 25px;
            background-color: #ffd700; /* Warna kuning untuk sinar matahari */
            transform-origin: bottom;
            animation: rotateSunRays 6s infinite alternate;
        }

        .moon {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            background: radial-gradient(circle, #ffd700 20%, transparent 70%); /* Warna kuning untuk bulan sabit */
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.8), 0 0 40px rgba(255, 215, 0, 0.5);
            animation: moveMoon 12s linear infinite;
            opacity: 0; /* Awalnya bulan tersembunyi */
        }

        @keyframes moveSun {
            0% {
                left: -50px;
            }
            100% {
                left: calc(100% + 50px);
            }
        }

        @keyframes moveMoon {
            0%, 100% {
                left: -50px;
            }
        }

        @keyframes rotateSunRays {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes bounceIn {
            from {
                transform: scale(0.5);
            }
            to {
                transform: scale(1);
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
            }
            to {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="parallax">
        <!-- Efek matahari dan bulan -->
        <div class="sun"></div>
        <div class="sun-rays"></div>
        <div class="moon"></div>
        <div class="moon-crescent"></div>

        <!-- Efek salju -->
        <div class="snow" style="left: 10%; animation-duration: 10s;"></div>
        <div class="snow" style="left: 20%; animation-duration: 15s;"></div>
        <div class="snow" style="left: 30%; animation-duration: 12s;"></div>
        <div class="snow" style="left: 40%; animation-duration: 10s;"></div>
        <div class="snow" style="left: 50%; animation-duration: 14s;"></div>
        <div class="snow" style="left: 60%; animation-duration: 13s;"></div>
        <div class="snow" style="left: 70%; animation-duration: 11s;"></div>
        <div class="snow" style="left: 80%; animation-duration: 12s;"></div>
        <div class="snow" style="left: 90%; animation-duration: 14s;"></div>
        <div class="snow" style="left: 95%; animation-duration: 10s;"></div>

        <div class="content">
            <h1>Welcome to a New World</h1>
            <p>Explore the wonders of CodeIgniter, an open-source software rapid development web framework for building dynamic web sites with PHP.</p>
        </div>
    </div>
</body>
</html>
