<?php
session_start(); // تأكد من استخدام هذا في بداية كل ملف يحتوي على PHP

$conn = mysqli_connect("localhost", "root", "", "db_new_project_1") or die("not connected");

// تحديد معرف المستخدم من الجلسة
$username = $_SESSION['name'];

$q = "SELECT * FROM courses_reg WHERE name = '$username'";
$result = mysqli_query($conn, $q) or die("No Record Found");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Courses</title>
</head>
<body>
<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
              <?php
           
            if(isset($_SESSION['name'])) {
                // إذا كان المستخدم قد قام بتسجيل الدخول
                echo "<p style='color:blue'> Name : ".$_SESSION['name']."</p>";
            } else {
                // إذا لم يقم المستخدم بتسجيل الدخول
                echo "<p style='color:red'>guest</p>";
            }
        ?>
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
               
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a href="Course.html" class="py-2 px-3  inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-yellow-200 bg-white text-yellow-800 shadow-sm hover:bg-yellow-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                Back
                </a>
                
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Accordion -->
          <div class="border-b border-gray-200 hover:bg-gray-50 dark:hover:bg-slate-900 dark:border-gray-700">
            <div id="hs-as-table-collapse" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-collapse">
              <div class="pb-4 px-6">
                <div class="flex items-center space-x-2">
                  <span class="h-5 w-5 flex justify-center items-center rounded-full bg-blue-600 text-white dark:bg-blue-500">
                    <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span class="text-sm text-gray-800 dark:text-gray-400">
                    There are no insights for this period.
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- End Accordion -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-slate-900">
              <tr>
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Course Name
                    </span>
                    <div class="hs-tooltip">
                      <div class="hs-tooltip-toggle">
                        <svg class="flex-shrink-0 w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-slate-700" role="tooltip">
                          Invoice number related popup
                        </span>
                      </div>
                    </div>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      price
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    date of registration
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  
                </th>

                <th scope="col" class="px-6 py-3 text-end"></th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <?php while($row = mysqli_fetch_assoc($result)) {  ?>
            <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <td class="h-px w-px whitespace-nowrap">
                  <button type="button" class="block" data-hs-overlay="#hs-ai-invoice-modal">
                    <span class="block px-6 py-2">
                      <span class="font-mono text-sm text-blue-600 dark:text-blue-500"><?php echo $row['course_name'] ?></span>
                    </span>
                  </button>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <button type="button" class="block" data-hs-overlay="#hs-ai-invoice-modal">
                    <span class="block px-6 py-2">
                      <span class="text-sm text-gray-600 dark:text-gray-400"><?php echo $row['price'] ?></span>
                    </span>
                  </button>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <button type="button" class="block" data-hs-overlay="#hs-ai-invoice-modal">
                    <span class="block px-6 py-2">
                      <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                        
                        <?php echo $row['d_of_reg'] ?>
                      </span>
                    </span>
                  </button>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                </td>
                <td class="h-px w-px whitespace-nowrap">
                </td>
                <td class="h-px w-px whitespace-nowrap">
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- End Table -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->

</body>
</html>