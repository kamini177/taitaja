<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Taitaja</title>
     <link rel="icon" href="assets/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdn.tailwindcss.com%2F&data=05%7C02%7C177366%40sskky.fi%7C10678b96825f4fffec9c08dd9db697ff%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638840129729675447%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C80000%7C%7C%7C&sdata=Qr56upUTikdIluRL8W%2FF2ExoUNi4VJDwfAXMMMgjtXQ%3D&reserved=0"></script>
</head>
<body class="bg-white p-6">
  <h1 class="font-extrabold text-black text-[20px] mb-4">Lisää uusi kysymys</h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <input
      type="text"
      name="question"
      placeholder="Kirjoita kysymys tähän..."
      class="w-full border border-black text-black text-[16px] font-normal px-3 py-2 mb-6 focus:outline-none"
      required
    />
    <div class="grid grid-cols-2 gap-x-8 gap-y-6 mb-6">
      <label class="flex items-center border border-black px-3 py-2 text-[16px] font-normal text-black">
        <input type="radio" name="option" value="Vaihtoehto 1" class="mr-3" required />
        Vaihtoehto 1
      </label>
      <label class="flex items-center border border-black px-3 py-2 text-[16px] font-normal text-black">
        <input type="radio" name="option" value="Vaihtoehto 2" class="mr-3" />
        Vaihtoehto 2
      </label>
      <label class="flex items-center border border-black px-3 py-2 text-[16px] font-normal text-black">
        <input type="radio" name="option" value="Vaihtoehto 3" class="mr-3" />
        Vaihtoehto 3
      </label>
      <label class="flex items-center border border-black px-3 py-2 text-[16px] font-normal text-black">
        <input type="radio" name="option" value="Vaihtoehto 4" class="mr-3" />
        Vaihtoehto 4
      </label>
    </div>
    <div class="flex space-x-4 max-w-[400px]">
      <button
        type="submit"
        class="bg-gray-500 text-white text-[16px] font-normal px-6 py-3 rounded-sm"
      >
        Tallenna kysymys
      </button>
      <button
        type="button"
        onclick="window.location.href='admin.php';"
        class="border border-black text-black text-[16px] font-bold px-6 py-3 rounded-sm"
      >
        Peruuta
      </button>
    </div>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $question = htmlspecialchars($_POST['question']);
      $option = htmlspecialchars($_POST['option']);

      echo '<div class="mt-6 p-4 border border-green-600 text-green-700 max-w-full">';
      echo '<p><strong>Kysymys tallennettu:</strong> ' . $question . '</p>';
      echo '<p><strong>Valittu vaihtoehto:</strong> ' . $option . '</p>';
      echo '</div>';
  }
  ?>
</body>
</html>
