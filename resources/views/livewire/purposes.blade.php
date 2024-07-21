<div>
    <div class="w-full aspect-[16/9] bg-black">

    </div>
    <div class="py-4 px-2 bg-black"
        x-data="{swiper:null}"
        x-init="
            swiper = new Swiper($refs.container, {
                loop: false,
            });
        "
    >
        <div x-ref="container">
            <div class="rounded-xl p-4 bg-gradient-to-b from-cyan-500 to-blue-500">
                <h2 class="mt-4 text-white font-semibold text-2xl">기초반</h2>
                <div class="mt-4 divide-y divide-gray-100">
                    <p class="text-white py-2">필수 전공수업 [주2회]</p>
                    <p class="text-white py-2">단체 발성 수업 60분</p>
                    <p class="text-white py-2">선택수업</p>
                    <p class="text-white py-2">시창 청음&이론수업</p>
                    <p class="text-white py-2">반주 악기 (피아노, 기타)</p>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-4">입시</p>
    <p>최고의 강사진</p>
    <p>합격자소개</p>
    <p>신입생모집</p>

    <x-swiper></x-swiper>
</div>
