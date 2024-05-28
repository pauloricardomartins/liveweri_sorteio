<div>
    <div class="rounded-t-lg bg-green-200 border-2 border-green-600 text-center p-20 text-green-700 font-bold text-4xl">
        {{ $winner }}
        <span wire:stream="winner"></span>
    </div>

    <button wire:click="run" class="w-full rounded-b-lg bg-slate-800 text-slate-300 text-center uppercase font-bold  hover:bg-slate-900 p-2">RUN</button>
</div>
