<html lang="fi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Taitaja</title>
      <link rel="icon" href="assets/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdn.tailwindcss.com%2F&data=05%7C02%7C177366%40sskky.fi%7C85c14605ec8e4ab5bd4008dd9dba343b%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638840145513867365%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=IIz8u7utZE%2FOIKkhES2zsADMM3QD9Tl9mhSZwMYJneg%3D&reserved=0"></script>
  <link
    rel="stylesheet"
    href="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Ffont-awesome%2F5.15.3%2Fcss%2Fall.min.css&data=05%7C02%7C177366%40sskky.fi%7C85c14605ec8e4ab5bd4008dd9dba343b%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638840145513898996%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C60000%7C%7C%7C&sdata=u6q%2B4Pzfd5Wokt8cE9OkiDJ3iAkhmgVcO9jsmETWFFg%3D&reserved=0"
  />
  <style>
    
  </style>
</head>
<body class="bg-white p-6">
  <main class="max-w-4xl mx-auto">
    <h1 class="font-extrabold text-black text-2xl mb-6">Muokkaa kysymystä</h1>
    <?php
      $question = "Mikä on Python-ohjelmointikielen maskotti?";
      $options = [
        "käärme" => "Käärme",
        "kissa" => "Kissa",
        "lintu" => "Lintu",
        "kettu" => "Kettu"
      ];
      $selected = "käärme";

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $question = $_POST['question'] ?? $question;
        $selected = $_POST['answer'] ?? $selected;
        // Tässä voisi käsitellä tallennuksen tietokantaan tms.
        echo '<p class="mb-6 text-green-700 font-semibold">Kysymys tallennettu!</p>';
      }
    ?>
    <form method="POST" action="">
      <input
        type="text"
        name="question"
        value="<?php echo htmlspecialchars($question); ?>"
        class="w-full border border-black text-black text-base font-normal px-4 py-2 mb-8"
        aria-label="Kysymys"
      />
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6 mb-10">
        <?php foreach ($options as $value => $label): ?>
          <label class="flex items-center border border-black px-4 py-2 cursor-pointer">
            <input
              type="radio"
              name="answer"
              value="<?php echo htmlspecialchars($value); ?>"
              <?php if ($selected === $value) echo 'checked aria-checked="true"'; else echo 'aria-checked="false"'; ?>
              class="mr-3 w-5 h-5 text-black"
            />
            <span class="text-black text-base font-normal"><?php echo htmlspecialchars($label); ?></span>
          </label>
        <?php endforeach; ?>
      </div>
      <div class="flex gap-6 max-w-md">
        <button
          type="submit"
          class="bg-black text-white text-base font-normal px-8 py-3 rounded-sm"
        >
          Tallenna kysymys
        </button>
        <button
          type="button"
          onclick="window.location.href='admin.php';"
          class="border border-black text-black text-base font-normal px-8 py-3 rounded-sm"
        >
          Peruuta
        </button>
      </div>
    </form>
  </main>
</body>
</html>
