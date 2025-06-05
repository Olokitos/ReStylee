<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 bg-white shadow-sm">

        <!-- Image container with fixed size -->
        <div class="mx-auto rounded-xl overflow-hidden shadow-md" style="width: 258px; height: 129px;">
            <img 
                src="https://i.pinimg.com/736x/2e/e0/1c/2ee01c86b88fbd617d6b0e707f005a29.jpg" 
                alt="Dashboard Banner"
                class="w-full h-full object-cover"
            />
        </div>

        <!-- Transparent background button below the image -->
        <div class="mx-auto">
  <a
    href="marketplace"
    class="inline-block bg-transparent border border-black text-black font-semibold py-3 px-5 rounded shadow-md hover:bg-black hover:text-white transition text-center"
  >
    Buy Now
  </a>
</div>


        <h1 class="text-2xl font-bold text-gray-800 text-center mt-4">Dashboard Overview</h1>

        <div class="grid auto-rows-min gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Cards here -->
            ...
        </div>
    </div>
</x-layouts.app>
