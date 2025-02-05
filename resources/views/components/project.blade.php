<div class="flex flex-col border bg-Primary p-10 gap-2 max-w-xl text-Depressed">
    <h1 class="text-2xl font-bold">{{ $title }}</h1>
    <p class="text-sm text-DepressedSecondary">Date: January 1, 2023</p>
    <div class="flex flex-wrap gap-2 mt-2">
        @foreach ($technologies as $tech)
            <span
                class="rounded-lg bg-blue-200 text-Folder text-xs font-semibold px-2.5 py-0.5">{{ $tech }}</span>
        @endforeach
    </div>
    <p class="my-10">{{ $text }}</p>
    <a href="#Repository" class="text-blue-500 hover:underline font-bold">View on GitHub</a>
</div>
