<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')

</head>

<body>
    
        @include('includes.navbar')

    <div class="px-28 py-8">
        <h1 class="text-3xl font-bold">OUR STORY</h1>
        <div class="flex h-[600px] bottom-0 relative">
            <img src="/images/about story.jpg" alt="" class="w-[760px]">
            <p class="bg-white bottom-0 right-0 w-[650px] absolute px-14 py-6 leading-[40px] text-[18px] mr-[-50px]">
                Welcome to Vogue Vista, where each piece of clothing represents a chapter in the story of fashion and
                self-expression. Fashion is about more than simply clothes; it's about a feeling of identity. We've
                created a vibrant group of fashion enthusiasts that share our passion for unusual, high-quality
                creations. </p>
        </div><br><br><br><br>
        <div class="flex flex-wrap justify-center mx-8">
            <div class="w-1/3 p-2">
                <h3 class="px-8 text-[18px] font-bold">OUR MISSION</h3>
                <div class="bg-black bg-opacity-75 w-[220px] h-[155px] p-2 rounded-xl mx-[10px] ">
                    <div
                        class="w-[380px] bg-white p-2 px-4 h-full text-[16px] rounded-xl text-black mx-[10px] mt-[-8px] ">
                        <p class="w-[330px] mt-[-5px] font-normal leading-[32px]">Our mission is to captivate and empower people
                            through unique, high-quality outfits that inspires personal style and self-expression.</p>
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2">
                <h3 class="px-8 text-[18px] font-bold">OUR VISION</h3>
                <div class="bg-black bg-opacity-75 w-[220px] h-[155px] p-2 rounded-xl mx-[10px] ">
                    <div
                        class="w-[380px] bg-white p-2 px-4 h-full text-[16px] rounded-xl text-black mx-[10px] mt-[-8px] ">
                        <p class="w-[330px] mt-[-5px] font-normal leading-[32px]">Our vision is to be a global leader in sustainable
                            fashion, recognized for our dedication to community, quality, and uniqueness.</p>
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2">
                <h3 class="px-8 text-[18px] font-bold">OUR VALUE</h3>
                <div class="bg-black bg-opacity-75 w-[220px] h-[155px] p-2 rounded-xl mx-[10px] ">
                    <div
                        class="w-[380px] bg-white p-2 px-4 h-full text-[16px] rounded-xl text-black mx-[10px] mt-[-8px] ">
                        <p class="w-[330px] mt-[-5px] font-normal leading-[32px]">We think that creativity has the ability to change
                            fashion. We have faith in the strength of community and our clients are the core of our
                            business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <div>
        <h1 class="text-center font-bold text-2xl">MEET OUR TEAM</h1>
    </div>
    <div class="flex justify-center space-x-6 mx-20">
        <div class="flex flex-col items-center w-1/2 h-[450px]">
            <img class="w-[200px] h-[200px] rounded-full z-[1]" src="images/team member 1.png" alt="Ella" style="filter: drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.2));">
            <div class="bg-[#CDCDC5] opacity-75 w-full max-w-[610px] h-[210px] rounded-lg text-center mt-[-80px] pt-[60px]">
                <h2 class="mt-8 text-2xl font-semibold">Ella</h2>
                <span class="block mt-4 text-lg text-black">(Full Stack Developer)</span>
                <div class="bg-black text-white w-full mt-[30px] p-2 rounded-b-lg h-[60px] align-middle grid">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 fill-white text-black mx-2 mt-[3px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:haymanhninaye@gmail.com">haymanhninaye@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center w-1/2 h-[450px]">
            <img class="w-[200px] h-[200px] rounded-full z-[1]" src="images/team member 2.png" alt="Choo" style="filter: drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.2));">
            <div class="bg-[#CDCDC5] opacity-75 w-full max-w-[610px] h-[210px] rounded-lg text-center mt-[-80px] pt-[60px]">
                <h2 class="mt-8 text-2xl font-semibold text-black">Choo</h2>
                <span class="block mt-4 text-lg text-black">(Full Stack Developer)</span>
                <div class="bg-black text-white w-full mt-[30px] p-2 rounded-b-lg h-[60px] align-middle grid">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="size-6 fill-white text-black mx-[8px] mt-[3px]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:chupwintchal99@gmail.com">chupwintchal99@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

</body>

</html>
