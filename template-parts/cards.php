<?php
$description = get_field("description");
$extra_description = get_field("extra_description");
$image = get_field("image");
$title = get_the_title(); 
$image_source = $image["url"];
$local_video = get_field('local_video'); 
if (!empty(get_field('http_url'))) {
    $image_source = get_field('http_url'); 
}
?>

<div class="grid md:grid-cols-1" data-aos="fade-down" data-aos-duration="1000">
    <div class="suitcase-card">
        <div class="suitcase-wrapper crd-blue crd-red monitor">
            <div class="suitcase bg-blue-200 dark:bg-red-400 rounded-3xl overflow-hidden border-2 border-blue-300 dark:border-red-300 shadow-xl">
                
                <div class="suitcase-body mx-4 my-10 h-[250px] xl:h-56 bg-blue-200 dark:bg-red-400" onclick="toggleCardVisibility('<?php echo $title; ?>')">
                    <h1 class="text-2xl font-bold cursor-pointer mb-5 dark:text-slate-200 dark:hover:text-black duration-500"><?php echo $title; ?></h1>
                    <p class="cursor-pointer dark:text-slate-200"><?php echo $description ?></p>
                </div>
                <div id="<?php echo $title; ?>" class="hidden expandable-card">
                    <a href="#" onclick="openModal('<?php echo $image_source; ?>'); return false;">
                        <img class="border-t-2 border-b-2 border-transparent hover:dark:border-red-500 hover:border-blue-500 duration-300" src="<?php echo $image["url"] ?>">
                    </a>
                    <p class="bg-blue-200 dark:bg-red-400 dark:text-slate-200 rounded-3xl p-10"><?php echo $extra_description ?></p>
                    <div class="flex justify-center">
                    <button onclick="openModal('<?php echo $image_source; ?>'); return false;" class="m-5 uppercase text-sm font-bold text-white rounded-full w-64 bg-gradient-to-r from-blue-600 to-blue-700 dark:from-red-600 hover:scale-[102%] duration-300 dark:to-red-700 shadow-lg border-b-2 border-slate-50">Visit project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

<!-- There's a little class conflict here but I'm sure the browser can live with it. Both classes are needed for the modal to work. -->

<div id="myModal" class="modal fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
    <!-- Modal content -->
    <div class="modal-content bg-white w-3/4 h-3/4 lg:w-[1100px] p-8 rounded-3xl flex flex-col items-center relative">
        <span class="absolute top-0 right-0 p-4 cursor-pointer">
            <svg onclick="closeModal()" class="w-6 h-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </span>
        <iframe id="modalIframe" class="w-full h-full" src="" frameborder="0"></iframe>
    </div>
</div>
