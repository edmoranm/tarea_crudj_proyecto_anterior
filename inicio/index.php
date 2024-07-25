<?php include_once '#'; ?>
<style>


.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.carousel-inner img {
    border-radius: 10px;
}

header, footer {
    text-align: center;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    margin-bottom: 20px;
}

header h1 {
    margin: 0;
    color: #333;
    font-size: 2.5em;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #1a237e, #3f51b5); /* Azul */
    -webkit-text-fill-color: white;
    padding: 10px 20px;
    border-radius: 10px;
}

footer p {
    margin: 0;
    color: #000; /* Negro */
}


</style>
<body>
    <div class="container my-5">
    <header>
            <h1>Alumnos CIT</h1>
        </header>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../images/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../images/img4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../images/img5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../images/img6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

<?php include_once '#'; ?>
</body>
</html>

<script>
    let x =5;

    if(x == 5){
        y = 6
        console.log('hola' + y)
    }else{
        console.log('Guate' + y)
    };
</script>