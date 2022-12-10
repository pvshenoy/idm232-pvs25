<?php
if (!isset($perfumes)) {
    echo '$users variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Image</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Type</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Brand</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Top Note</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Middle Note</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Bottom Note</th>
      
      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">Edit</span>
      </th>
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
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$perfumes['type']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$perfumes['brand']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$perfumes['description']}</td>

            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 '>
              <img class='' width='100px' height='100px' src='{$site_url}/{$perfumes['topNote']}' alt=''>
            </td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 '>
              <img class='' width='100px' height='100px' src='{$site_url}/{$perfumes['middleNote']}' alt=''>
            </td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 '>
              <img class='' width='100px' height='100px' src='{$site_url}/{$perfumes['bottomNote']}' alt=''>
            </td>
            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
              <a href='{$site_url}/admin/perfumes/edit.php?id={$perfumes['id']}' class='text-indigo-600 hover:text-indigo-900'>Edit</a>
              <a href='{$site_url}/admin/perfumes/delete.php?id={$perfumes['id']}' class='text-indigo-600 hover:text-indigo-900'>Delete</a>
            </td>
          </tr>";
}
?>
  </tbody>
</table>