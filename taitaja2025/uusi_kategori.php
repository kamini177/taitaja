<html lang="fi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Taitaja</title>
     <link rel="icon" href="assets/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdn.tailwindcss.com%2F&data=05%7C02%7C177366%40sskky.fi%7C32a810817ccb4078ad1e08dd9db3abe3%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638840117330823988%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C80000%7C%7C%7C&sdata=zyEpl8YqvpJxTy3GQfbgN2Glz3zGKZ70v663TvXPF2c%3D&reserved=0"></script>
  <link rel="stylesheet" href="https://eur02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Ffont-awesome%2F5.15.3%2Fcss%2Fall.min.css&data=05%7C02%7C177366%40sskky.fi%7C32a810817ccb4078ad1e08dd9db3abe3%7C402bfdc4b1064da1ac59da9b46908d50%7C0%7C0%7C638840117330852122%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C80000%7C%7C%7C&sdata=TeRzgvXvEpkeH6XQXlC8BiV7s3ph7Ns%2FMe%2FP6eD4row%3D&reserved=0" />
</head>
<body class="bg-white p-6">
  <div class="max-w-4xl mx-auto">
    <h1 class="font-extrabold text-3xl mb-6 text-gray-900">Loo uusi kategoria</h1>
    <form class="space-y-6">
      <input
        type="text"
        placeholder="Kirjoita kategoria nimi tähän..."
        class="w-full border border-gray-700 text-gray-900 text-lg font-normal px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700"
      />
      <div class="flex space-x-6 max-w-md">
        <button type="submit" class="bg-gray-700 text-white text-lg font-normal px-8 py-3">Tallenna kysymys</button>
        <button type="button"  onclick="window.location.href='kategori.php';" >Peruuta</button>
      </div>
    </form>
  </div>
</body>
</html>