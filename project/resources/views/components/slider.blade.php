<style>
    .snap-x {
        scroll-snap-type: x mandatory;

        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }

    .snap-start {
        scroll-snap-align: start;
    }

    .borders {
        margin-left: 20%;
        margin-right: 20%;
    }

    .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>


<div class="flex flex-col items-center m-8 borders bg-color-gray-100" >

    <div class="w-full bg-white rounded overflow-x-hidden flex snap-x " style="height: 40vh">
        <div
            class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0  relative fa-align-justify"
            id="slide-1">
            <h1 class="center">centered</h1>
            <img
                src="https://cdn.datafloq.com/cache/blog_pictures/878x531/artificial-intelligence-future-of-programming.jpg"
                class="h-full w-full object-cover absolute">

        </div>
        <div
            class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0  relative "
            id="slide-2">
            <img
                src="https://www.goodcore.co.uk/blog/wp-content/uploads/2019/08/coding-vs-programming-2.jpg"
                class="h-full w-full object-cover absolute">
        </div>
        <div
            class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0  relative "
            id="slide-3">
            <img
                src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Best-Programming-Languages-to-Start-Learning-Today.jpg"
                class="h-full w-full object-cover absolute">
        </div>
        <div
            class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0  relative "
            id="slide-4">
            <img
                src="https://termly.io/wp-content/uploads/2019/11/Privacy-Policy-Template-Featured-Image.png"
                class="h-full w-full object-cover absolute">
        </div>
        <div
            class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0  relative "
            id="slide-5">
            <img
                src="https://q3p9g6n2.rocketcdn.me/wp-content/ml-loads/2016/09/competition-business-bidding-race-ss-1920.jpg"
                class="h-full w-full object-cover absolute">
        </div>
    </div>

    <div class="flex mt-8">
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center"
           href="#slide-1">1</a>
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center"
           href="#slide-2">2</a>
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center"
           href="#slide-3">3</a>
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center"
           href="#slide-4">4</a>
        <a class="w-8 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-5">5</a>
    </div>
</div>
