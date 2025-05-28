<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taitaja</title>
       <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!--<img src="assets/logo.png" alt="Pelin logo">-->
    </header>

     <div class="imgcontainer">
        <img src="assets/logo.png" alt="Avatar" class="avatar">
     </div>
     
    <form action="game.php" method="POST">
        <label for="category">Valitse kategoria:</label>
        <select name="category_id" id="category">
            <!-- Kategoriat haetaan PHP:llä -->
             <option value=" ">Maantieto</option>
              <option value=" ">Historia</option>
               <option value=" ">Matematiikka</option>
                <option value=" ">Luonto ja ympäristö</option>
                 <option value=" ">Tietokoneet ja ohjelmointi</option>
        </select>

        <label for="questions_count">Valitse kysymysten määrä:</label>
        <select name="questions_count" id="questions_count">
            <option value=" ">Luhyt (5)</option>
            <option value=" " selected>Keskipitkä (10)</option>
            <option value=" ">Pitkä (15)</option>
        </select>
        
      
        
        <!--<button type="submit" >Aloita peli</button>-->
       <button type="submit" > <a class="peli" href="gameview.php">Aloita peli</a> </button>
        
        
    </form>


    <footer>
        <p>Taitaja 2025 -semifinaalitehtävä</p>
        <p>Tekijät: Kamini Sultana</p>
    </footer>
</body>
</html>
