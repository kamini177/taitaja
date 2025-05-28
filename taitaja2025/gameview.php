<!DOCTYPE html>
<html lang="fi">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Taitaja</title>
     <link rel="icon" href="assets/favicon.png">
  <script src="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdn.tailwindcss.com%2F&data=05%7C02%7C177366%40sskky.fi%7C6a65c27bfd5a4b652c3b08dd9ce7ab6e%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839241178698008%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=lgEX1HFooVtjiCfuuGgEkO07425lACz2LrcVtGRJwCs%3D&reserved=0"></script>
  <link
    href="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Ffonts.googleapis.com%2Fcss2%3Ffamily%3DQuicksand%26display%3Dswap&data=05%7C02%7C177366%40sskky.fi%7C6a65c27bfd5a4b652c3b08dd9ce7ab6e%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839241178725437%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=IYyjrRRIMOEFRd7oXZWGggmyo5D1Gm8nkEuRrBDfbao%3D&reserved=0"
    rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
  <style>
 
  </style>

<body>
 <header>
        
    </header>

     <a class="avater" href="login.php">Kirjaudu sisään</a>

    <section class="play-now">

        <div class="imgcontainer flex-grow flex flex-col items-center px-4">
        <img src="assets/logo.png" alt="Avatar" class="avatar">
     </div> </br>

  <main class="flex-grow flex flex-col items-center px-4">
    <div class="max-w-4xl w-full mt-4">
      <div class="text-center mb-6">
        <p class="text-sm text-gray-900">Kysymys 4/10</p>
        <p class="text-sm text-gray-900">Pisteet: 3</p>
      </div>

      <h1
        class="text-gray-800 font-bold text-xl md:text-2xl mb-8 max-w-3xl mx-auto"
      >
        Mitä CSS tekee verkkosivulla?
      </h1>

      <?php
      $selected = '';
      $message = '';
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $selected = $_POST['answer'] ?? '';
          if ($selected === 'lisää toiminnallisuutta') {
              $message = '<p class="text-green-700 font-semibold mb-6 text-center">Oikein! Lisää toiminnallisuutta on väärin, oikea vastaus on "Määrittää ulkoasun".</p>';
          } else {
              $message = '<p class="text-red-700 font-semibold mb-6 text-center">Väärin! Yritä uudelleen.</p>';
          }
      }
      ?>

      <form method="post" class="max-w-3xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-12 text-gray-900 text-base">
        <?php if ($message) echo $message; ?>
        <label class="flex items-center space-x-3 cursor-pointer">
          <input
            type="radio"
            name="answer"
            value="määrittää ulkoasun"
            class="form-radio text-gray-900"
            <?php if ($selected === 'määrittää ulkoasun') echo 'checked'; ?>
          />
          <span>Määrittää ulkoasun</span>
        </label>

        <label class="flex items-center space-x-3 cursor-pointer">
          <input
            type="radio"
            name="answer"
            value="tallentaa tietoja"
            class="form-radio text-gray-900"
            <?php if ($selected === 'tallentaa tietoja') echo 'checked'; ?>
          />
          <span>Tallentaa tietoja</span>
        </label>

        <label class="flex items-center space-x-3 cursor-pointer">
          <input
            type="radio"
            name="answer"
            value="lisää toiminnallisuutta"
            class="form-radio text-gray-900"
            <?php if ($selected === 'lisää toiminnallisuutta') echo 'checked'; ?>
          />
          <span>Lisää toiminnallisuutta</span>
        </label>

        <label class="flex items-center space-x-3 cursor-pointer">
          <input
            type="radio"
            name="answer"
            value="hoitaa tietoturvaa"
            class="form-radio text-gray-900"
            <?php if ($selected === 'hoitaa tietoturvaa') echo 'checked'; ?>
          />
          <span>Hoitaa tietoturvaa</span>
        </label>

        <div class="sm:col-span-2 mt-8 flex justify-center">
          <button> 
            <a class="" href="tulos.php">Vastaa</a>
          </button>
        </div>
      </form>
    </div>
  </main>

 <footer>
        <p>Taitaja 2025 -semifinaalitehtävä</p>
        <p>Tekijät: Kamini Sultana</p>
    </footer>
</body>
</html>