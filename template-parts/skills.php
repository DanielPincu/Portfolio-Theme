<?php
$percentage = get_field("percentage");

?>

<div class="crd-blue crd-red border-2 border-blue-300 dark:border-red-300 mx-5 my-5 flex flex-col bg-blue-200 dark:bg-red-500 rounded-full items-center h-16 justify-center" data-aos='fade-up'>
  <h1 class="text-xl font-bold dark:text-slate-200 px-4"><?php the_title();?></h1>
    <div class="w-36 xl:w-56 2xl:w-64 bg-blue-300 dark:bg-red-300 rounded-full">
        <div class="bg-blue-500 dark:bg-red-500 text-xs font-bold text-center text-white p-1 leading-none rounded-full bg-gradient-to-r from-blue-400 to-blue-600 dark:from-red-600 dark:to-red-700 shadow-lg border-b-2 border-slate-50 w-[<?php echo $percentage;?>%]"><?php echo $percentage;?>%</div>
    </div>
</div>