<div class="flex flex-wrap">
    <div class="bg-Primary text-white p-10 border border-Border flex gap-2 flex-col">
        <div class="w-full mb-4">
            <h2 class="font-medium text-2xl mb-2">Frontend</h2>
            @foreach (['HTML', 'CSS', 'JavaScript', 'React', 'Vue.js'] as $skill)
                <span class="rounded-lg bg-blue-200 text-blue-800 text-xs font-semibold px-4 py-1">{{ $skill }}</span>
            @endforeach
        </div>
        <div class="w-full mb-4">
            <h2 class="font-medium text-2xl mb-2">Backend</h2>
            @foreach (['PHP', 'Laravel', 'Node.js'] as $skill)
                <span class="rounded-lg bg-blue-200 text-blue-800 text-xs font-semibold px-4 py-1">{{ $skill }}</span>
            @endforeach
        </div>
        <div class="w-full mb-4">
            <h2 class="font-medium text-2xl mb-2">Other</h2>
            @foreach (['Linux'] as $skill)
                <span class="rounded-lg bg-blue-200 text-blue-800 text-xs font-semibold px-4 py-1">{{ $skill }}</span>
            @endforeach
        </div>
    </div>
</div>
