<?php
$value = get_field("value");

?>


<div class="crd-blue crd-red border-2 border-blue-300 dark:border-red-600 mx-5 mt-5 flex flex-col bg-blue-200 dark:bg-red-500 rounded-full items-center justify-end h-16">
          <h1 class="text-xl dark:text-slate-200 font-bold"><?php the_title();?></h1>
          <p class="text-xl dark:text-slate-200"><?php echo $value;?></p>
</div>  