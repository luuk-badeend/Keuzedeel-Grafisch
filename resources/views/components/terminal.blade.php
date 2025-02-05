@php
    $sections = [
        'Skills' => [
            'Frontend' => ['HTML.txt', 'CSS.txt', 'JavaScript.txt'],
            'Backend' => ['PHP.txt', 'Laravel.txt', 'Node.js.txt'],
            'Database' => ['MySQL.txt', 'PostgreSQL.txt', 'MongoDB.txt'],
        ],
    ];
@endphp

@foreach ($sections as $sectionTitle => $section)
    <div class="text-white flex-col bg-black p-12">
        <div class="flex">
            <p class="bg-[#585858] px-3 py-0.5">luuk</p>
            <p class="bg-[#0087af] px-3 py-0.5">~</p>
            <p class="bg-[#444444] px-3 py-0.5">dev</p>
            <div class="triangle-right"></div>
            <p class="ml-4 py-0.5">tree</p>

            <style>
                .triangle-right {
                    width: 0;
                    height: 0;
                    border-top: 14px solid transparent;
                    border-bottom: 14px solid transparent;
                    border-left: 10px solid #444444;
                    margin-left: 0;
                    /* Adjusted margin-left to 0 */
                }
            </style>
        </div>
        <p class="text-Folder font-black" style="margin-left: -1px;">.</p>
        <div class="flex">
            <div class="border-l-2 border-b-2 h-4 w-8"></div>
            <p class="text-Folder font-bold pl-2 pb-1">{{ $sectionTitle }}</p>
        </div>

        @foreach ($section as $sectionName => $skills)
            <div class="ml-11 flex">
                <div>
                    <div class="border-l-2 border-b-2 h-4 w-8"></div>
                    @if (!$loop->last)
                        <div class="border-l-2 border-b-2 h-2 w-0"></div>
                    @endif
                </div>
                <p class="pl-1 text-Folder font-bold">{{ $sectionName }}</p>
            </div>

            @foreach ($skills as $skill)
                <div class="ml-11 flex">
                    @if (!$loop->parent->last)
                        <div class="border-l-2 h-8"></div>
                    @endif
                    <div class="ml-10">
                        <div class="border-l-2 border-b-2 h-4 w-8"></div>
                        @if (!$loop->last)
                            <!-- Do something when it's the last one in the array -->
                            <div class="border-l-2 border-b-2 h-4 w-0"></div>
                        @endif
                    </div>
                    <p class="pl-1">{{ $skill }}</p>
                </div>
            @endforeach
        @endforeach
    </div>
@endforeach
