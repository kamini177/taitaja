<html lang="fi">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Taitaja</title>
   <link rel="icon" href="assets/favicon.png">
<link rel="stylesheet" href="css/style.css">
<script src="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdn.tailwindcss.com%2F&data=05%7C02%7C177366%40sskky.fi%7C7a65a5bfc1464f7a7d5d08dd9cf90e09%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839315674673630%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C0%7C%7C%7C&sdata=vhJIooLNJlAsKMWWnBBdlMwmUDky%2FT81OMoo3pqUYU4%3D&reserved=0"></script>
<link rel="stylesheet" href="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Ffont-awesome%2F5.15.3%2Fcss%2Fall.min.css&data=05%7C02%7C177366%40sskky.fi%7C7a65a5bfc1464f7a7d5d08dd9cf90e09%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839315674764309%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C0%7C%7C%7C&sdata=P8NArdq7b5HOZJS22ypGTcpn2lX8ccvzJB7IyQ%2FioMQ%3D&reserved=0" />
<style>
  @import url('https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Ffonts.googleapis.com%2Fcss2%3Ffamily%3DCourier%2BPrime%26display%3Dswap&data=05%7C02%7C177366%40sskky.fi%7C7a65a5bfc1464f7a7d5d08dd9cf90e09%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638839315674798436%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C0%7C%7C%7C&sdata=TlYfSYTU9GCCShYQxTfZsB6ljFyS3SVKxBm%2BZqo2QII%3D&reserved=0');
  
</style>
</head>
<body>
    <header>
        
    </header>

     <a class="avater" href="login.php">Kirjaudu ulos</a>

   <img src="assets/logo.png" alt="Avatar" class="avatar">

      
  <main class="flex-grow px-6 py-6 max-w-7xl mx-auto w-full flex flex-col md:flex-row gap-8">
    <section class="flex-grow max-w-full md:max-w-3xl">
      <h2 class="font-extrabold text-xl mb-1">Tietokoneet ja ohjelmointi</h2>
      <a href="kategori.php" class="text-xs font-bold underline mb-4 inline-block">Takaisin</a>

      <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold text-lg">Kysymykset</h3>

        <form method="post" action="">
          <button type="button" onclick="window.location.href='lisa_kysy.php';" name="add_question" class="border border-gray-700 text-gray-900 text-xs font-normal px-3 py-1 rounded hover:bg-white">Lisää uusi kysymys</button>
        </form>

      </div>

      <ul class="space-y-8">
        <?php
          $questions = [
            [
              "question" => "Mikä on Python-ohjelmointikielen maskotti?",
              "answers" => "Käärme (Oikea) | Lintu | Kissa | Kilpikonna"
            ],
            [
              "question" => "Mikä seuraavista on avoimen lähdekoodin käyttöjärjestelmä?",
              "answers" => "Linux (Oikea) | Windows | macOS | iOS"
            ],
            [
              "question" => "Mikä seuraavista ei ole IDE (integroitu kehitysympäristö)?",
              "answers" => "Excel (Oikea) | Visual Studio | IntelliJ IDEA | PyCharm"
            ],
            [
              "question" => "Mikä seuraavista ei ole ohjelmointikieli?",
              "answers" => "Photoshop | Java | Python | C++ (Oikea)"
            ],
            [
              "question" => "Mikä on tietokoneen prosessorin tehtävä?",
              "answers" => "Suorittaa laskentatehtäviä (Oikea) | Tallentaa tietoja | Ohjata näyttöä | Säilyttää muistitiedot"
            ],
            [
              "question" => "Mikä on HTTP:n pääasiallinen tarkoitus?",
              "answers" => "Siirtää verkkosivuja (Oikea) | Salaus | Verkkoyhteys | Latausnopeus"
            ],
            [
              "question" => "Mitä CSS tekee verkkosivulla?",
              "answers" => "Määrittää ulkoasun (Oikea) | Lisää toiminnallisuutta | Tallentaa tietoja | Hoitaa tietoturvaa"
            ],
            [
              "question" => "Mikä on bitti?",
              "answers" => "Pienin tietoyksikkö (Oikea) | Tiedostotyyppi | Tietokonta | Ohjelma"
            ],
            [
              "question" => "Mitä komentoa käytetään Git-versionhallinnassa tallennukseen?",
              "answers" => "git commit (Oikea) | git save | git push | git store"
            ],
            [
              "question" => "Mikä merkki aloittaa HTML-elementin?",
              "answers" => "&lt; (Oikea) | { | [ | ("
            ],
          ];

          foreach ($questions as $q) {
            echo '<li>';
            echo '<div class="flex items-center space-x-2 mb-1">';
            
            echo '<button aria-label="Muokkaa" class="text-gray-700 hover:text-gray-900"><a class="" href="muokka.php"><i class="fas fa-pencil-alt" ></i></button>';
           
            echo '<button aria-label="Poista" class="text-gray-700 hover:text-gray-900"><i class="fas fa-trash"></i></button>';
            
            echo '<p class="font-bold text-sm leading-tight">' . htmlspecialchars($q["question"]) . '</p>';
            echo '</div>';
            echo '<p class="text-xs leading-tight pl-7">' . $q["answers"] . '</p>';
            echo '</li>';
          }
        ?>
      </ul>
    </section>

    <aside class="bg-gray-300 p-6 rounded max-w-xs w-full select-none">
      <h3 class="font-bold text-lg mb-3">Tulokset</h3>
      <table class="w-full text-xs text-left border-collapse border border-gray-400">
        <thead>
          <tr>
            <th class="border border-gray-400 px-1 py-1 w-8">Nimi</th>
            <th class="border border-gray-400 px-1 py-1 w-14">Pisteet</th>
            <th class="border border-gray-400 px-1 py-1 w-10">%</th>
            <th class="border border-gray-400 px-1 py-1 w-20">Päivämäärä</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $results = [
              ["Linda P.", "10/10", "100%", "12.01.2025"],
              ["Olli R.", "10/10", "100%", "13.01.2025"],
              ["Anna K.", "5/5", "100%", "12.01.2025"],
              ["Margit T.", "15/15", "100%", "15.01.2025"],
              ["Maija S.", "14/15", "93%", "14.01.2025"],
              ["Katri R.", "9/10", "90%", "12.01.2025"],
              ["Emilia A.", "8/10", "80%", "13.01.2025"],
              ["Mikael L.", "4/5", "80%", "13.01.2025"],
              ["Anna S.", "10/15", "67%", "12.01.2025"],
              ["Ella S.", "2/5", "40%", "15.01.2025"],
            ];

            $num = 1;
            foreach ($results as $r) {
              echo '<tr>';
              echo '<td class="border border-gray-400 px-1 py-0.5">' . $num . '. ' . htmlspecialchars($r[0]) . '</td>';
              echo '<td class="border border-gray-400 px-1 py-0.5">' . htmlspecialchars($r[1]) . '</td>';
              echo '<td class="border border-gray-400 px-1 py-0.5">' . htmlspecialchars($r[2]) . '</td>';
              echo '<td class="border border-gray-400 px-1 py-0.5">' . htmlspecialchars($r[3]) . '</td>';
              echo '</tr>';
              $num++;
            }
          ?>
        </tbody>
      </table>
      <nav class="flex justify-center items-center space-x-2 mt-3 text-xs select-none">
        <button aria-label="Edellinen sivu" class="hover:underline">&lt;</button>
        <button aria-current="page" class="font-bold border border-gray-700 rounded-full w-6 h-6 flex items-center justify-center bg-gray-400">1</button>
        <button aria-label="Seuraava sivu" class="hover:underline">2</button>
        <button aria-label="Seuraava sivu" class="hover:underline">&gt;</button>
      </nav>
    </aside>
  </main>

  <footer class="bg-#300 text-center text-xs text-white py-3 select-none border-t border-gray-400">
    <p class="font-bold">Taitaja2025 -semifinaalitehtävä</p>
    <p>Tekijät: Kamini Sultana</p>
  </footer>
</body>
</html>
