<!-- resources/views/livewire/adminpanel.blade.php -->

<div class="flex">
    <!-- Sidebar -->
    <livewire:student-list />

    <!-- Main Content -->
    <div class="flex flex-col flex-1 bg-gray-100">
        <!-- Navbar -->
        <nav class="p-4 bg-gray-800">
            <div class="flex items-center justify-between flex-between">
                <!-- Logo or Branding (Add your logo or branding here) -->

                <div class="text-white"></div>

                <!-- Right Side of Navbar -->
                <div class="flex items-center space-x-4">
                    <!-- Login Button (Replace with your login logic) -->
                    <button class="px-4 py-2 text-white bg-indigo-500 rounded-full hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo">
                        Login
                    </button>

                    <!-- Search Bar -->
                    <div class="relative">
                        <input type="text" class="px-2 py-1 border rounded focus:outline-none focus:shadow-outline-gray" placeholder="Search...">
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content (Add your main content here) -->
        <div class="p-4">
            <!-- Your main content goes here -->
        </div>
    </div>
</div>
