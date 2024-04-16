<?php
$about_me = get_field("about_me");
$me = get_field("me")['url'];
?>
         <div class="grid xl:grid-cols-2 gap-10 grid-cols-1">
        
        <div>
            <p class="mb-5 dark:text-slate-200"><?php echo $about_me ?></p>
        </div>

          <div class="hidden lg:block">
            <img class="rounded-3xl" src="<?php echo $me ?>" alt="">
          </div>
        </div>