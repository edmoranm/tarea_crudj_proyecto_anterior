<?php include_once '../includes/header.php' ?>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        text-align: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h1 {
        font-size: 3em;
        font-family: 'Arial', sans-serif;
        text-shadow: 2px 2px 4px rgba(0, 0, 255, 0.5);
        color: #333;
        margin: 50px;
        padding: 20px;
        background: linear-gradient(45deg, #6b9dfc, #4a6cf7);
        border-radius: 10px;
        border: 2px solid #4a6cf7;
        text-align: center;
    }

    video {
        width: 100%;
        max-width: 800px;
        border: 3px solid blue;
        border-radius: 10px;
        box-shadow: black rgba(0, 0, 0, 0.5);
    }
</style>
</head>

<body>
    <h1>ESCUELA DE INFORMATICA</h1>
    <video controls>
        <source src="../../images/videoplayback.mp4" type="video/mp4">
    </video>
</body>
<?php include_once '../includes/footer.php' ?>

