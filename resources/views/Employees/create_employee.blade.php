<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-100 to-blue-50 py-12 mt-8">

        <div class="max-w-xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">

           
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6">
                <h2 class="text-2xl font-bold text-white text-center">
                Add New Employee
                </h2>
                <p class="text-blue-100 text-sm text-center mt-1">
                    Fill in employee details below
                </p>
            </div>

          
            <div class="p-8">
                <form action="employees/store" method="POST" class="space-y-6">
                    @csrf

                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Enter Full Name
                        </label>
                        <input type="text" name="name" placeholder="May Thu Khine"
                            class="w-full rounded-lg border-gray-300 px-4 py-2.5
                                   focus:border-blue-500 focus:ring-blue-500
                                   transition duration-200">
                    </div>

                   
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email Address
                        </label>
                        <input type="email" name="email" placeholder="may@example.com"
                            class="w-full rounded-lg border-gray-300 px-4 py-2.5
                                   focus:border-blue-500 focus:ring-blue-500
                                   transition duration-200">
                    </div>

                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Position
                        </label>
                        <input type="text" name="position" placeholder="Assistant Teacher"
                            class="w-full rounded-lg border-gray-300 px-4 py-2.5
                                   focus:border-blue-500 focus:ring-blue-500
                                   transition duration-200">
                    </div>

                    
                    <div class="pt-4 flex justify-end">
                        <button type="submit"
                            class="inline-flex items-center gap-2
                                   bg-blue-600 text-white font-medium
                                   px-6 py-2.5 rounded-lg
                                   hover:bg-blue-700
                                   shadow-md hover:shadow-lg
                                   transition duration-200">
                            ➕ Add Employee
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
