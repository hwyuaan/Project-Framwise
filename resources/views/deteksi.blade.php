
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Deteksi Penyakit</title>
</head>
<body>
 <!-- navbar-->
 <div class="navbar">
  <nav class="bg-slate-50 drop-shadow-md">
    <div class="px-9 lg:x-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-1 items-center">
            <img class="h-14 w-13" src="asset/LOGO.png" alt="farmwise">
            <p class="judul text-2xl text-gray-500 font-normal" >Farmwise</p>
          </div>
        </div>
        <div class="flex justify-end sm:block">
          <div class="flex space-y-0 space-x-3.5 items-center">
            <a href="#" class="text-gray-950 hover:bg-neutral-400 hover:text-gray-950 rounded-md px-3 py-2 text-base font-medium">Home</a>
            <a href="#" class="bg-green-800 text-gray-300 hover:text-gray-950 rounded-md px-3 py-2 text-base font-medium">Deteksi Penyakit</a>
            <a href="#" class="text-gray-950 hover:bg-neutral-400 hover:text-gray-950 rounded-md px-3 py-2 text-base font-medium">Data Pegawai</a>
            <a href="#" class="text-gray-950 hover:bg-neutral-400 hover:text-gray-950 rounded-md px-3 py-2 text-base font-medium">Data Admin</a>
            <div>
              <svg class="button h-6"  xmlns="http://www.w3.org/2000/svg" fill="bg-green-700" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
              </svg>
            </div>
        
          </div>
        </div>
    </div>
  </nav>
 </div>
 <!--up-->
 
    <div class="flex items-center justify-center w-full">
      <label for="dropzone-file" class="flex flex-col items-center mt-12 justify-center w-9/12 h-64 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-emerald-400 dark:hover:bg-teal-950 dark:bg-emerald-800 hover:bg-green-400 dark:border-gray-600 dark:hover:border-gray-500">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
              </svg>
              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 800x400px)</p>
          </div>
          <input id="dropzone-file" type="file" class="hidden" />
      </label>
    </div> 


</body>
</html>