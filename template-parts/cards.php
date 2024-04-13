<?php
$description = get_field("description");
$extra_description = get_field("extra_description");
$image = get_field("image");
$title = get_the_title(); // Get the title
$image_source = $image["url"];
$local_video = get_field('local_video'); 
// Check if the ACF field http_url is filled
if (!empty(get_field('http_url'))) {
    $image_source = get_field('http_url'); 
}
?>

<div class="grid md:grid-cols-1 gap-10 mt-16">
    <div class="suitcase-card cursor-pointer">
        <div class="suitcase-wrapper">
            <div class="suitcase bg-blue-200 dark:bg-red-200 rounded-3xl overflow-hidden border-2 border-blue-300 dark:border-red-300 shadow-xl">
                <div class="suitcase-top bg-blue-400 dark:bg-red-400 p-4 relative">
                    <div class="handle bg-blue-600 dark:bg-red-700 w-6 h-2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                </div>
                <div class="suitcase-body hover:bg-blue-300 dark:hover:bg-red-300 ease-out duration-500 bg-blue-200 h-80 dark:bg-red-200 p-10" onclick="toggleCardVisibility('<?php echo $title; ?>')">
                    <h1 class="text-4xl font-bold cursor-pointer mb-5"><?php echo $title; ?></h1>
                    <p class="text-xl"><?php echo $description ?></p>
                </div>
                <div id="<?php echo $title; ?>" class="hidden expandable-card">
                    <a href="#" onclick="openModal('<?php echo $image_source; ?>'); return false;">
                        <img class="bg-blue-200 dark:bg-red-200 rounded-3xl p-10" src="<?php echo $image["url"] ?>">
                    </a>
                    <p class="text-xl bg-blue-200 dark:bg-red-200 rounded-3xl p-10"><?php echo $extra_description ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
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
