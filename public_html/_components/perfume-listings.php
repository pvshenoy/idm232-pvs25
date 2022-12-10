<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="">Image</th>
      <th scope="col" class="">Name</th>
      <th scope="col" class="">Brand</th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($perfumes = mysqli_fetch_array($result)) {
    echo "
          <tr>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 '>
              <img class='' width='100px' height='100px' src='{$site_url}/{$perfumes['image']}' alt=''>
            </td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$perfumes['perfumeName']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$perfumes['brand']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$perfumes['description']}</td>
          </tr>";
}
?>
  </tbody>
</table>