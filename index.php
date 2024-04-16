<?php get_header() ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>




<main class="lg:grid grid-cols-12">
            


<!-- Left column -->

<div class="col-span-3 hidden lg:block pb-5 border-r border-gray-400 dark:border-zinc-700" id="home">
     

      <!-- DETAILS START -->
      

                  <?php
                    $details_loop = new WP_Query(array(
                        "post_type" => "details",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($details_loop->have_posts()): ?>
                      
                      
                      <div class="flex justify-center">
                            <img class="rounded-full w-48 mt-10 px-3" src="<?php echo get_field("logo")["url"];?>">
                      </div>

                      <div class="border-b border-zinc-400 dark:border-zinc-700 pb-5">
                        <h1 class="text-2xl font-bold text-center dark:text-slate-200 mt-5">Daniel Pincu</h1>
                        <p class="text-center text-gray-500 dark:text-slate-200">Front-end Developer</p>
                      </div>
                      
                        <h1 class="font-bold text-2xl text-center dark:text-slate-200 pt-10">Details</h1>

                        <?php while($details_loop->have_posts()): $details_loop->the_post() ?>

                            <?php get_template_part("template-parts/details"); ?>
                           

                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                  <?php endif; ?>

            

        <!-- languages -->
     
          

                    <?php
                    $languages = new WP_Query(array(
                        "post_type" => "languages",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($languages->have_posts()): ?>
                        
                        <h1 class="font-bold text-2xl text-center dark:text-slate-200 pt-14">Languages</h1>
                        <?php while($languages->have_posts()): $languages->the_post() ?>

                            <?php get_template_part("template-parts/languages"); ?>
                           

                        <?php endwhile; ?>
                        
                        <?php wp_reset_postdata() ?>
                    <?php endif; ?>

       

        <!-- skills -->


        
        
                  <?php
                    $skills = new WP_Query(array(
                        "post_type" => "skills",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($skills->have_posts()): ?>
                       
                        <h1 class="font-bold text-2xl text-center dark:text-slate-200 pt-14">Skills</h1>
                        <?php while($skills->have_posts()): $skills->the_post() ?>

                            <?php get_template_part("template-parts/skills"); ?>
                           

                        <?php endwhile; ?>
                        
                        <?php wp_reset_postdata() ?>
                  <?php endif; ?>


          
        



<!-- tools -->





          

<?php
                    $tools_loop = new WP_Query(array(
                        "post_type" => "tools",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($tools_loop->have_posts()): ?>
                        <h1 class="font-bold text-2xl dark:text-slate-200 text-center pt-14">Tools</h1>
                        <?php while($tools_loop->have_posts()): $tools_loop->the_post() ?>

                            <?php get_template_part("template-parts/tools"); ?>
                           

                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
          <?php endif; ?>


         
        




        <!-- hobbies -->


       
          

        <?php
                    $hobbies_loop = new WP_Query(array(
                        "post_type" => "hobbies",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($hobbies_loop->have_posts()): ?>
                        <h1 class="font-bold text-2xl dark:text-slate-200 text-center pt-14">Hobbies</h1>
                        <?php while($hobbies_loop->have_posts()): $hobbies_loop->the_post() ?>

                            <?php get_template_part("template-parts/hobbies"); ?>
                           

                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
          <?php endif; ?>


         
       

        




    </div>

    


    



    

    




  <!-- Center column -->




  
    <div class="lg:col-span-8 col-span-12 mx-5" id="up">
      
     <!-- Mobile Navigation Bar -->
     <div class="lg:hidden sticky top-0 z-10 bg-blue-100 dark:bg-red-500 dark:text-slate-200 -mx-5">
      <div class="flex justify-center items-center mt-10">
        <div class="flex my-5">
          <div class="mx-3">
          
          <ul class="navbar-nav flex gap-10">
              <li class="nav-item"><a href="#up">Home</a></li>
              <li class="nav-item"><a href="#show">Portfolio</a></li>
              <li class="nav-item"><a href="#about">About</a></li>
              <li class="nav-item"><a href="#contact">Contact</a></li>
          </ul>
       
          </div>
        </div>
      </div>
    </div>

    <!-- Hero Section -->
    
      
    <div class="relative">
      <!-- Profile Image -->
      <img class="rounded-full blink border-blue-500 dark:border-red-500 mx-auto w-[90%] m-10 dark:scale-x-[-1]" src="<?php echo get_field("hero_image")["url"];?>" alt="">

      <!-- Welcome Message -->
      <div class="absolute inset-0 flex flex-col justify-center items-center text-center">
        <h1 class="text-sm md:text-xl pb-10 xl:text-3xl font-bold text-white">
          I'm Daniel Pincu <br>
          <span class="text-blue-500 dark:text-red-500">Front-end developer</span>
        </h1>

        <!-- Dark Mode Toggle -->
        <label class="inline-flex items-center lg:hidden cursor-pointer">
          <input type="checkbox" value="" class="sr-only peer" id="darkModeCheckbox">
          <div class="relative w-11 h-6 bg-red-700 rounded-full peer dark:bg-red-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
        </label>

        <!-- Welcome Text -->
        <p class="text-xl md:text-3xl xl:text-5xl pl-3 mb-1 text-white">Welcome to the Matrix<span class="matrix_pulse">|</span></p>

        <!-- CV Buttons -->
        <div class="flex md:pt-5 2xl:pt-24">



          <a href="<?php echo get_field('video_cv')['url'] ?>"><button class="blink-blue block dark:hidden button bg-blue-500 shadow-lg border-b-2 border-slate-50 text-white font-bold text-sm md:text-xl px-5 md:py-6 2xl:px-0 rounded-full w-38 md:w-44 mr-2 md:mr-44 2xl:mr-64">Watch CV<div class="liquid2"></div></button> </a>
         

          <a href="<?php echo get_field('cv')['url'] ?>"><button class="blink-red block dark:hidden button bg-red-500 shadow-lg border-b-2 border-slate-50 text-white font-bold text-sm md:text-xl px-5 md:py-6 2xl:px-0 rounded-full w-38 md:w-44">Fetch CV <div class="liquid"></div></button></a>




          <a href="<?php echo get_field('cv')['url'] ?>"><button class="blink-red hidden dark:block button bg-red-500  shadow-lg border-b-2 border-slate-50 text-white font-bold text-sm md:text-xl px-5 md:py-6 2xl:px-0 rounded-full w-38 md:w-44 mr-2 md:mr-44 2xl:mr-64">Fetch CV <div class="liquid"></div> </button></a>
          
         <a href="<?php echo get_field('video_cv')['url'] ?>"><button class="blink-blue hidden dark:block button bg-blue-500 shadow-lg border-b-2 border-slate-50 text-white font-bold text-sm md:text-xl px-5 md:py-6 2xl:px-0 rounded-full w-38 md:w-44">Watch CV <div class="liquid2"></div></button></a>
          
        </div>
      </div>
    </div>




   
  

      <div class="pt-10 border-zinc-400 dark:border-zinc-700 xl:flex justify-center hidden">
        <h1 class="text-4xl pt-16 dark:text-slate-200 pb-16">Services</h1>
      </div> 


      <!-- services -->

      <div class="xl:grid md:grid-cols-4 grid-cols-2 items-center gap-5 md:pb-10 mb-16 hidden">
        <div class="crd-blue crd-red border-2 h-52 border-blue-300 dark:border-red-600 bg-blue-200 dark:bg-red-500 rounded-3xl drop-shadow-xl flex flex-col items-center mb-10">
          <h1 class="text-2xl text-center text-blue-500 dark:text-slate-200 pt-10">Web Dev</h1>
          <svg class="text-blue-400 dark:text-slate-200 w-32 md:w-64 justify-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
          </svg>
    
        </div>
        <div class="crd-blue crd-red border-2 border-blue-300 dark:border-red-600 bg-blue-200 dark:bg-red-500 rounded-3xl drop-shadow-xl h-52 flex flex-col items-center mb-10">
          <h1 class="text-2xl text-center text-blue-500 dark:text-slate-200 pt-10">Graphic</h1>
          <svg class="text-blue-400 dark:text-slate-200 w-32 md:w-64 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
          
        </div>
        

        <div class="crd-blue crd-red border-2 border-blue-300 dark:border-red-600 bg-blue-200 dark:bg-red-500 rounded-3xl drop-shadow-xl h-52 flex flex-col items-center mb-10">
          <h1 class="text-2xl text-center text-blue-500 dark:text-slate-200 pt-10">Video edit</h1>
          <svg class="text-blue-400 dark:text-slate-200 w-32 md:w-64" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
          </svg>
    
        </div>
        <div class="crd-blue crd-red border-2 border-blue-300 dark:border-red-600 bg-blue-200 dark:bg-red-500 rounded-3xl drop-shadow-xl h-52 flex flex-col items-center mb-10">
          <h1 class="text-2xl text-center text-blue-500 dark:text-slate-200 pt-10">UI / UX</h1>
          <svg class="text-blue-400 dark:text-slate-200 w-32 md:w-64" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
          </svg>
          
        </div>

      </div>





  <!-- portfolio start  -->
      <h1 class="text-4xl pb-16 flex justify-center pt-10" id="show">Portfolio</h1 > 



 <div class="grid md:grid-cols-2">
<!-- Inject cards here  -->
                  <?php
                    $cards_loop = new WP_Query(array(
                        "post_type" => "cards",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($cards_loop->have_posts()): ?>
                    
                        <?php while($cards_loop->have_posts()): $cards_loop->the_post() ?>

                            <?php get_template_part("template-parts/cards"); ?>
                           

                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                    <?php endif; ?> 
    </div>
    




    <!-- about me -->

    <div class="border-b-2 border-zinc-200 dark:border-zinc-700 pb-20" id="about">
    <div class="crd-blue crd-red rounded-3xl mt-20 px-5 2xl:px-14 pb-20 bg-blue-200 dark:bg-red-500 border-2 border-blue-300 dark:border-red-300 crd-blue crd-red">
      <div>
        <div class="flex justify-center">
          <h1 class="text-4xl py-10 dark:text-slate-200">About Me</h1>
        </div>

                  <?php
                    $about_loop = new WP_Query(array(
                        "post_type" => "about",
                        "posts_per_page" => -1
                    ));
                    ?>
                    <?php if($about_loop->have_posts()): ?>
                    
                        <?php while($about_loop->have_posts()): $about_loop->the_post() ?>

                            <?php get_template_part("template-parts/about"); ?>
                           

                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                  <?php endif; ?> 
      

      </div>
    </div>
  </div>



  <!-- contact -->

  <div class="flex justify-center items-center bg-blue-200 dark:bg-red-500 rounded-3xl  mt-20 mb-5 border-2 border-blue-300 dark:border-red-300 crd-blue crd-red" id="contact" data-aos="flip-right" data-aos-duration="1000">
	  <div class="container mx-auto">
		<h1 class="flex justify-center text-3xl mx-auto py-10 dark:text-slate-200">Drop me a message<span class="matrix_pulse">|</span></h1>
		<form target="_blank" action="https://formspree.io/f/mgegplkr" method="POST" class="w-full p-8 my-4 md:px-12">
		  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 my-5">
			<input type="text" name="name" class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg" placeholder="Full Name" required>
			<input type="email" name="email" class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg" placeholder="Email Address" required>
		  </div>
		  <div class="mb-5">
			<textarea placeholder="Your Message" class="w-full h-32 bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:shadow-outline" name="message" rows="10" required></textarea>
		  </div>
		  <button type="submit" class="uppercase text-sm font-bold tracking-wide p-3 text-white rounded-full w-full bg-gradient-to-r from-blue-600 to-blue-700 dark:from-red-400 hover:scale-[102%] duration-300 dark:to-red-600 shadow-lg border-b-2 border-slate-50">Submit Form</button>
		</form>
	  </div>
	</div>



  </div>
</div>




  <!-- Right column -->
  <div class="col-span-1 crd-blue crd-red hidden lg:block rounded-full bg-blue-100 dark:bg-red-500 xl:border-2 border-blue-300 dark:border-red-600">

  <div class="flex flex-col sticky top-[200px] justify-center items-center">
      <label class="items-center cursor-pointer pt-20">
      <input type="checkbox" value="" class="sr-only peer" id="darkModeCheckbox2">
      <div class="relative w-11 h-6 bg-red-700 rounded-full peer dark:bg-red-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    </label>
      
        <div class="flex justify-evenly items-center my-5">

        <nav class="navbar pt-10">
          <ul class="navbar-nav dark:text-slate-200 text-md xl:text-xl">
              <li class="nav-item text-md hover:scale-105 duration-300 hover:text-blue-500 dark:hover:text-slate-300 font-bold text-center pb-5"><a href="#home">Home</a></li>
              <li class="nav-item text-md hover:scale-105 duration-300 hover:text-blue-500 dark:hover:text-slate-300 font-bold text-center pb-5"><a href="#show">Showcase</a></li>
              <li class="nav-item text-md hover:scale-105 duration-300 hover:text-blue-500 dark:hover:text-slate-300 font-bold text-center pb-5"><a href="#about">About</a></li>
              <li class="nav-item text-md hover:scale-105 duration-300 hover:text-blue-500 dark:hover:text-slate-300 font-bold text-center pb-5"><a href="#contact">Contact</a></li>
          </ul>
        </nav>

        </div>
  
  </div>

</div>
</main>















        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer() ?>