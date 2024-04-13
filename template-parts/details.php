<?php
$value = get_field("value");

?>


<div class="shadow-xl border-2 border-blue-300 dark:border-red-300 mx-5 mt-5 flex flex-col bg-blue-200 dark:bg-red-200 rounded-full items-center justify-end h-16">
          <h1 class="text-xl font-bold"><?php the_title();?></h1>
          <p class="text-xl"><?php echo $value;?></p>
</div>  