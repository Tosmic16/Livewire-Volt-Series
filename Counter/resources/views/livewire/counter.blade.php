<div class="flex flex-col items-center justify-center min-h-screen">
    <div class="w-40 h-40 bg-blue-500 rounded-full flex items-center justify-center">
      <div class="text-white text-9xl font-bold">{{ $count }}</div>
    </div>
    <div class="flex justify-center space-x-4 mt-4 text-4xl">
      <button wire:click="increment" class="text-white bg-green-500 rounded-full w-10 h-10 flex items-center justify-center hover:bg-green-600 focus:outline-none">
        +
      </button>
      <button wire:click="decrement" class="text-white bg-red-500 rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 focus:outline-none">
        -
      </button>
    </div>
  </div>
  