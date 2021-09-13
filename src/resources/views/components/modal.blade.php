<div x-data="{ open: false }">
    <button x-ref="modal1_button"
            @click="open = true"
            class="w-full bg-green-500 px-4 py-2 border border-transparent rounded-md flex items-center justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none sm:w-auto sm:inline-flex">
        Hire
    </button>

    <div role="dialog"
         aria-labelledby="modal1_label"
         aria-modal="true"
         tabindex="0"
         x-show="open"
         @click="open = false; $refs.modal1_button.focus()"
         @click.away="open = false; $refs.modal1_button.focus()"
         class="fixed top-0 left-0 w-full h-screen flex justify-center items-center">
        <div class="absolute top-0 left-0 w-full h-screen bg-black opacity-60"
             aria-hidden="true"
             x-show="open"></div>
        <div @click.stop=""
             x-show="open"
             class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white w-3/5 h-3/5 z-10">
            <div class="p-6 border-b">
                <h2 id="modal1_label">Hire Adventurer</h2>
            </div>
            <div class="p-6">
                Are you sure you want to hire this adventurer?
            </div>
        </div>
    </div>
</div>
