<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Create Users';
include_once __DIR__ . '/../../_components/header.php';
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Create User</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="flex flex-column min-w-full>
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form
              action="<?php echo site_url(); ?>/_includes/process-create-users.php"
              method="POST">
              <div class="">
                <label class="pt-1.5" for="">FIRST NAME</label>
                <input style="  font-size: large; width: 25rem; padding: 1rem 2.5rem; border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove; background-color: #eee; border-bottom: 3px solid black; background-color: white;" class="search" type="text" name="first_name">
              </div>

              <div class="">
                <label for="">LAST NAME</label>
                <input style="  font-size: large; width: 25rem; padding: 1rem 2.5rem; border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove; background-color: #eee; border-bottom: 3px solid black; background-color: white;" class="search" type="text" name="last_name">
              </div>

              <div class="">
                <label for="">EMAIL</label>
                <input style="  font-size: large; width: 25rem; padding: 1rem 2.5rem; border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove; background-color: #eee; border-bottom: 3px solid black; background-color: white;" class="search" type="text" name="email">
              </div>
              <div class="">
                <label for="">PHONE NUMBER</label>
                <input style="  font-size: large; width: 25rem; padding: 1rem 2.5rem; border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove; background-color: #eee; border-bottom: 3px solid black; background-color: white;" class="search" type="text" name="phone">
              </div>
              <input
                class="nline-flex items-center justify-center rounded-md border border-transparent bg-neutral-800 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';
