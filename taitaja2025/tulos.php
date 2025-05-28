<!DOCTYPE html>
<html lang="fi">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Taitaja</title>
   <link rel="icon" href="assets/favicon.png">
<link rel="stylesheet" href="css/style.css"> 
<script src="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdn.tailwindcss.com%2F&data=05%7C02%7C177366%40sskky.fi%7C74fa27e3201743895fcd08dd9ced278e%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839264920306122%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=BGKSV53XWXQxii1%2FADN2q99A0ueRx0NTJXo53KmuLQ4%3D&reserved=0"></script>
<link rel="stylesheet" href="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Ffont-awesome%2F5.15.3%2Fcss%2Fall.min.css&data=05%7C02%7C177366%40sskky.fi%7C74fa27e3201743895fcd08dd9ced278e%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839264920331937%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=K4LalrDJiVGAWx%2B5AWKkpp5TKxBMd63ZI4qPIf1WDd8%3D&reserved=0" />
<style>
  @import url('https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Ffonts.googleapis.com%2Fcss2%3Ffamily%3DRoboto%3Awght%40700%26display%3Dswap&data=05%7C02%7C177366%40sskky.fi%7C74fa27e3201743895fcd08dd9ced278e%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839264920349814%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=LS6hFq6K0GL6cwkRLpIIZhBoQGDRabHxRtVqQue9oa4%3D&reserved=0');
  
</style>
<body>
<header>

</header>

<a class="avater" href="login.php">Kirjaudu sisään</a>

    <section class="play-now">

        <div class="imgcontainer flex-grow flex flex-col items-center px-4">
        <img src="assets/logo.png" alt="Avatar" class="avatar">
     </div> </br>


  <main class="tulos">
    <?php
      $score = "8/10";
      $name = "";
      $saved = false;

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"] ?? "");
        if ($name !== "") {
          // Here you could save the result to a database or file
          $saved = true;
        }
      }
    ?>
    <h1 class="font-bold text-gray-800 text-xl mb-4">Tuloksesi</h1>
    <p class="font-semibold text-gray-700 text-base mb-6">Pisteet: <?php echo $score; ?></p>
    <?php if ($saved): ?>
      <p class="text-green-600 mb-6">Tulos tallennettu: <?php echo $name; ?></p>
    <?php endif; ?>
    <form method="post" action="">
      <input type="text" name="name" placeholder="Oikein D." value="<?php echo $name; ?>" class="border border-gray-600 text-gray-700 text-sm px-3 py-2 w-full mb-8 focus:outline-none" />
      <button type="submit" class="bg-gray-700 text-white text-sm py-3 px-8 rounded-md">Tallenna tulos</button>
    </form>
  </main>
    
   <footer>
        <p>Taitaja 2025 -semifinaalitehtävä</p>
        <p>Tekijät: Kamini Sultana</p>
    </footer>
</body>
</html>

