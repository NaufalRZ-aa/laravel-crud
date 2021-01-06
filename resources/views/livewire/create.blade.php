<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <form>          
            <div>
              <p class="text-xl text-center font-bold mb-3">Form Create</p>
            </div>
              <div>
              <div class="mb-2">
                  <input wire:model="postId" type="hidden" name="name" class="shadow appreance-none border rounded w-full py-2 px-3" placeholder="Input Here...">
                </div>
                <div class="mb-2">
                  <label for="name" class="block font-bold">Name</label>
                  <input wire:model="name" type="text" name="name" class="shadow appreance-none border rounded w-full py-2 px-3" placeholder="Input Here...">
                  @error('name') <h1 class="text-red-500">{{$message}}</h1> @enderror
                </div>
                <div class="mb-2">
                  <label for="" class="block font-bold">Rank</label>
                  <input wire:model="rank" type="text" name="rank" class="shadow appreance-none border rounded w-full py-2 px-3" placeholder="Input Here...">
                  @error('rank') <h1 class="text-red-500">{{$message}}</h1> @enderror
                </div>
                <div class="mb-2">
                  <label for="name" class="block font-bold">Nation</label>
                  <input wire:model="nation" type="text" name="nation" class="shadow appreance-none border rounded w-full py-2 px-3" placeholder="Input Here...">
                  @error('nation') <h1 class="text-red-500">{{$message}}</h1> @enderror
                </div>
                <div class="mb-2">
                  <label for="name" class="block font-bold">Ability</label>
                  <textarea wire:model="ability" type="text" name="abilty" class="shadow appreance-none border rounded w-full py-2 px-3" placeholder="Input Here..."></textarea>
                  @error('ability') <h1 class="text-red-500">{{$message}}</h1> @enderror
                </div>
              </div>          
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
            Submit
          </button>
          <button wire:click="hideModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
          </button>
        </div>
        </form>
      </div>
  </div>
</div>
